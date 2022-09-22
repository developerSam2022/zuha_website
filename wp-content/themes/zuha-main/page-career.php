<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

use GuzzleHttp\Promise\Is;

get_header(); 
$careerPage =get_the_ID();
$bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );?>


<!-- breadcrumb-area start -->
<div class="breadcrumb-area" style="background-image: url(<?php echo isset($bannerImage) ? $bannerImage[0] : ''; ?>) ;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title"><?php the_title(); ?></h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="<?php home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Careers</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

 <!--======== careers-experts Start ==========-->
 <div class="careers-experts-wrapper section-space--pt_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_30">
                    <h3 class="heading"><?php the_content(); ?></h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="ht-simple-job-listing move-up animate">
                    <div clas="list">
                        <?php
                        $args = array('post_type' => 'job','posts_per_page' => -1);
                        $getCareerPost = new WP_Query( $args );
                        global $post;
                        if ( $getCareerPost->have_posts() ) {
                        while ( $getCareerPost->have_posts() ) : $getCareerPost->the_post();
                            $jobCategory = wp_get_post_terms( $post->ID, 'job_category', array( 'fields' => 'names' ) );
                            $jobEndDate =get_field('end_date',$post->ID);
                            $jobLocation =get_field('job_location', get_the_ID());
                            $currentDate = date("F j, Y"); 
                            if ($currentDate >  $jobEndDate) {?>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="job-info">
                                                <h5 class="job-name"><?php echo $post->post_title; ?></h5>
                                                <span class="job-time"><?php echo the_field('position', get_the_ID()); ?></span>
                                                <span class="text-color-primary""><strong?><?php echo isset( $jobCategory) && !empty( $jobCategory ) ? $jobCategory[0] : ''; ?></strong></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="job-description"><span>
                                            <i class="fa fa-map-marker link-icon"></i>
                                            <?php echo isset($jobLocation) && !empty($jobLocation) ? $jobLocation : '';  ?> </span>
                                            
                                            <p><i class='far fa-clock'></i> Ends: <?php  echo isset($jobEndDate) && !empty($jobEndDate) ? $jobEndDate : ''; ?></p></div>
                                            
                                        </div>
                                        

                                        <div class="col-md-3">
                                            <div class="job-button text-md-center">                                      
                                                <a class="ht-btn ht-btn-md" href="<?php the_permalink(); ?>"> Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                }
                            endwhile;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======== careers-experts End ==========-->
<div class="gallery-section section-space--ptb_100">
</div>

 <!--====================  Conact us Section Start ====================-->
 <div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-lg-6">
                <div class="conact-us-wrap-one">
                    <h3 class="heading"><?php $contact =the_field('heading', $careerPage); ?> </h3>

                    <div class="sub-heading"><?php echo get_field('short_text',$careerPage); ?></div>

                </div>
            </div>

            <div class="col-lg-6 col-lg-6">
                <div class="contact-info-one text-center">
                    <div class="icon">
                        <span class="fal fa-phone"></span>
                    </div>
                    <h6 class="heading font-weight--reguler">Reach out now!</h6>
                    <h2 class="call-us"><a href="tel:<?php echo the_field('phone_number', $careerPage); ?>"><?php echo the_field('phone_number', $careerPage); ?></a></h2>
                    <div class="contact-us-button mt-20">
                    <?php $contactPage = get_page_by_path('contact-us'); ?>
                        <a href="<?php echo get_permalink($contactPage->ID); ?>" class="btn btn--secondary">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  Conact us Section End  ====================-->
<?php get_footer(); ?>
