<?php
/*
Template Name: Home
*/
?>
<?php get_header();?>
<!--============ Service Hero Start ============-->
<?php
$devToolComponent = get_field('development_tools_container', 7);
$contactSection = get_field('contact_section_details', 7);
$heroImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );?>


  <!--===========  feature-images-wrapper  End =============-->


    <!--===========  Our Company History Start =============-->

    <div class="our-company-history section-space--ptb_100">
        <div class="container-fluid">
            <div class="grid-wrapper">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
                <div class="line line-4"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-custom-col">
                        <div class="section-title-wrap">
                          <?php $aboutUs = get_page_by_path('about-us'); ?>
                            <h6 class="section-sub-title mb-20"><?php echo  $aboutUs->post_title; ?></h6>
                            <?php  
                            if( get_field('component', $aboutUs->ID) ) {
                                while( the_repeater_field('component', $aboutUs->ID) ) { ?>
                                  <h3 class="heading"><?php echo get_sub_field('heading');  ?></h3>
                                  <p class="text mt-30"><?php echo get_sub_field('description'); ?></p>                              
                            <?php                                  
                              }
                            }
                          ?>
                           
                            <div class="inner-button-box section-space--mt_60">
                                <a href="<?php echo get_the_permalink($aboutUs->ID); ?>" class="ht-btn ht-btn-md">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rv-video-section">
                       <?php  
                            if( get_field('image_component', $aboutUs->ID) ) {
                                $cnt=1;
                                while( the_repeater_field('image_component', $aboutUs->ID) ) { 
                                  $sideImages= get_sub_field('upload_image'); ?>
                                   <div class="ht-banner-0<?php echo isset($cnt) ? $cnt : 0; ?> ">
                                    <!-- <img class="img-fluid border-radus-5 animation_images one wow fadeInDown" src="<?php echo isset($sideImages) && !empty($sideImages) ? $sideImages['url'] : ''; ?>" alt=""> -->
                                  </div>                         
                              <?php
                                $cnt++;                                  
                              }
                            }
                          ?>    


                        <div class="main-video-box video-popup">
                        <?php  
                            if( get_field('video_manage_components', $aboutUs->ID) ) {
                                while( the_repeater_field('video_manage_components', $aboutUs->ID) ) { 
                                  $getImage= get_sub_field('upload_image');    ?>
                                  <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                      <div class="single-popup-wrap">
                                          <img class="img-fluid border-radus-5" src="<?php echo isset($getImage) && !empty($getImage) ? $getImage['url'] : ''; ?>" alt="">
                                          <div class="ht-popup-video video-button">
                                              <div class="video-mark">
                                                  <div class="wave-pulse wave-pulse-1"></div>
                                                  <div class="wave-pulse wave-pulse-2"></div>
                                              </div>
                                              <div class="video-button__two">
                                                  <div class="video-play">
                                                      <span class="video-play-icon"></span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </a>                         
                              <?php                                
                              }
                            }
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--===========  feature-icon-wrapper  Start =============-->
    <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center section-space--mb_40">
                    <?php $servicePage = get_page_by_path('our-services'); ?>
                    <h6 class="section-sub-title mb-20"><?php echo $servicePage->post_title; ?></h6>
                    <h3 class="heading"><?php the_field('sub_heading', $servicePage->ID); ?><br>  <span class="text-color-primary"> <?php the_field('highlight_heading', $servicePage->ID); ?></span></h3>
                    <!-- <h6><?php the_field('short_description', $servicePage->ID); ?></h6> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title-wrap text-center section-space--mb_40">                 
                    <p><?php the_field('short_description', $servicePage->ID); ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="feature-list__two">
                    <div class="row">
                    <?php
                        $args = array('post_type' => 'service','posts_per_page' => 6);
                        $getServices = new WP_Query( $args );
                        global $post;
                        $cnt=1;
                        $numberOfPosts=$getServices->found_posts;
                        if ( $getServices->have_posts() ) {
                        while ( $getServices->have_posts() ) : $getServices->the_post();    ?>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <?php if(get_field('icon_image') != "") {?>
                                                <div class="svg-icon" id="svg-1">
                                                    <img class="svg-icon" src="<?php echo the_field('icon_image', $post->ID ); ?>" >
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading"><?php echo $post->post_title; ?> </h5>
                                            <div class="text"><?php  echo wp_trim_words( get_the_content(), 20 ); ?> </div>
                                            <div class="feature-btn">
                                                <a href="<?php echo get_the_permalink($post->Id); ?>">
                                                    <span class="button-text">Read More</span>
                                                    <i class="far fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            endwhile;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-list-button-box mt-30 text-center">
                    <a href="<?php echo get_permalink($servicePage->ID); ?>" class="ht-btn ht-btn-md">See all services</a>
                    <?php $contactPage = get_page_by_path('contact-us'); ?>
                    <a href="<?php echo get_permalink($contactPage->ID); ?>" class="ht-btn ht-btn-md ht-btn--outline">Contact us now </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="tabs-wrapper bg-gray section-space--ptb_100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero/slider-processing-slide-01-bg.webp);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        <h2 class="section-sub-title mb-20 text-white"><?php echo isset($devToolComponent) && !empty($devToolComponent) ? $devToolComponent['heading'] : '';  ?></h2>
                        <h6 class="section-title text-white"><?php echo isset($devToolComponent) && !empty($devToolComponent) ? $devToolComponent['sub_heading'] : '';  ?> </h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-list-button-box mt-30 text-center">
                        <ul class="nav justify-content-center ht-tab-menu " role="tablist">
                            <?php
                            $getCategory = get_terms( array( 'taxonomy' => 'technology_category','orderby'=>'id', 'order'=>'asc') );
                            if(isset($getCategory) && !empty($getCategory)){ 
                                $i=1;
                                foreach($getCategory as $val){ ?>
                                <li class="tab__item nav-item">
                                    <a class="nav-link <?php echo isset($i) && $i==1 ? 'active': ''; ?>" id="nav-tab2" data-bs-toggle="tab" href="#tab_list_<?php echo $i; ?>" role="tab" aria-selected="true"><?php echo $val->name; ?></a>
                                </li>
                            <?php
                                $i++;
                            } }?>
                        </ul>
                        <div class="section-title-wrap text-center section-space--mb_40">
                            
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="section-title-wrap text-center section-space--mb_40">                 
                            <p class="section-title text-white"><?php echo isset($devToolComponent) && !empty($devToolComponent) ? $devToolComponent['short_description'] : '';  ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ht-tab-wrap">
                    <div class="tab-content ht-tab__content">
                        <?php 
                        if(isset($getCategory) && !empty($getCategory)){ 
                            $i=1;
                            foreach($getCategory as $val){ ?>
                            <div class="tab-pane <?php echo isset($i) &&  $i==1 ? 'fade active show': ''; ?>" id="tab_list_<?php echo $i; ?>" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_60">
                                    <div class="row">
                                    <?php
                                    $args = array('post_type' => 'technologi',
                                    'tax_query' => array(
                                                        array(
                                                        'taxonomy' => 'technology_category',
                                                        'field' => 'term_id',
                                                        'terms' => $val->term_id,
                                                        'operator'  => 'IN',
                                                            )
                                                        )
                                                );
                                    $getTechnology = new WP_Query( $args );                                                    
                                    global $post;                                                    
                                    if ( $getTechnology->have_posts() ) {                                                            
                                        while ( $getTechnology->have_posts() ) : $getTechnology->the_post();?>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="ht-box-icon style-01 single-svg-icon-box">
                                                <div class="icon-box-wrap">
                                                    <div class="icon">
                                                        <div class="svg-icon">
                                                            <a  href="<?php the_permalink();  ?>">
                                                                <?php
                                                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
                                                                    if(has_post_thumbnail()){
                                                                        the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
                                                                    }
                                                                ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content">                                                        
                                                        <a class="nav-link heading" href="<?php the_permalink();  ?>" data-mdb-toggle="tooltip" title="<?php echo $post->post_title; ?>">
                                                            <h5 class="heading"><?php echo $post->post_title; ?></h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php                                                            
                                        endwhile;
                                    }?>
                                    </div>
                                </div> 
                            </div>
                        <?php 
                        $i++;
                            }
                        }
                        ?>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="feature-large-images-wrapper section-space--ptb_100">
    <?php 
    $args = array('post_type' => 'post','posts_per_page' => -1);
    $getBlogs = new WP_Query( $args );
    global $post;
    if ( $getBlogs->have_posts() ) {?>
        <div class="container">        
                <div class="row">
                    <?php $blogPage = get_page_by_path('blog'); ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20"><?php echo $blogPage->post_title; ?></h6>
                            <h3 class="heading"> <span class="text-color-primary"> <?php the_field('sub_heading', $blogPage->ID); ?></span></h3>
                        </div>
                    </div>   
                    <div class="col-12">
                        <div class="row">
                                <?php
                                        while ( $getBlogs->have_posts() ) : $getBlogs->the_post(); ?>
                                        <div class="col-lg-4 col-md-6 wow move-up">
                                            <!-- ht-box-icon Start -->
                                            <a href="<?php the_permalink(); ?>" class="ht-large-box-images style-03">
                                                <div class="large-image-box">
                                                    <div class="box-image">
                                                        <div class="default-image">
                                                        <?php
                                                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
                                                            if(has_post_thumbnail()){
                                                                the_post_thumbnail('large', array('class' => 'img-fluid'));
                                                            }
                                                            ?>
                                                        </div>                                                    
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading"><?php echo $post->post_title; ?></h5>
                                                        <div class="text"><?php  echo wp_trim_words( get_the_content(), 20 ); ?></div>
                                                        <div class="box-images-arrow">
                                                            <span class="button-text">Discover now</span>
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- ht-box-icon End -->
                                        </div>
                                        <?php
                                endwhile;
                        
                            ?>
                        </div>
                    </div>
                </div>       
        </div>
        <?php } ?> 
</div>
   


<!--=========== Service Projects Wrapper End =============-->          
 <!--============ Contact Us Area Start =================-->
 <div class="contact-us-area service-contact-bg section-space--ptb_100">
                <div class="container">
                    <div class="row align-items-center">
                        <?php if(isset($contactSection) && !empty($contactSection)) : ?>        
                            <div class="col-lg-4">
                                <div class="contact-info sytle-one service-contact text-left">

                                    <!-- <div class="contact-info-title-wrap text-center">
                                        <h3 class="heading text-white mb-10">4.9/5.0</h3>
                                        <div class="ht-star-rating lg-style">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="sub-text">by 700+ customers for 3200+ clients</p>
                                    </div> -->

                                    <div class="contact-list-item">
                                        <a href="tel:<?php echo isset($contactSection) && !empty($contactSection) ? $contactSection['phone']: ''; ?>" class="single-contact-list">
                                            <div class="content-wrap">
                                                <div class="content">
                                                    <div class="icon">
                                                        <span class="fal fa-phone"></span>
                                                    </div>
                                                    <div class="main-content">
                                                        <h6 class="heading"><?php echo isset($contactSection) && !empty($contactSection) ? $contactSection['phone_label_text']: ''; ?></h6>
                                                        <div class="text"><?php echo isset($contactSection) && !empty($contactSection) ? $contactSection['phone']: ''; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="mailto:<?php echo isset($contactSection) && !empty($contactSection) ? $contactSection['email']: ''; ?>" class="single-contact-list">
                                            <div class="content-wrap">
                                                <div class="content">
                                                    <div class="icon">
                                                        <span class="fal fa-envelope"></span>
                                                    </div>
                                                    <div class="main-content">
                                                        <h6 class="heading"><?php echo isset($contactSection) && !empty($contactSection) ? $contactSection['email_label_text']: ''; ?></h6>
                                                        <div class="text"><?php echo isset($contactSection) && !empty($contactSection) ? $contactSection['email']: ''; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="col-lg-7 ms-auto">
                            <div class="contact-form-service-wrap">
                                <div class="contact-title text-center section-space--mb_40">
                                    <h3 class="mb-10">Need a hand?</h3>
                                    <p class="text">Reach out to the world’s most reliable IT services.</p>
                                </div>
                                <?php
                            echo do_shortcode('[contact-form-7 id="135" html_id="contact-form-2--" html_class="contact-form-home" title="Home Contact Form"]');
                          ?>
                                <!-- <form class="contact-form" id="contact-form-2" action="https://whizthemes.com/mail-php/jowel/mitech/php/services-mail.php" method="post"> -->
                                <!-- <form class="contact-form" id="contact-form-2" action="assets/php/services-mail.php" method="post">
                                    <div class="contact-form__two">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="contact-select">
                                            <div class="form-item contact-inner">
                                                <span class="inquiry">
                                        <select id="Visiting" name="Visiting">
                                            <option disabled selected>Select Department to email</option>
                                            <option value="Your inquiry about">Your inquiry about</option>
                                            <option value="General Information Request">General Information Request</option>
                                            <option value="Partner Relations">Partner Relations</option>
                                            <option value="Careers">Careers</option>
                                            <option value="Software Licencing">Software Licencing</option>
                                        </select>

                                    </span>
                                            </div>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="comment-submit-btn">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege-2"></p>
                                        </div>
                                    </div>
                                </form> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--============ Contact Us Area End =================--> 

<?php get_footer();?>

