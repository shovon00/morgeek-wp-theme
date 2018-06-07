<?php get_header(); ?>

	<!-- ========== start of header section ========== -->
	<section id="banner">
		<div class="banner-bg">
			<div class="banner-overlay">
				<div class="banner-content text-center">
					<div class="container">
						<div class="banner-logo wow fadeInUp animated" style="visibility: visible;">
							<img src="<?php global $redux_demo; echo $redux_demo['big-logo']['url']; ?>" alt="banner logo" class="img-responsive">
						</div><!-- /.end of banner-logo -->
						<div class="banner-text wow fadeInUp animated" style="visibility: visible;">
							<h3><?php $redux_demo; echo $redux_demo['hero-text']; ?></h3>
						</div><!-- /.end of banner-text -->
						<a href="<?php $redux_demo; echo $redux_demo['hero-btn-one-link']; ?>"><button class="btn work-btn wow fadeInLeft animated" style="visibility: visible;" type="submit"><?php $redux_demo; echo $redux_demo['hero-btn-one']; ?></button></a>

						<a href="<?php $redux_demo; echo $redux_demo['hero-btn-two-link']; ?>"><button class="btn play-btn wow fadeInRight animated" style="visibility: visible;" type="submit"><?php $redux_demo; echo $redux_demo['hero-btn-two']; ?></button></a>
					</div><!-- /.end of container -->
				</div><!-- /.end of banner-content -->
			</div><!-- /.end of banner-overlay -->
		</div><!-- /.end of banner-bg -->
	</section><!-- /#end of banner section -->

	<!-- ========== start of about section ========== -->
	<section id="about" class="section_top-50 section_bottom-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="about-content text-center wow fadeInLeft animated" style="visibility: visible;">
						<h2 class="section-head"><?php $redux_demo; echo $redux_demo['about-title']; ?></h2>
						<p><?php $redux_demo; echo $redux_demo['about-desc']; ?></p>

						<a href="<?php $redux_demo; echo $redux_demo['about-btn-link']; ?>"><button class="btn" type="submit"><?php $redux_demo; echo $redux_demo['about-btn']; ?></button></a>
					</div><!-- /.end of about-content -->
				</div>
				<div class="col-lg-5 col-md-5 col-sm-6 wow fadeInRight animated" style="visibility: visible;">
					<img src="<?php $redux_demo; echo $redux_demo['about-img']['url']; ?>" alt="" class="img-responsive about-img">
				</div>
			</div><!-- /.end of row -->
		</div><!-- /.end of container -->
	</section><!-- /#end of about section -->

	<!-- ========== start of download section ========== -->
	<section id="download">
		<div class="download-bg">
			<div class="download-content text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-lg-offset-8 col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6 wow fadeInUp animated" style="visibility: visible;">
							<h2 class="section-head"><?php $redux_demo; echo $redux_demo['download-title']; ?></h2>
							<p><?php $redux_demo; echo $redux_demo['download-desc']; ?></p>
							<a href="<?php $redux_demo; echo $redux_demo['download-btn-link']; ?>"><button class="btn play-btn" type="submit"><?php $redux_demo; echo $redux_demo['download-btn']; ?></button></a>
						</div>
					</div><!-- /.end of row -->
				</div><!-- /.end of container -->
			</div><!-- /.end of download-content -->
		</div><!-- /.end of download-bg -->
	</section><!-- /#end of download section -->

	<!-- ========== start of more-game section ========== -->
	<section id="more-game">
		<div class="more-game-bg">
			<div class="more-game-content text-center">
				<div class="container">
					<h2 class="section-head"><?php $redux_demo; echo $redux_demo['slider-title']; ?></h2>
	                <div class="row">
	                    <div class="col-md-12">
	                        <!-- more-game slider -->
	                        <div class="swiper-container one">
	                            <div class="swiper-wrapper">
	                            <?php 
	                            	$slide_item = new WP_Query(array(
	                            		'post_type' => 'moregeek_slide',

	                            	));
	                            ?>
							
								<?php while($slide_item-> have_posts()) : $slide_item-> the_post(); ?>

	                                <div class="swiper-slide">
	                                	<?php the_post_thumbnail(); ?>
	                                </div>

								<?php endwhile; ?>
	                              
	                            </div>
	                        </div><!-- /.end of swiper-container -->
	                    </div>
	                </div><!-- /.end of row -->
				</div><!-- /.end of container -->
			</div><!-- /.end of more-game-content -->
		</div><!-- /.end of more-game-bg -->
	</section><!-- /#end of more-game section -->

	<!-- ========== start of news section ========== -->
	<section id="news" class="section_top-50 section_bottom-50">
		<div class="container">
			<h2 class="section-head"><?php $redux_demo; echo $redux_demo['news-title']; ?></h2>
			<div class="row">

			<?php 
				$post_fom = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 6,
				));
			?>
			
			<?php while($post_fom-> have_posts()) : $post_fom-> the_post(); ?>

				<div class="col-md-4 col-sm-4">
					<div class="news-content wow fadeInUp animated" style="visibility: visible;">
						<a href="<?php the_permalink(); ?>">

							<?php the_post_thumbnail('img-responsive'); ?>


							
							<span class="news-tag">

							<?php 
								$categories = get_the_category();

								if ( ! empty( $categories ) ) {
									    echo esc_html( $categories[0]->name );   
									}
							?>
								
							</span>
							<div class="news-caption">
								<span><?php the_time('F jS, Y '); ?></span>
								<p><?php the_title(); ?></p>
							</div><!-- /.end of news-caption -->
						</a>
					</div><!-- /.end of news-content -->
				</div>
			<?php endwhile; ?>

			</div>
			<div class="text-center">
				<a href="<?php $redux_demo; echo $redux_demo['news-btn-link']; ?>"><button class="btn" type="submit"><?php $redux_demo; echo $redux_demo['news-btn']; ?></button></a>
			</div>
		</div><!-- /.end of container -->
	</section><!-- /#end of news section -->

		<!-- ========== start of contact section ========== -->
	<section id="contact" class="section_top-50 section_bottom-50">
		<div class="container">
			<h2 class="section-head"><?php $redux_demo; echo $redux_demo['contact-title']; ?></h2>
			<div class="row">
				<div class="col-md-5 col-sm-6 hidden-xs wow fadeInLeft animated" style="visibility: visible;">
					<div class="contact-img">
						<img src="<?php $redux_demo; echo $redux_demo['contact-img']['url']; ?>" alt="">
					</div><!-- /.end of contact-img -->
				</div>
				<div class="col-md-7 col-sm-6">
					<div class="contact-content wow fadeInUp animated" style="visibility: visible;">

						<h3><?php $redux_demo; echo $redux_demo['contact-sm-title']; ?></h3>
						<p><span>Company Address:</span> <?php $redux_demo; echo $redux_demo['address']; ?></p>
						<p><span>Tel :</span><?php $redux_demo; echo $redux_demo['telephone']; ?></p>
						<p><span>Fax :</span><?php $redux_demo; echo $redux_demo['fax']; ?></p>
						<p><span>Email :</span><?php $redux_demo; echo $redux_demo['mail']; ?></p>
						<p><span>BD :</span><?php $redux_demo; echo $redux_demo['company-mail']; ?></p>
					</div><!-- /.end of contact-content -->
				</div>
			</div><!-- /.end of row -->
		</div><!-- /.end of container -->
	</section><!-- /#end of contact section -->

<?php get_footer(); ?>