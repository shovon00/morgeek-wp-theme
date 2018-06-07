
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