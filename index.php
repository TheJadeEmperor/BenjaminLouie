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
      'img' => $portFolder.'anime_fanservice.jpg',
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
            <li><a href="#port_highlight">Highlights</a></li>
          </ul>
        </li>
        <li><a href="#why_us">Why Us</a></li>
       
        <li><a href="resume.php" class="external">Resume</a></li>

        <li><a href="#contact">Contact</a></li>
       
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
            <h6>Have a Business Idea?</h6> 
            <h2>Get <em>Your Website</em> Up and Running Quickly</h2>

              <div class="main-button">
                  <div class="scroll-to-section"><a href="#why_us">Discover more</a></div>
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
                <h4><i class="fa fa-graduation-cap"></i>Already have a website?</h4>
              </div>
              <div class="content-hide">
                <p>If you need updates, we have solutions for you. Whether it is a one time update or regular updates, we have a package that can fit your needs.</p>

                <p>Did your previous web designer <em>abandon</em> your website? We can take over where they left off.</p>

                <p class="hidden-sm">If you need updates, we have solutions for you. Whether it is a one time update or regular updates, we have a package that can fit your needs.<br /><br />
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
              <li><a href='#tabs-2'>Need Updates?</a></li>
              <li><a href='#tabs-3'>We Provide Web Solutions</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/website1.jpg" alt="website1">
                  </div>
                  <div class="col-md-6">
                    <h4>Have a business idea?</h4>
                    <p>We can turn your business idea into a website that can convert viewers into buyers. If you don't have a web presence, then now is the perfect time to have visibility on the web - every day that you don't have a web presence, you are missing out on lots of traffic, and that means money!</p>
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
                    <p>Did your web designer leave the website incomplete? Did you outsource a project overseas but due to communciation barriers, cannot complete the project and you're left hanging? Then this solution is for you. We can pick up where the other designer left off and complete the project for you.</p>
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
                    <p>We don't just provide websites, we provide what your business needs, such as live streaming integrations and paypment processors. Whether you are a small business owner, radio host, internet marketer, we have the solution for you!</p>
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

  <section class="section video" data-section="port_highlight">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Portfolio Highlights</h2>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="highlight">
            <span>5GRadio1</span>
            <h4><em>Radio Host</em> needed an internet live stream </h4>
            <p>A radio host needed a way for his audience to listen to his programs  that were streaming 24/7. We used RadioKing as the platform and integrated a "Listen Live" button where viewers can click on it and listen to the host's program. </p>
            <p>In addition, the client wanted to host the domain outside of Godaddy. We migrated the domain to another webhost in no time at all. </p>
            
            <a rel="nofollow" href="https://5gradio1.com" target="_BLANK" ><button>Visit Live Site </button></a>
     
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="highlight">

            <a href="images/portfolio/5gradio1.jpg"><img src="images/portfolio/5gradio1_thumb.jpg" target="_BLANK" /></a>
 
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="section video">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-md-6 align-self-center">
          <div class="highlight center">
            
          <a href="images/portfolio/scam_susan.jpg"><img src="images/portfolio/scam_susan_thumb.jpg" target="_BLANK" /></a>
 
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="highlight">

            <span>Political Campaign</span>
            <h4><em>A Politician</em> needed to smear her opponent </h4>
            <p>A politicin running for office needed voters to know the truth about her opponent and sent us the facts and from those tidbits of informaion we turned it into a website.</p>
            <p>We can start your campaign right away that won't break the bank </p>
            
            <a rel="nofollow" href="https://susanzhuanglies.com" target="_BLANK" ><button>Visit Live Site </button></a>
     
          </div>
        </div>
      </div>
    </div>

  </section>


  <section class="section video">
  <div class="container-fluid">
      <div class="row">
       
        <div class="col-md-6 align-self-center">
          <div class="highlight">
            <span>World Wide Video</span>
            <h4>A<em> small business owner</em> needed to sell cameras</h4>
            <p>We set up an online store that displays the owner's video cameras, as well as a payment system linked with Paypal. </p>
         
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="highlight">

            <a href="images/portfolio/wwv.jpg"><img src="images/portfolio/wwv.jpg" target="_BLANK" /></a>
 
          </div>
        </div>
      </div>
    </div>

  </section>

<?php 
include('footer.php');
?>