			<?php do_action( 'vantage_main_bottom' ); ?>
		</div><!-- .full-container -->
	</div><!-- #main .site-main -->

	<?php do_action( 'vantage_after_main_container' ); ?>

	<?php do_action( 'vantage_before_footer' ); ?>

	<?php get_template_part( 'parts/footer', apply_filters( 'vantage_footer_type', '' ) ); ?>
<div id="right" style="float:left; margin-left: 10%; margin-top:10px;"><h3>Watkins Metal Fabrication © 2016</h3></div>
<div id="left" style="float:right; margin-right: 10%;">
<a href="http://creative.rainman.com"><img src="http://creative.rainman.com/wp-content/uploads/2015/01/logo8.png" alt="Rainman Creative Logo"></a>
</div>
	<?php do_action( 'vantage_after_footer' ); ?>

</div><!-- #page-wrapper -->

<?php do_action('vantage_after_page_wrapper') ?>

<?php wp_footer(); ?>

</body>
</html>