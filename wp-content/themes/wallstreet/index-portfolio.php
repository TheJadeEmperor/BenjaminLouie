<!-- index-portfolio.php -->
<?php $wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
 if($current_options['portfolio_section_enabled'] == true) { ?>
<div class="portfolio-section navbar-inverse">
	<div class="container">

		<div class="row">
			<div class="section_heading_title">
				<br />
				
				<h1>Featured Categories</h1>
				<div class="pagetitle-separator">
					<div class="pagetitle-separator-border">
						<div class="pagetitle-separator-box"></div>
					</div>
				</div>
			          
			</div>
		</div>
		
		<div class="row">
		 
			<a href="/category/funny-pics/">
			<div class="col-md-3 col-md-6 home-portfolio-area">
				<div class="home-portfolio-showcase">
					<div class="home-portfolio-showcase-media">
					
						<img class="img-responsive home-portfolio-img" alt="Benjamin Louie Funny Pics" src="/wp-content/uploads/2016/09/FunnyPic-1-e1483417461449.jpg" width="263" height="241">
					
						<div class="home-portfolio-showcase-overlay">
							<div class="home-portfolio-showcase-overlay-inner">
								<div class="home-portfolio-showcase-detail">
									
									<h4>Funny Pics</h4>
									 
									<p>Check out our gallery of funny pics - guaranteed to make your jaw drop!</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</a>
			 
			<a href="/category/videos/">
			<div class="col-md-3 col-md-6 home-portfolio-area">
				<div class="home-portfolio-showcase">
					<div class="home-portfolio-showcase-media">
					
						<img class="img-responsive home-portfolio-img" alt="Benjamin Louie videos" src="/wp-content/uploads/2017/01/youtube.jpg">
					
						<div class="home-portfolio-showcase-overlay">
							<div class="home-portfolio-showcase-overlay-inner">
								<div class="home-portfolio-showcase-detail">
									<h4>Youtube Videos</h4>

									<p>Check out my Youtube videos of stand up comedy</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</a>
 			<a href="/category/one-liners/">
			<div class="col-md-3 col-md-6 home-portfolio-area">
				<div class="home-portfolio-showcase">
					<div class="home-portfolio-showcase-media">
					
						<img class="img-responsive home-portfolio-img" alt="Benjamin Louie one liners" src="/wp-content/uploads/2017/01/NQSC0.gif">
				
						<div class="home-portfolio-showcase-overlay">
							<div class="home-portfolio-showcase-overlay-inner">
								<div class="home-portfolio-showcase-detail">
									
									<h4>One Liner Jokes</h4>
									<p>Chuck Norris facts, Confucius says, Yo mama jokes, etc.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</a>
		 
			<a href="/category/reading-jokes/">
			<div class="col-md-3 col-md-6 home-portfolio-area">
				<div class="home-portfolio-showcase">
					<div class="home-portfolio-showcase-media">
					
						<img class="img-responsive home-portfolio-img" alt="Benjamin Louie jokes" src="/wp-content/uploads/2017/01/trump-lead2-e1483417382754.jpg">
				
						<div class="home-portfolio-showcase-overlay">
							<div class="home-portfolio-showcase-overlay-inner">
								<div class="home-portfolio-showcase-detail">
									<h4>Reading Jokes</h4>

									<p>Check out our selection of reading jokes - try this on your friends to impress them</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</a>
	 
		</div>
	</div>	
</div>
<?php } ?>
<!-- /Wallstreet Portfolio Section ---->