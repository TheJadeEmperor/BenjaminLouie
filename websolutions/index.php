<?php
include('menu.php');

$portFolder = 'assets/images/portfolio/';


$carousel_personal = array(
  'CodeGeass Website' => array(
    'p' => 'A personal website I made for my favorite anime',
    'img' => $portFolder.'codegeass.us.jpg',
    'github' => 'https://github.com/TheJadeEmperor/CodeGeass.us'
  ),
  'CodeGeass Website v2' => array(
    'p' => 'A personal website I made for my favorite anime',
    'img' => $portFolder.'codegeass1.jpg'
  ),
  'CodeGeass Forum 1' => array(
    'p' => 'A PHP forum run using SimpleMachines',
    'img' => $portFolder.'codegeass.forum1.jpg'
  ),
  'CodeGeass Forum 2' => array(
    'p' => 'Version 2 of the Forum',
    'img' => $portFolder.'codegeass.forum2.jpg'
  ),
);

$carousel_pro = array(
  'Partnership for DrugFree Kids' => array(
    'p' => 'A national non-profit org, website run on Wordpress and Rackspace',
    'img' => $portFolder.'drugfree.org.jpg'
  ),
  'Center to End Addiction' => array(
    'p' => 'A national non-profit org, website run on Wordpress and AWS',
    'img' => $portFolder.'COA.jpg'
  ),
  'Style Edit' => array(
    'p' => 'A magazine owned by Mana Products. Photoshop files were given as specs and everything was coded based on specs',
    'img' => $portFolder.'styleedit.jpg'
  ),
  'TGI Office Automation' => array(
    'p' => 'A national printing company that supplies printers, copiers, etc. to their clients',
    'img' => $portFolder.'tgioa.com.jpg'
  ),
);

$carousel_client = array(
    'Best Paying Sites' => array(
      'p' => 'A client wanted to make a sales page to sell ebooks. Integrated with Paypal IPN (Instant Payment Notification) API',
      'img' => $portFolder.'bestpayingsites.jpg',
      'github' => 'https://github.com/TheJadeEmperor/BestPayingSites'
    ),
    'Neobux Ultimate Strategy' => array(
      'p' => 'A sales page and membership site run in PHP and MySQL',
      'img' => $portFolder.'nus.jpg',
      'github' => 'https://github.com/TheJadeEmperor/NeobuxUltimateStrategy'
    ),
    'PXOrigins' => array(
      'p' => 'A client wanted a video game blog without using a cms. I developed a blog cms using only PHP and MySQL and HTML templates',
      'img' => $portFolder.'pxo.jpg',
      'github' => 'https://github.com/TheJadeEmperor/PXOrigin'
    ),
    'World Wide Video' => array(
      'p' => 'Made for a client who sells security cameras',
      'img' => $portFolder.'wwv.jpg'
    ),
    'Anime Favorite' => array(
      'p' => 'An anime site made for a client',
      'img' => $portFolder.'animefavorite.jpg'
    ),
    'Anime Fanservice' => array(
      'p' => 'An anime site made for fun. Warning: NSFW',
      'img' => $portFolder.'animefanservice.jpg',
      'github' => 'https://github.com/TheJadeEmperor/AnimeFanservice.org'
    ),
    'Pengea' => array(
      'p' => 'A client wanted a minimalist site to spread awareness about climate change',
      'img' => $portFolder.'pengea_1.png',
    )
  );


?>
 <!--header-->
 <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>BL</em> Web Solutions</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#port_pro">Portfolio</a>
          <ul class="sub-menu">
            <li><a href="#port_personal">Personal</a></li>
            <li><a href="#port_pro">Professional</a></li>
            <li><a href="#port_client">Client</a></li>
          </ul>
        </li>
        <li><a href="#why_us">Why Us</a></li>
       
        <li><a href="resume.php" class="external">Resume</a></li>

      <!--  <li><a href="#section6">Contact</a></li>-->
       
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/group.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Benjamin Louie</h6>
              <h2><em>Portfolio</em> of BL Web Solutions</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Wordpress</h4>
              </div>
              <div class="content-hide">
                <p>Do you need a Wordpress website done? We have done many Wordpress sites with our previous clients. Services include installation and setup of Wordpress site, as well as theme updates or any plug-in updates you need.</p>
                <p class="hidden-sm">Do you need a Wordpress website done? We have done many Wordpress sites with our previous clients. Services include installation and setup of Wordpress site, as well as theme updates or any plug-in updates you need.</p>
                <div class="scroll-to-section"><a href="#why_us">More Info</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Maintenance</h4>
              </div>
              <div class="content-hide">
                <p>If you already have a website and need updates, we have solutions for you as well. Whether it is a one time update or regular updates, we have a package that can fit your needs.</p>

                <p>Did your previous web designer abandon your website? We can take over where they left off.</p>

                <p class="hidden-sm">If you already have a website and need updates, we have solutions for you as well. Whether it is a one time update or regular updates, we have a package that can fit your needs.<br /><br />
                Did your previous web designer abandon your website? We can take over where they left off.</p>

                <div class="scroll-to-section"><a href="#why_us">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Learn to Code</h4>
              </div>
              <div class="content-hide">
                <p>Want to learn how to code html, css and other popular languages? We have taught full stack programming at universities before and now are offering private classes.</p>
                <p class="hidden-sm">Want to learn how to code html, css and other popular languages? We have taught full stack programming at universities before and now are offering private classes.</p>
                <div><a href="resume.php#top_classes" class="external">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="why_us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Need a Website?</a></li>
              <li><a href='#tabs-2'>Need Website Updates?</a></li>
              <li><a href='#tabs-3'>We Provide Web Solutions</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/website1.jpg" alt="website1">
                  </div>
                  <div class="col-md-6">
                    <h4>Need a website?</h4>
                    <p>If you don't have a website, then now is the perfect time to get one so you can have visibility on the web - every day that you don't have a web presence, you are missing out on lots of traffic, and that means money!</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/website2.jpg" alt="website2">
                  </div>
                  <div class="col-md-6">
                    <h4>Need Website Updates?</h4>
                    <p>Did you hire a web designer but he or she did not complete the project for whatever reason? Did you outsource a project overseas but due to communciation barriers, cannot complete the project and you're left hanging? Then this solution is for you. We will pick up where the other designer left off and complete the project for you.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/website3.jpg" alt="website3">
                  </div>
                  <div class="col-md-6">
                    <h4>We Provide Web Solutions</h4>
                    <p>We don't just provide websites, we provide web solutions at affordable rates. That means you can complete your project on time and still keep your budget!</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="port_personal">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Personal Portfolio</h2>
          </div>
        </div>

        <div class="owl-carousel owl-theme">

        <?php
        foreach($carousel_personal as $h4 => $val) {
          echo '<div class="item">
            <a href="'.$val['img'].'" class="external" target="_BLANK"><img src="'.$val['img'].'" alt="'.$h4.'"></a>
            <div class="down-content">
            <h4>'.$h4.'</h4>
            <p>'.$val['p'].'</p>';

            echo '
          </div>
          </div>';
        }
        ?>
         
        </div>
      </div>
    </div>
  </section>
  

  <section class="section courses" data-section="port_pro">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Professional Portfolio</h2>
          </div>
        </div>

        <div class="owl-carousel owl-theme">

        <?php
        foreach($carousel_pro as $h4 => $val) {
          echo '<div class="item">
            <a href="'.$val['img'].'" class="external" target="_BLANK"><img src="'.$val['img'].'" alt="'.$h4.'"></a>
            <div class="down-content">
            <h4>'.$h4.'</h4>
            <p>'.$val['p'].'</p>';

            echo '
          </div>
          </div>';
        }
        ?>
         
        </div>
      </div>
    </div>
  </section>
  
  <section class="section courses" data-section="port_client">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Client Portfolio</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">

        <?php
        foreach($carousel_client as $h4 => $val) {
          echo '<div class="item">
            <a href="'.$val['img'].'" class="external" target="_BLANK"><img src="'.$val['img'].'" alt="'.$h4.'"></a>
            <div class="down-content">
            <h4>'.$h4.'</h4>
            <p>'.$val['p'].'</p>';
            
            if($val['github']) {
              echo '<p><a href="'.$val['github'].'" class="external" target="_BLANK">Github</a></p>';
            }

            echo '
          </div>
          </div>';
        }
        ?>
   
        </div>
      </div>
    </div>
  </section>

<?php 
include('footer.html');
?>