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
   $jobDescription =get_field('job_short_description', get_the_ID());
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
                        <h5 class="font-weight--normal text-white"><?php echo isset($jobDescription) && !empty($jobDescription) ? $jobDescription: ''; ?></h5>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="requirements-vision section-space--pt_60">
    <div class="container">
        <div class="ht-problem-solution style-01">
        <?php the_content(); ?>
            <?php
               
                $jobRequirement = get_field('job_requirement', get_the_ID());
            ?>
            
            <!-- <div class="item">
                <div class="row">
                    <div class="col-md-12">
                    <h4 class="label solution-label section-space--mb_50 text-color-primary" >Job Description</h4>
                        <div class="solution">
                        <?php echo $jobDescription; ?>
                        </div>
                    </div>
                    <div class="section-space--pt_60 col-md-12">
                    <h4 class="label solution-label section-space--mb_50 text-color-primary">Job Requirement</h4>
                        <div class="solution">
                        <?php echo $jobRequirement; ?>
                        </div>
                    </div>
                </div>
            </div> -->
            
        </div>
      
     
  
        <div class="col-lg-12 ">
            <div class="feature-list-button-box mt-30 text-center ">
            <div class="col-md-4 px-20 pb-30 bb-1">
            <?php $careerPage = get_page_by_path('career');
            
            $careerLabel = get_field('position_label',$careerPage ->ID);
            ?>
            <?php echo isset($careerLabel) ? $careerLabel : ''; ?> <span class="breadcrumb-item active"><b><?php the_title() ;?></b></span>
            </div>
            <div class="col-md-12 fs-12 pt-50 pb-10 bb-1 mb-20">
            <div class="breadcrumb_box text-left">
                
                    <!-- breadcrumb-list start -->
                    
                    <ul class="breadcrumb-list">
                        <!-- <li class="breadcrumb-item "><a href="<?php echo get_permalink($careerPage ->ID); ?>">Career</a></li> -->
                        <!-- Applied For <li class="breadcrumb-item active"><?php the_title() ;?></li> -->
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
                <?php  echo do_shortcode('[contact-form-7 id="249" title="Career"  ]'); ?>
                <?php $careerForm = get_page_by_path('apply'); ?>
                <!-- <a href="<?php echo get_permalink($careerForm ->ID); ?>" class="ht-btn ht-btn-md">Apply for this role</a>                            -->
            </div>
        </div>
    </div>
</div>
<div class="row"></div>
<?php get_footer(); ?>
