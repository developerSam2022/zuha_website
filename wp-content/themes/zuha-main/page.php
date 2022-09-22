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

get_header(); ?>

<div id="intro">
    <div class="container">
        <div class="col-md-12">
        </div>
    </div>
</div><!-- end wrap -->
<section id="home"  class="post-wrapper-top clearfix">
        <div class="container">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h2></h2>
                </div>
                <!-- <ul class="breadcrumb pull-right">
                    <li> <i class="fa fa-long-arrow-left"></i>  Back to Main</li>
                </ul> -->
            </div>
        </div>
    </section><!-- end post-wrapper-top -->

    <div class="main-content">
        <div class="container">
            <div class="col-md-9 blog-content">                
                <div class="post-head">
                    <h1><?php the_title(); ?></h1>
                </div>

                <p></p>
            </div>
        </div>
</div>
<div class="feature-large-images-wrapper section-space--ptb_100">
                <div class="container">
                <div class="row">
                <?php the_content(); ?>
                </div>
                </div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
