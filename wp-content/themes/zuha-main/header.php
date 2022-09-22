<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
  
	<?php endif; ?>
  
    <?php
       // $gCode = get_option( 'google_analytics_code' );
        $gCode = wp_specialchars_decode(get_option('google_analytics_code'));
        echo isset($gCode) && !empty($gCode) ? $gCode : '';
    ?>
  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-default" data-offset="100" >
<?php wp_body_open(); ?>


<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

 <!--====================  header area ====================-->
 <!-- <div class="header-area">

<div class="header-bottom-wrap header-sticky bg-white"> -->
    <div class="header-area header-area--absolute">

        <div class="header-top-bar-info border-bottom d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header position-relative">
                    <!-- brand logo -->
                    <div class="header__logo">
                        <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img class="img-fluid" src="<?php header_image(); ?>" width="160" height="35" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                      </a>
                    </div>

                   
                    <div class="header-right">
                        <!-- navigation menu -->
                        <?php if(is_front_page()) : ?> 
                            <div class="header__navigation menu-style-four d-none d-xl-block">
                        <?php elseif(is_page('about-us') || is_page('blog')): ?>
                            <div class="header__navigation menu-style-four d-none d-xl-block">
                        <?php elseif(get_post()->post_type === 'job' &&  is_single() || get_post()->post_type === 'service' &&  is_single()): ?>
                            <div class="header__navigation menu-style-four d-none d-xl-block">      
                        <?php else: ?>
                            <div class="header__navigation menu-style-three d-none d-xl-block">
                        <?php endif; ?>                        
                            <nav class="navigation-menu">

                            <?php
                                wp_nav_menu(
                                    array(
                                    'theme_location' => 'header',
                                    'container_class' => '',
                                    'menu_class' => '', 
                                    'menu' => 'navbarSupportedContent',
                                    'add_li_class'  => '',
                                    'container' => '',
                                    'link_before'   => '<span>',
                                    'link_after'    => '</span>'
                                    )
                                );
                            ?>
                            </nav>
                        </div>

                        <!-- mobile menu -->
                        <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!--====================  End of header area  ====================-->

<div id="main-wrapper">
  <div class="site-wrapper-reveal ">
  <?php if(is_front_page()) : ?> 
    <div class="resolutions-hero-slider position-relative">
            <div class="swiper-container hero-slider__container">
                <div class="swiper-wrapper">
                <?php
                        $args = array('post_type' => 'slider','posts_per_page' => 2);
                        $getSliders = new WP_Query( $args );
                        global $post;
                        if ( $getSliders->have_posts() ) {
                            while ( $getSliders->have_posts() ) : $getSliders->the_post();
                                $sliderMeta= get_field('slider_component', $post->ID );
                                $bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                            ?>
                                <div class="swiper-slide">
                                    <div class="hero-wrapper resolutions-hero-space resolutions-hero-bg" data-swiper-autoplay="5000"  style="background-image: url(<?php echo isset($bannerImage) && !empty($bannerImage) ? $bannerImage[0] : ''  ?>)">>
                                        <div class="resolutions-hero-area-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 m-auto">
                                                        <div class="service-hero-wrap wow move-up">
                                                            <div class="service-hero-text text-center">
                                                                <h3 class="text-white"> <?php echo isset($sliderMeta) && !empty($sliderMeta) ? $sliderMeta[0]['title'] : '';     ?></h3>
                                                                <h1 class="font-weight--reguler text-white mb-30"><?php echo $post->post_title; ?></h1>
                                                                <p class="text-white"><?php echo isset($sliderMeta) && !empty($sliderMeta) ? $sliderMeta[0]['description'] : '';     ?></p>

                                                                <div class="hero-button-group section-space--mt_50">
                                                                <?php 
                                                                    $contactPage = get_page_by_path('contact-us');
                                                                    $servicePage = get_page_by_path('our-services');
                                                                ?>                   
                                                                 <a href="<?php echo get_permalink($contactPage->ID); ?>" class="ht-btn ht-btn-md">Free consultation</a>
                                                                 <a href="<?php echo get_permalink($servicePage->ID); ?>" class="ht-btn ht-btn-md btn--white"><span class="btn-icon me-2"><i class="fa fa-play"></i></span> How we work</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                        <?php endwhile;                        
                        } ?>
                </div>
            </div>        
        </div>

    <!--===========  feature-images-wrapper  Start =============-->
    <div class="feature-images-wrapper bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-images__five resolutions-hero-bottom">
                        <div class="row testimonial-slider">
                            <div class="swiper-container testimonial-slider__container">
                                <div class="swiper-wrapper testimonial-slider__wrapper">
                                    <?php
                                    $devToolComponent = get_field('development_tools_container', 7);
                                    for($i=0; $i<count(array_filter($devToolComponent['slider_content'])); $i++){  ?>
                                        <div class="col-lg-4 col-md-6 wow move-up swiper-slide ">
                                            <!-- ht-box-icon Start -->
                                            <div class="ht-box-images style-05">
                                                <div class="image-box-wrap">
                                                    <div class="box-image">
                                                        <div class="default-image">
                                                            <img class="img-fulid" width="120" height="100" src="<?php echo !empty($devToolComponent['slider_content'][$i]['image']) ? $devToolComponent['slider_content'][$i]['image'] : get_template_directory_uri().'/assets/images/no-image.png'; ?>" alt="">
                                                        </div>
                                                        <div class="hover-images">
                                                            <img class="img-fulid"  width="120" height="100" src="<?php echo !empty($devToolComponent['slider_content'][$i]['image']) ? $devToolComponent['slider_content'][$i]['image'] : get_template_directory_uri().'/assets/images/no-image.png'; ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading"><?php echo $devToolComponent['slider_content'][$i]['title']; ?> </h5>
                                                        <div class="text"><?php echo $devToolComponent['slider_content'][$i]['description']; ?> 
                                                        </div>
                                                        <div class="box-images-arrow">
                                                            <!-- <a href="#">
                                                                <span class="button-text">Discover now<?php echo $i; ?></span>
                                                                <i class="far fa-long-arrow-right"></i>
                                                            </a> -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ht-box-icon End -->
                                        </div>
                                        <?php
                                    }
                                    ?>                                    
                                </div>                                   
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>                     -->
                </div>
            </div>                
        </div>
    </div>
    <div class="feature-icon-wrapper  border-bottom"></div>
<?php endif; ?>
            <!--===========  feature-images-wrapper  End =============-->

