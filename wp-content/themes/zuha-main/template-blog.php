<?php
/*
Template Name: Blog
*/
?>
<?php get_header();?>
<?php $bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );?>
<!-- breadcrumb-area start -->
<div class="breadcrumb-area" style="background-image: url(<?php echo isset($bannerImage) ? $bannerImage[0] : ''; ?>) ;">>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                        <h1 class="mb-15 text-white"><?php the_title(); ?></h1>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="<?php home_url(); ?>" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">Blog Lising</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
 <!--====================  Blog Area Start ====================-->
 <?php /* ?>
 <div class="blog-pages-wrapper section-space--ptb_100">
    <div class="container">
        <div class="row">
        <?php
        $args = array('post_type' => 'post','posts_per_page' => -1, 'order_by'=>'desc');
        $getBlog = new WP_Query( $args );
        global $post;
        $cnt=1;
        $numberOfPosts=$getBlog->found_posts;
        if ( $getBlog->have_posts() ) {
            while ( $getBlog->have_posts() ) : $getBlog->the_post();    ?>
            <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-grid">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="<?php echo the_permalink(); ?>">
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail(array(350,200), array('class' => 'img-fluid'));
                            }
                            ?>
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info lg-blog-post-info">
                        <div class="post-meta">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                <?php echo date(get_option('date_format')); ?>
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a>
                        </h5>

                        <div class="post-excerpt mt-15">
                            <p> <?php  echo wp_trim_words( get_the_content(), 20 ); ?></p>
                        </div>
                        <div class="btn-text">
                            <a href="<?php the_permalink(); ?>">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->

            </div>

            <?php
                endwhile;
        }
            ?>


            

        </div>
    </div>
</div>
<?php */ ?>
<!--====================  Blog Area End  ====================-->
<div class="feature-large-images-wrapper section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                <?php
                    $args = array('post_type' => 'post','posts_per_page' => -1, 'order_by'=>'desc');
                    $getBlog = new WP_Query( $args );
                    global $post;
                    $cnt=1;
                    $numberOfPosts=$getBlog->found_posts;
                    if ( $getBlog->have_posts() ) {
                        while ( $getBlog->have_posts() ) : $getBlog->the_post();    ?>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <a href="<?php the_permalink(); ?>" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <?php
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
                                                <span class="button-text">Read More</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- ht-box-icon End -->
                            </div>
                            <?php
                        endwhile;
                    }
                    ?>        
                </div><div class="col-lg-12 wow move-up">
                <!-- <div class="ht-pagination mt-30 pagination justify-content-center">
                    <div class="pagination-wrapper">

                        <ul class="page-pagination">
                            <li><a class="prev page-numbers" href="#">Prev</a></li>
                            <li><a class="page-numbers current" href="#">1</a></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="next page-numbers" href="#">Next</a></li>
                        </ul>

                    </div>
                </div> -->
            </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer();?>

