<!-- wallstreet Main Slider --->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<!-- /Slider Section -->
<div class="homepage_mycarousel">
	<div class="static-banner">
	<?php if($current_options['home_banner_enabled'] == true) { ?>
										 
	<img class="img-responsive" alt="Benjamin Louie Stand Up Comedy" src="/wp-content/uploads/2016/01/Benjamin-Louie-Laughing-Buddha-720-HD-March-30-2014.mp4_snapshot_00.32_2014.06.04_22.44.18.jpg">

	<div class="flex-slider-center">
	<?php if($current_options['slider_title_one']){ ?>
		<div class="slide-text-bg1"><h2><?php echo esc_html ($current_options['slider_title_one']); ?></h2></div>
		<?php } ?>
		<?php if($current_options['slider_title_two']){ ?>
		<div class="slide-text-bg2"><h1><?php echo esc_html ($current_options['slider_title_two']); ?></h1></div>
		<?php } ?>
		<?php if($current_options['slider_description']) { ?>
		<div class="slide-text-bg3"><p><?php echo esc_html ($current_options['slider_description']); ?></p></div>
		<?php } ?>
	</div>
				
	<?php } ?>
	</div>
</div>
<!-- /wallstreet Main Slider --->