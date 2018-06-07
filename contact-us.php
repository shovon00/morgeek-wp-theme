<?php
/*
Template Name: Contact US Template
 */
get_header(); ?>

	<!-- ========== start of contact-head section ========== -->
	<section id="contact-head" class="contact-us">
		<div class="contact-us-overlay">
			<div class="contact-us-content text-center">
				<div class="container">
					<h2 class="section-head wow fadeInUp animate"><?php global $redux_demo; echo $redux_demo['contact-title']; ?></h2>
				</div><!-- /.end of container -->
			</div><!-- /.end of contact-us-content -->
		</div><!-- /.end of contact-us-overlay -->
	</section><!-- /#end of contact-head section -->

	<!-- ========== start of support section ========== -->
	<section id="support" class="section_top-50 section_bottom-50">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5 wow fadeInUp animate">
					<div class="support-text text-left">
						<h2 class="section-head"><?php $redux_demo; echo $redux_demo['support-title']; ?></h2>
						<p><?php $redux_demo; echo $redux_demo['support-p']; ?></p>
					</div><!-- /.end of support-text -->
				</div>
				<div class="col-md-7 col-sm-7">
					<div class="row">

						<div class="col-md-6 col-sm-6 wow fadeInUp animate">
							<div class="support-img text-center">
								<img src="<?php $redux_demo; echo $redux_demo['support-game-img']['url']; ?>" alt="" class="img-responsive">
								<a href="<?php $redux_demo; echo $redux_demo['support-one-btn-link']; ?>"><button class="btn omega-btn" type="submit"><?php $redux_demo; echo $redux_demo['support-one-btn']; ?></button></a>
							</div>
							<!-- /.end of support-img -->
						</div>

						<div class="col-md-6 col-sm-6 wow fadeInUp animate">
							<div class="support-img text-center">
								<img src="<?php $redux_demo; echo $redux_demo['support-game-two-img']['url']; ?>" alt="" class="img-responsive">
								<a href="<?php $redux_demo; echo $redux_demo['support-two-btn-link']; ?>"><button class="btn orbit-btn" type="submit"><?php $redux_demo; echo $redux_demo['support-two-btn']; ?></button></a>
							</div><!-- /.end of support-img -->
						</div>

					</div><!-- /.end of row -->
				</div>
			</div><!-- /.end of row -->
		</div><!-- /.end of container -->
	</section><!-- /#end of support section -->

	<!-- ========== start of contact-form section ========== -->
	<section id="contact-form" class="contact-us">
		<div class="contact-us-overlay">
			<div class="contact-us-content">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-6 hidden-xs wow fadeInLeft animated">
							<div class="contact-img">
								<img src="<?php $redux_demo; echo $redux_demo['support-footer-img']['url']; ?>" alt="">
							</div><!-- /.end of contact-img -->
						</div>


						<div class="col-md-7 col-sm-6 wow fadeInUp animated">
							<p class="contact-form-text"><?php $redux_demo; echo $redux_demo['form-title']; ?></p>

							<div class="row">
								<?php echo do_shortcode( '[contact-form-7 id="36" title="Contact form 1"]' ); ?>
							</div><!-- /.end of row -->

						</div>
					</div><!-- /.end of row -->
				</div><!-- /.end of container -->
			</div><!-- /.end of contact-us-content -->
		</div><!-- /.end of contact-us-overlay -->
	</section><!-- /#end of contact-form section -->

	<!-- ========== start of footer section ========== -->
	<footer id="footer" class="section_top-50 section_bottom-50">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5 col-sm-6 col-sm-offset-6">
					<div class="footer-content text-center wow fadeInUp animated" style="visibility: visible;">
						<div class="footer-social">
							<a href="<?php global $redux_demo; echo $redux_demo['fb-link']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/fb_icon.png" alt=""></a>
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