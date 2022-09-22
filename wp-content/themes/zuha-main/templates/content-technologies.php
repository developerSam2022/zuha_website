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