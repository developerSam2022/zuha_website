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
  <div class="about-banner-wrap banner-space about-us-bg"  style="background-image: url(<?php echo isset($bannerImage) ? $bannerImage[0] : ''; ?>) ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-banner-content text-center">
                    <h1 class="mb-15 text-white"><?php the_title(); ?></h1>
                    <h5 class="font-weight--normal text-white"><?php the_field('short_description', get_the_ID()); ?> </h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===========  feature-large-images-wrapper  Start =============-->
<div class="feature-large-images-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <?php the_content();?>
                            <!-- section-title-wrap Start -->
                            <!-- <div class="section-title-wrap text-center section-space--mb_60">
                                <h6 class="section-sub-title mb-20">Our company</h6>
                                <h3 class="heading">We run all kinds of IT services that <br> vow your <span class="text-color-primary"> success</span></h3>
                            </div> -->
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <!-- <div class="cybersecurity-about-box section-space--pb_70">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-1">
                                <div class="modern-number-01">
                                    <h2 class="heading  me-5"><span class="mark-text">38</span>Years’ Experience in IT</h2>
                                    <h6 class="heading mt-30">More About Our Success Stories</h6>
                                </div>
                            </div>

                            <div class="col-lg-5 offset-lg-1">
                                <div class="cybersecurity-about-text">
                                    <div class="text">Mitech specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. We put a strong focus on the needs of your business to figure out solutions that best fits your demand and nail it.</div>
                                    <div class="button-text">
                                        <a href="#" class="btn-text">
                                            Discover now
                                            <span class="button-icon ml-1">
                                    <i class="far fa-long-arrow-right"></i>
                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->


                    
                </div>
            </div>
            <!--===========  feature-large-images-wrapper  End =============-->
            
<?php get_footer(); ?>
