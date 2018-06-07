<?php 
/*
Template Name: About Template
 */
get_header(); ?>

	<!-- ========== start of about-head section ========== -->
	<section id="about-head">
		<div class="about-head-overlay">
			<div class="about-head-content text-center">
				<div class="container">
					<div class="about-head-text wow fadeInUp animate">
						<h2><?php global $redux_demo; echo $redux_demo['about-us-title']; ?></h2>
						<a class="btn" href="#about-us" role="button"><?php $redux_demo; echo $redux_demo['about-us-btn']; ?><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
					</div><!-- /.end of about-head-text -->
				</div><!-- /.end of container -->
			</div><!-- /.end of about-head-content -->
		</div><!-- /.end of about-head-overlay -->
	</section><!-- /#end of about-head section -->

	<!-- ========== start of about-us section ========== -->
	<section id="about-us" class="section_top-50 section_bottom-50">
		<div class="container">
			<h2 class="section-head wow fadeInUp animate"><?php $redux_demo; echo $redux_demo['counter-title']; ?></h2>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-sm-12">
					<div class="about-us-content wow fadeInUp animate">
						<p><?php $redux_demo; echo $redux_demo['counter-p']; ?></p>
						<div class="counter-area text-center wow fadeInUp animate">
							<div class="row">

							<?php 
								$count = new WP_Query(array(
									'post_type' => 'moregeek_counter',
									'posts_per_page' => 4,
								));
							?>

							<?php while($count->have_posts()) : $count->the_post(); ?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<div class="counter-content">
										<span class="counter"><?php the_content(); ?></span>
										<p><?php the_title(); ?></p>
									</div><!-- /.end of counter-content -->
								</div><!-- /.end of col-md-3 -->

							<?php endwhile; ?>
								
								
							</div><!-- /.end of row -->
						</div><!-- /.end of counter-area -->
					</div>
				</div>
			</div>
		</div><!-- /.end of container -->
	</section><!-- /#end of about section -->

	<!-- ========== start of our-story section ========== -->
	<section id="our-story" class="section_bottom-50">
		<div class="our-story-top">
			<div class="our-story-overlay">
				<div class="our-story-content wow fadeInUp animate">
					<h2><?php $redux_demo; echo $redux_demo['story-title']; ?></h2>
					<p><?php $redux_demo; echo $redux_demo['story-p']; ?></p>
				</div><!-- /.end of our-story-content -->
			</div><!-- /.end of our-story-overlay -->
		</div><!-- /.end of our-story-top -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
					<div class="our-story-bottom text-center wow fadeInUp animate">
						<img src="<?php $redux_demo; echo $redux_demo['story-img']['url']; ?>" alt="" class="img-responsive">
					</div><!-- /.end of our-story-bottom -->
				</div>
			</div><!-- /.end of row -->
		</div>
	</section><!-- /#end of our-story section -->

	<!-- ========== start of summery section ========== -->
	<section id="summery" class="section_top-100 section_bottom-50">
		<div class="container">
			<div class="summery-content">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12">
						<div class="summery-top-left wow fadeInLeft animate hidden-xs">
							<img src="<?php $redux_demo; echo $redux_demo['sm-one']['url']; ?>" alt="">
						</div><!-- /.end of summery-top-left -->
						<div class="summery-top-right wow fadeInRight animate hidden-xs">
							<img src="<?php $redux_demo; echo $redux_demo['sm-two']['url']; ?>" alt="">
						</div><!-- /.end of summery-top-right -->
						<div class="summery-img text-center wow fadeInUp animate">
							<img src="<?php $redux_demo; echo $redux_demo['sm-three']['url']; ?>" alt="">
						</div><!-- /.end of summery-img -->
						<div class="summery-bottom-right wow fadeInRight animate hidden-xs">
							<img src="<?php $redux_demo; echo $redux_demo['sm-four']['url']; ?>" alt="">
						</div><!-- /.end of summery-bottom-right -->
						<div class="summery-bottom-left wow fadeInLeft animate hidden-xs">
							<img src="<?php $redux_demo; echo $redux_demo['sm-five']['url']; ?>" alt="">
						</div><!-- /.end of summery-bottom-left -->

						<div class="summery-text wow fadeInRight animate">
							<h4><?php $redux_demo; echo $redux_demo['summary-title']; ?></h4>
						</div><!-- /.end of summery-text -->
					</div>
				</div><!-- /.end of row -->
			</div><!-- /.end of summery-content -->
		</div><!-- /.end of container -->
	</section><!-- /#end of summery section -->




	<!-- ========== start of co-development section ========== -->
	<section id="co-development">
		<div class="co-development-overlay">
			<div class="co-development-area">
				<div class="container">
					<div class="co-development-head wow fadeInUp animate">
						<h2><?php $redux_demo; echo $redux_demo['ab-slider-title']; ?></h2>
						<p><?php $redux_demo; echo $redux_demo['ab-slider-p']; ?></p>
					</div><!-- /.end of co-development-head -->
					
					<!-- co-development-carousel -->
					<div id="co-development-carousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="row wow fadeInUp animate">
							<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
								<div class="carousel-inner" role="listbox">

								<?php 
									$ab_s = new WP_Query(array(
										'post_type' => 'ab_slide',
									));
								?>
								
								<?php while($ab_s-> have_posts()) : $ab_s-> the_post(); ?>

									<div class="item <?php echo get_post_meta($post->ID, 'slide_active', true); ?>">
										<div class="col-md-4 col-sm-6 col-xs-12 no-padding">
											<img src="<?php the_post_thumbnail(); ?>" alt="">
										</div>

										<div class="col-md-8 col-sm-6 col-xs-12 no-padding">
											<div class="co-development-text">
												<h3><?php the_title(); ?></h3>
												<?php the_content(); ?>

												<a href="<?php echo get_post_meta($post->ID, 'slide_url', true); ?>"><button class="btn" type="submit">Trailer <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
											</div>
										</div>
									</div>

								<?php endwhile; ?>	
								


								</div>
							</div>
						</div><!-- /.end of row -->

						<!-- Controls -->
						<a class="left carousel-control hidden-xs" href="#co-development-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control hidden-xs" href="#co-development-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div><!-- /.end of co-development-carousel -->
				</div><!-- /.end of container -->
			</div><!-- /.end of co-development-area -->
		</div><!-- /.end of co-development-overlay -->
	</section><!-- /#end of co-development section -->



	<!-- ========== start of co-publishing section ========== -->
	<section id="co-publishing" class="section_top-50 section_bottom-50">
		<div class="container">
			<div class="co-development-head wow fadeInUp animate">
				<h2><?php $redux_demo; echo $redux_demo['section-title']; ?></h2>
				<p><?php $redux_demo; echo $redux_demo['section-p']; ?></p>
			</div><!-- /.end of co-development-head -->
				
			<div class="row wow fadeInUp animate">
				<div class="col-md-10 col-md-offset-1 col-sm-12">
					<div class="co-publishing-content">
						<div class="col-md-8 col-sm-6 col-xs-12 no-padding">
							<div class="co-development-text">
								<h3><?php $redux_demo; echo $redux_demo['go-title']; ?></h3>
								<p><?php $redux_demo; echo $redux_demo['go-p']; ?></p>

								<a href="<?php $redux_demo; echo $redux_demo['go-btn-link']; ?>"><button class="btn" type="submit">Trailer <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-xs no-padding">
							<img src="<?php $redux_demo; echo $redux_demo['go-img']['url']; ?>" alt="">
						</div>

						<div class="clearfix"></div>

						<div class="col-md-4 col-sm-6 col-xs-12 no-padding">
							<img src="<?php echo get_template_directory_uri(); ?>/images/co-publishing-img-2.png" alt="">
						</div>
						<div class="col-md-8 col-sm-6 col-xs-12 no-padding">
							<div class="co-development-text">
								<h3><?php $redux_demo; echo $redux_demo['go-title']; ?></h3>
								<p><?php $redux_demo; echo $redux_demo['go-p']; ?></p>
								

								<a href="<?php $redux_demo; echo $redux_demo['g2-btn-link']; ?>"><button class="btn" type="submit">Trailer <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
							</div>
						</div>
					</div><!-- /.end of co-publishing-content -->
				</div>
			</div><!-- /.end of row -->
		</div><!-- /.end of container -->
	</section><!-- /#end of co-publishing section -->



	<!-- ========== start of work-with section ========== -->
	<section id="work-with" class="section_top-50 section_bottom-50">
		<div class="container">
			<h2 class="section-head wow fadeInUp animate"><?php $redux_demo; echo $redux_demo['work-title']; ?></h2>
			<p class="section-head-sub wow fadeInUp animate"><?php $redux_demo; echo $redux_demo['work-p']; ?></p>
			<div class="work-with-area wow fadeInUp animate">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6 divider">
						<div class="work-with-content">
							<p><?php $redux_demo; echo $redux_demo['work-one']; ?></p>
						</div><!-- /.end of work-with-content -->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 divider">
						<div class="work-with-content">
							<p><?php $redux_demo; echo $redux_demo['work-two']; ?></p>
						</div><!-- /.end of work-with-content -->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 divider">
						<div class="work-with-content">
							<p><?php $redux_demo; echo $redux_demo['work-three']; ?></p>
						</div><!-- /.end of work-with-content -->
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="work-with-content">
							<p><?php $redux_demo; echo $redux_demo['work-four']; ?></p>
						</div><!-- /.end of work-with-content -->
					</div>
				</div><!-- /.end of row -->
			</div><!-- /.end of work-with-area -->
		</div><!-- /.end of container -->
	</section><!-- /#end of work-with section -->

	<!-- ========== start of about-contact section ========== -->
	<section id="about-contact">
		<div class="about-contact-overlay">
			<div class="about-contact-area">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-6 hidden-xs wow fadeInLeft animated">
							<div class="about-contact-img">
								<img src="<?php $redux_demo; echo $redux_demo['touch-img']['url']; ?>" alt="">
							</div><!-- /.end of about-contact-img -->
						</div>
						<div class="col-md-7 col-sm-6">
							<div class="about-contact-content wow fadeInUp animated">
								<h2><?php $redux_demo; echo $redux_demo['touch-title']; ?></h2>
								<a href="<?php $redux_demo; echo $redux_demo['touch-link']; ?>"><button class="btn" type="submit">Get in touch <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
							</div><!-- /.end of about-contact-content -->
						</div>
					</div><!-- /.end of row -->
				</div><!-- /.end of container -->
			</div><!-- /.end of about-contact-area -->
		</div><!-- /.end of about-contact-overlay -->
	</section><!-- /#end of about-contact section -->

	<!-- ========== start of footer section ========== -->
	<footer id="footer" class="section_top-50 section_bottom-50">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5 col-sm-6 col-sm-offset-6">
					<div class="footer-content text-center wow fadeInUp animated">
						<div class="footer-social">
							<a href="<?php $redux_demo; echo $redux_demo['fb-link']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/fb_icon.png" alt=""></a>
							<a href="<?php $redux_demo; echo $redux_demo['tw-link']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_icon.png" alt=""></a>
							<a href="<?php $redux_demo; echo $redux_demo['you-link']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/yotube_icon.png" alt=""></a>
							<a href="<?php $redux_demo; echo $redux_demo['feed-link']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog_icon.png" alt=""></a>
						</div><!-- /.end of footer-social -->
						<div class="footer-text">
							<h4>
								<a href="<?php  $redux_demo; echo $redux_demo['privacy-link']; ?>">Privacy policy</a> | <a href="<?php  $redux_demo; echo $redux_demo['term-link']; ?>">Terms and conditions</a>
							</h4>

							<p><i class="fa fa-copyright" aria-hidden="true"></i><?php  $redux_demo; echo $redux_demo['copyright']; ?></p>
						</div><!-- /.end of footer-text -->
					</div><!-- /.end of footer-content -->
				</div>
			</div><!-- /.end of row -->
		</div><!-- /.end of container -->
	</section><!-- /#end of footer section -->

	<!-- ========== start back-top section ========== -->
	<a href="#back-top" class="go-top hidden-xs"><i class="fa fa-caret-up"></i></a>


	
<?php wp_footer(); ?>
</body>
</html>