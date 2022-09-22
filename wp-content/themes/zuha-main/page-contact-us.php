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
$bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );?>

    <!-- breadcrumb-area start -->

    <!-- breadcrumb-area end -->
    <div class="feature-icon-wrapper section-space--ptb_60 "></div>
<!--====================  Conact us Section Start ====================-->
<div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-lg-6">
                <div class="conact-us-wrap-one mb-30">
                    <h3 class="heading"><?php echo the_field('sub_heading', get_the_ID()); ?> </h3>
                    <div class="sub-heading"><?php echo the_field('short_description', get_the_ID()); ?></div>
                </div>
            </div>

            <div class="col-lg-6 col-lg-6">
                <div class="contact-form-wrap">
                     <?php  echo do_shortcode('[contact-form-7 id="135" html_id="contact-form-1" html_class="contact-form" title="Home Contact Form"]'); ?>                   
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  Conact us Section End  ====================-->
  <!--====================  Conact us info Start ====================-->
  <div class="contact-us-info-wrappaer section-space--pb_100">
    <div class="container">
        <div class="row align-items-center">
        <?php  
                if( get_field('location_details', get_the_ID()) ) {
                    while( the_repeater_field('location_details', get_the_ID()) ) { 
                        ?>
                        
                        <div class="col-lg-4 col-md-6">
                        <div class="conact-info-wrap mt-30">
                            <h5 class="heading mb-20"><?php  echo get_sub_field('country_name') ; ?></h5>
                            <ul class="conact-info__list">
                                <li><?php  echo get_sub_field('address') ; ?></li>
                                <li><a href="#" class="hover-style-link text-color-primary"><?php  echo get_sub_field('email') ; ?></a></li>
                                <li><a href="#" class="hover-style-link text-black font-weight--bold"><?php  echo get_sub_field('phone_number') ; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <?php                                
                    }
                }
                ?>
        </div>
    </div>
</div>
<!--====================  Conact us info End  ====================-->
<div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
                <div class="cta-content md-text-center">
                    <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
            <?php $aboutUs = get_page_by_path('about-us'); ?>
                <div class="cta-button-group--two text-center">
                    <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                    <a href="<?php echo get_the_permalink($aboutUs->ID); ?>" class="btn btn--secondary btn-two "><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php get_footer(); ?>
