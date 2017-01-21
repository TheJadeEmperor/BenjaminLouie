<!-- Footer Widget Secton -->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<div class="footer_section navbar-inverse">

	<?php if($current_options['footer_social_media_enabled']==true) { ?>
				<div class="footer-social-area">
					<ul class="footer-social-icons">
					
						<li>
							<a href="https://www.facebook.com/louie.benjamin" target="_BLANK"><i class="fa fa-facebook"></i></a>
						</li>
						
						<li>
							<a href="https://www.linkedin.com/in/benjamin-louie-34125a14" target="_BLANK"><i class="fa fa-linkedin"></i></a>
						</li>
						
						<li>
							<a href="https://youtube.com/user/MilitaryGeneral" target="_BLANK"><i class="fa fa-youtube"></i>
							</a>
						</li>	
					</ul>
					</div>
				
				<?php } ?>
	
	<div class="container footer-links">
		<div class="row footer-widget-section">
		<?php 
			if ( is_active_sidebar( 'footer-widget-area' ) )
			{ dynamic_sidebar( 'footer-widget-area' );	}
		?>
		</div>
        <div class="row">
			<div class="col-md-12">
				<div class="footer-copyright">
					<p>Copyright &copy; 2016 - <?php echo date('Y', time());?>  Benjamin Louie
				</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div> <!-- end of wrapper -->
<?php wp_footer(); ?>
</body>
</html>