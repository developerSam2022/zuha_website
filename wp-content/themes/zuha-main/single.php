<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
$bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );?>


<!-- breadcrumb-area start -->
<div class="breadcrumb-area" style="background-image: url(<?php echo isset($bannerImage) ? $bannerImage[0] : ''; ?>) ;">>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb_box text-center">
					<h2 class="breadcrumb-title text-white">Blog Details</h2>
					<!-- breadcrumb-list start -->
					<ul class="breadcrumb-list">
						<li class="breadcrumb-item text-white"><a href="<?php home_url(); ?>">Home</a></li>
						<li class="breadcrumb-item active text-white">Blog Details</li>
					</ul>
					<!-- breadcrumb-list end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb-area end -->

 <!--====================  Blog Area Start ====================-->
 <div class="blog-pages-wrapper section-space--ptb_100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Post Feature Start -->
				<!-- <div class="post-feature blog-thumbnail  wow move-up">
					<img class="img-fluid center" src="<?php echo isset($bannerImage) ? $bannerImage[0] : ''; ?>" alt="Blog Images">
				</div> -->
				<!-- Post Feature End -->
			</div>
			<div class="col-lg-8 m-auto">
				<div class="main-blog-wrap">
					<!--======= Single Blog Item Start ========-->
					<div class="single-blog-item  wow move-up">

						<!-- Post info Start -->
						<div class="post-info lg-blog-post-info">
							<div class="post-categories text-center">
								<!-- <a href="#"> Success Story, Tips </a> -->
							</div>

							<h3 class="post-title text-center">
								<a href="#"><?php  the_title(); ?></a>
							</h3>

				

							<div class="post-excerpt mt-15">
								<?php the_content(); ?>

								<!-- <div class="entry-post-share-wrap  border-bottom">
									<div class="row align-items-center">
										<div class="col-lg-6 col-md-6">
											<div class="entry-post-tags">
												<div class="tagcloud-icon">
													<i class="fa fa-tags"></i>
												</div>
												<div class="tagcloud">
													<a href="#">designer</a>, <a href="#">font</a>, <a href="#">mookup</a>
												</div>
											</div>
										</div>

									</div>
								</div> -->


								<div class="related-posts-wrapper">

									<div class="row">
										<div class="col-lg-6">
											<!-- Single Valid Post Start -->
											<?php
											$previous = get_adjacent_post('', '', true);
											if(!empty($previous)) 
											echo ' <a class="single-valid-post-wrapper" href="' . get_permalink($previous->ID) . '" title="' . $previous->post_title . '">
											<div class="single-blog__item"><div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-03-370x120.webp">
											</div><div class="post-content">
											<h6 class="post-title font-weight--bold">'.$previous->post_title.'</h6>
										</div></div></a>';
											?>
										</div>
										<div class="col-lg-6">
										<?php
												$next = get_adjacent_post('', '', false);
												if(!empty($next))
												 echo '<a class="single-valid-post-wrapper" href="' . get_permalink($next->ID) . '" title="' . $next->post_title . '">
												 <div class="single-blog__item">
													<div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-05-370x120.webp">
													</div>

													<div class="post-content">
														<h6 class="post-title font-weight--bold">'.$next->post_title.'</h6>
													</div>

												</div>
												 </a>';
											?>
										</div>
									</div>
								</div>

							</div>

						</div>
						<!-- Post info End -->
					</div>
					<!--===== Single Blog Item End =========-->

				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  Blog Area End  ====================-->
<?php get_footer(); ?>
