<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
   <?php
   $bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
?>
 
<div class="breadcrumb-area"  style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg/new-cta-bg.webp) ;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                    <h1 class="mb-15 text-white"><?php the_title(); ?></h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item text-white"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><?php the_title() ;?></li>
                        </ul>
                        <h5 class="font-weight--normal text-white"><?php //the_content();?></h5>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vision-overview section-space--pt_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 section-title">
                            <div class="section-title-wrap section-space--mb_30">
                                <!-- <h3 class="heading">Overview</h3> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="vision-content">
                                <?php the_content(); ?>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
