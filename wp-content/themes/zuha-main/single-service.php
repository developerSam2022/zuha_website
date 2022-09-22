<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
  <!-- <div class="about-banner-wrap banner-space bg-img" data-bg="assets/images/bg/managed-it-services-hero-bg.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-banner-content text-center">
                                <h1 class="mb-15 text-white">Services Details</h1>
                                <h5 class="font-weight--normal text-white">Reach out to the world’s most reliable IT services.</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
   <?php
   $bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
    
if(isset($bannerImage) && !empty($bannerImage)){?>
        <div class="about-banner-wrap banner-space about-us-bg"  style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/bg/new-cta-bg.webp'; ?>) ;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="about-banner-content text-center">
                            <h1 class="mb-15 text-white"><?php the_title(); ?></h1>
                            <h5 class="font-weight--normal text-white"><?php the_field('short_banner_description', get_the_ID()); ?> </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
<div class="accordion-wrapper section-space--pb_100">
    <div class="container">
        <div class="row ">
            <?php if(isset($bannerImage) && empty($bannerImage)){ ?>
                <div class="post-head">
                    <h1><?php the_title(); ?></h1>
                </div>
            <?php } ?>
            <div class="col-lg-12">
                <div class="feature-list-button-box mt-30 text-center">
               <?php the_content(); ?>
                </div>
            </div>
            
        </div>

      
    </div>
</div>
<?php
if(get_field('faq_group', get_the_ID())): 
    $faq =get_field('faq_group', get_the_ID());
    $getFaq = $faq['questions'];?>
    <div class="accordion-wrapper section-space--pb_100">
        <div class="container">
            <?php if(isset($getFaq) && !empty($getFaq)): ?>        
                <div class="row ">
                    <div class="col-12">
                        <div class="section-title section-space--mb_60 text-center">
                            <h3 class="heading"> <span class="text-color-primary">FAQs</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="faq-two-wrapper section-space--pt_90">
                            <div id="accordion_two">
                                <?php $i=1;
                                        foreach($getFaq as $key=>$value):?>
                                            <div class="card">
                                                <div class="card-header" id="heading__<?php echo $i; ?>">
                                                    <h5 class="mb-0 font-weight--bold">
                                                        <button class="btn-link" data-bs-toggle="collapse" data-bs-target="#tab__<?php echo $i; ?>" aria-expanded="<?php if($i==1) { echo 'true'; }else{ echo 'false';} ?>" aria-controls="tab__10">
                                                            <?php echo $value['question']; ?> 
                                                            <span>
                                                                <i class="far fa-caret-circle-down"></i>
                                                                <i class="far fa-caret-circle-right"></i> 
                                                            </span>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="tab__<?php echo $i; ?>" class="<?php if($i==1) { echo 'show'; }else{ echo 'collapse';} ?>" aria-labelledby="heading__<?php echo $i; ?>" data-bs-parent="#accordion_two">
                                                    <div class="card-body">
                                                        <p><?php echo $value['answer']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php 
                                    // if($i ==2){ echo '</div></div></div> <div class="col-lg-6"><div class="faq-two-wrapper section-space--pt_90">';} 
                                        $i++;
                                        endforeach;
                                ?>
                        </div>                
                    </div>            
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>