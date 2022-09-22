<?php
/*
Template Name: Our Services
*/
?>
<?php get_header();?>

<div class="feature-images-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center">
                                <h3 class="heading"><?php the_field('sub_heading', get_the_ID()); ?> <br>  <span class="text-color-primary">  <?php the_field('highlight_heading', get_the_ID()); ?></span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-images__one">
                                <div class="row">
                                <?php
                                    $args = array('post_type' => 'service','posts_per_page' => -1,'order_by'=>'desc');
                                    $getServices = new WP_Query( $args );
                                    global $post;
                                    $numberOfPosts=$getServices->found_posts;
                                    if ( $getServices->have_posts() ) {
                                    while ( $getServices->have_posts() ) : $getServices->the_post();   
                                    $heroImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                                    ?>

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">

                                                    <?php
                                                        if(has_post_thumbnail()){
                                                            the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
                                                        }
                                                    ?>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading"><?php echo $post->post_title; ?> </h5>
                                                    <div class="text"><?php  echo wp_trim_words( get_the_content(), 20 ); ?>
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <i class="far fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                   <?php
                                   endwhile;
                                }
                                   ?>

                                </div>
                            </div>

                            <div class="section-under-heading text-center section-space--mt_80">Challenges are just opportunities in disguise. <a href="#">Take the challenge!</a></div>

                        </div>
                    </div>
                </div>
            </div>
<?php get_footer();?>

