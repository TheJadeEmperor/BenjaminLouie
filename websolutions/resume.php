<?php
include('menu.php');
?>

<header class="main-header clearfix" role="header">
  <div class="logo">
    <a href="#"><em>Resume</em></a>
  </div>
  <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
  <nav id="menu" class="main-nav" role="navigation">
    <ul class="main-menu">
      <li><a href="./#section1">Home</a></li>

      <li><a href="#stack">Tech Stack</a></li>

      <li class="has-submenu"><a href="#projects">Projects</a>
        <ul class="sub-menu">
          <li><a href="#alcohol_screening">Alcohol Screening</a></li>
          <li><a href="#tammi_landing_page">Tammi Landing Page</a></li>
          <li><a href="#mg_calendar">jQuery Calendar</a></li>
          <li><a href="#mg_user">jQuery User</a></li>
        </ul>
      </li>
    
      <li class="has-submenu"><a href="resume.php#top_classes">Teaching</a>
        <ul class="sub-menu">
          <li><a href="#top_classes">Featured</a></li>
          <li><a href="#all_classes">All Classes</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/computer.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Projects & Courses</h6>
              <h2><em>Resume </em> of Benjamin Louie</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Career Highlights</a></div>
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
                <h4><i class="fa fa-pencil"></i>Clients</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Full Stack Teacher</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Projects</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section why-us" data-section="stack">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Resume</h2>
          </div>
        </div>
        <div class="col-md-12">
          <section>
          <center>
          <p><a href="assets/images/resume/Louie.Benjamin.Wordpress.pdf"><img src="assets/images/resume/thumbnail.png"><br><br>Download or View PDF</a></p>
        
          </center>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section class="section video" data-section="top_classes">
    <div class="col-md-12">
          <div class="section-heading">
            <h2>Featured Lessons</h2>
          </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>Teaching CSS</span>
            <h4><em>CSS Blocks</em> - Display block, inline, and inline-block  </h4>
            <p>In this lesson, I go over the differences between block, inline, and inline-block, as well as apply them in practice. Also, I analyze sample websites submitted by my students and explain their code, as well as duplicate the website using the code I taught in class.</p>
            <p>What makes me different than other teachers is that I teach not only theory, but practice using real world examples. </p>
            <div class="main-button"><a rel="nofollow" href="https://www.youtube.com/watch?v=gboHYbaJs1A" target="_parent">Watch on Youtube</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>CSS Blocks & CSS Exercises</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=gboHYbaJs1A" class="play"><img src="assets/video/thumb_0623.jpg"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
     
  <section class="section video">
    <div class="container">
      <div class="row">
      <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Intro to Bash</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=w33oS9eSi8A" class="play"><img src="assets/video/thumb_0616.jpg"></a>
            </figure>
          </article>
      </div>
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>Introduction to <em>Full Stack</em> Development</span>
            <h4>Bash Programming & How the Internet Works</h4>
            <p>In this lesson, I introduce my students to the concept of the internet and how websites work, and then I teach them how to work their way around linux using bash.</p>
            <p>Unlike other professors, I have worked in several companies before becoming a teacher, so I teach from experience. If you want to learn how to code, <a href="./#section6">contact us here</a>.</p>
            <div class="main-button"><a rel="nofollow" href="https://www.youtube.com/watch?v=w33oS9eSi8A" target="_parent">Watch on Youtube</a></div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  
  <section class="section why-us" data-section="all_classes">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Coding Lessons</h2>
          </div>
        </div>

        <div class="col-md-12 coding_thumbnails">
<?php


  $coding_video = array(
    '0616' => array(
      'url' => 'https://www.youtube.com/watch?v=XvOj2Z4ispc',
      'thumb' => 'thumb_0616.jpg', 
      'p' => 'HTML Basics & HTML Forms'
    ),
    '0621' => array(
      'url' => 'https://www.youtube.com/watch?v=3QN4p-SGiqA',
      'thumb' => 'thumb_0621.jpg',
      'p' => 'HTML & Basic CSS'
    ),
    '0623' => array(
      'url' => 'https://www.youtube.com/watch?v=340XObAYAGo',
      'thumb' => 'thumb_0623.jpg',
      'p' => 'Basic CSS & Mockups'
    ),
    '0628' => array(
      'url' => 'https://www.youtube.com/watch?v=_V2Fi65WXkA',
      'thumb' => 'thumb_0628.jpg',
      'p' => 'CSS Exercises & CSS Box Model & Trello'
    ),
    '0630' => array(
      'url' => 'https://www.youtube.com/watch?v=gboHYbaJs1A',
      'thumb' => 'thumb_0630.jpg',
      'p' => 'CSS Exercises & CSS Display-Block Model'
    ),
  );


  foreach($coding_video as $code) {
    echo '
    <div class="coding_video">
      <figure>
        <a href="'.$code['url'].'" class="play"><img src="assets/video/'.$code['thumb'].'"></a>
      </figure>
      <p>'.$code['p'].'</p>
    </div>';
  }
 
?>   
  
        </div>
      </div>
    </div>
  </section>

<!--
  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose Grad School?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Education</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'>Quality Meeting</a></li>
             
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Education</h4>
                    <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS layout. Feel free to use it for educational or commercial purposes. You may want to make <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a little donation</a> to TemplateMo. Please tell your friends about us. Thank you.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Level</h4>
                    <p>You can modify this HTML layout by editing contents and adding more pages as you needed. Since this template has options to add dropdown menus, you can put many HTML pages.</p> 
                    <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Meeting</h4>
                    <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. For more information, you shall <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> now.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
-->

 
  <section class="section courses" data-section="projects">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Professional Projects</h2>
          </div>
        </div>
        <div class="col-md-12">
  
          <div class="projects_list">
        <?php 
$projects_list = array(
  'jQuery Calendar' => array(
    'thumb' => 'assets/images/mg_calendar/calendar.jpg',
    'p' => '<div class="scroll-to-section"><a href="#mg_calendar">Read More</a></div>'
  ),
  'jQuery User' => array(
    'thumb' => 'assets/images/mg_user/user_login.jpg',
    'p' => '<div class="scroll-to-section"><a href="#mg_user">Read More</a></div>'
  ),
  'Tammi' => array(
    'thumb' => 'assets/images/tammi_landing_page/thumb.jpg',
    'p' => 'Tammi'
  ),
  'Alcohol Screening' => array(
    'thumb' => 'assets/images/alcoholscreening_desktop/thumb.jpg',
    'p' => '<div class="scroll-to-section"><a href="#alcohol_screening">Read More</a></div>'
  ),
  'Help & Hope' => array(
    'thumb' => 'assets/images/sms_hxh/thumb_hxh.jpg',
    'p' => 'Tammi'
  ),
  'Heroin Hub' => array(
    'thumb' => 'assets/images/sms_hxh/thumb_heroin.jpg',
    'p' => 'Tammi'
  ),
);

foreach ($projects_list as $name => $proj) {
  echo '
  <div class="project_item">
  <a href="'.$proj['thumb'].'" target="_BLANK"><img src="'.$proj['thumb'].'" alt="'.$name.'"></a>
  <div class="down-content">
    <h4>'.$name.'</h4>
    <p>'.$proj['p'].'</p>
  </div>
</div>';
}


        ?>
        
             </div>         
        </div>
      </div>
    </div>
  </section>


  <section class="section video" data-section="alcohol_screening">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="left-content">
           
            <h4>Alcohol Screening</h4>
            <p>If you're wondering if you're drinking too much or just curious, you can take this screening to see your risk level compared to your peers. Take the short assessment to receive a score of low, moderate or high risk, as well as recommendations to begin quitting. </p>
            <p>Built using Wordpress, <em>Advanced Custom Fields</em>, PHP & MySQL. Desktop & mobile screenshots included.</p>
            <div class="main-button"><a rel="nofollow" href="https://alcoholscreening.org" target="_BLANK">View Live Site</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <article class="video-item">
            
            <?php 
            $atts = array(
              'project_folder' => 'alcoholscreening_desktop',
              'project_name' => 'Alcohol Screening Desktop'
            );
              
            echo gallery_function($atts);
            ?>
            </article>
          </div>
      </div>
    </div>
      </div>
    </div>
  </section>

   
  <section class="section video" data-section="">
  
     <!-- alcohol_screening mobile -->
    <div class="container">
      <div class="row"> 
      <div class="col-md-6">
        <div class="left-content">
            <article class="video-item">
              
            <?php 
            $atts = array(
              'project_folder' => 'alcoholscreening_mobile',
              'project_name' => 'Alcohol Screening Mobile'
            );
              
            echo gallery_function($atts);
            ?>
            </article>
        </div>
        </div>
        
          <div class="col-md-6">
            <div class="left-content">
            <h4>AS Mobile Screenshots</h4>
              <p>Every screen must send user data to the company's internal API via jQeury ajax calls. Data from the html form is turned into json data, which gets sent to the API when user clicks next page. The website retrieves a session token from the API to identify the user. </p>

              <p>Most of the texts and images were created in Advanced Custom Fields, so an admin can go in and change the content easily. </p>

              <p>Built using Wordpress, <em>Advanced Custom Fields</em>, PHP & MySQL. Desktop & mobile screenshots included.</p>
              <div class="main-button"><a rel="nofollow" href="https://github.com/TheJadeEmperor/AS.org" target="_BLANK">View Github</a></div>
            </div>
          
          </div>
      
      </div>
    </div>

    <p>&nbsp;</p><p>&nbsp;</p>

    <!-- tammi_landing_page -->
  <section class="section video" data-section="tammi_landing_page">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
           
            <h4>Tammi Landing Page</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
            
            <div class="main-button"><a rel="nofollow" href="https://drugfree.org/tammi" target="_BLANK">View Live Site</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <article class="video-item">
            
            <?php 
            $atts = array(
              'project_folder' => 'tammi_landing_page',
              'project_name' => 'Tammi Landing Page'
            );
              
            echo gallery_function($atts);
            ?>
            </article>
          </div>
      </div>
    </div>
  </section>

  <!-- mg_calendar -->
  <section class="section video" data-section="mg_calendar">
    <div class="container">
      <div class="row">
      <div class="col-md-6">
        <div class="left-content">
            <article class="video-item">

            <?php 
            $atts = array(
              'project_folder' => 'mg_calendar',
              'project_name' => 'jQuery Calendar'
            );
              
            echo gallery_function($atts);
            ?>
            </article>
        </div>
        </div>
        
          <div class="col-md-6">
            <div class="left-content">
            <h4>jQuery Calendar</h4>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
              
              <div class="main-button"><a rel="nofollow" href="https://github.com/TheJadeEmperor/MG_Calendar" target="_BLANK">View Github</a></div>
            </div>
          
          </div>
      
      </div>
    </div>
    </section>
     
  <!-- mg_user -->
  <section class="section video" data-section="mg_user">
    <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <div class="left-content">
            
              <h4>jQuery User Management</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
              
              <div class="main-button"><a rel="nofollow" href="https://alcoholscreening.org" target="_BLANK">View Live Site</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <article class="video-item">
              
              <?php 
              $atts = array(
                'project_folder' => 'mg_user',
                'project_name' => 'jQuery User'
              );
                
              echo gallery_function($atts);
              ?>
              </article>
            </div>
        </div>
      </div>
    </section>

      
</section>


<?php 
include('footer.html');
?>