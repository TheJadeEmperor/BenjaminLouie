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
                <h4><i class="fa fa-graduation-cap"></i>Senior Project</h4>
              </div>
              <div class="content-hide">
                <p>Designed a lego vehcile to run through a maze and disarm a bomb, programmed in Robolab. Click below to view wireframes in AutoCAD.</p>
                <p class="hidden-sm">Designed a lego vehcile to run through a maze and disarm a bomb, programmed in Robolab. Click below to view wireframes in AutoCAD.</p>
                <div><a href="assets/images/robolab/robolab_1.jpg" target="_BLANK">View Specs 1</a> &nbsp; <a href="assets/images/robolab/robolab_2.jpg" target="_BLANK">View Specs 2</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Full Stack Teacher</h4>
              </div>
              <div class="content-hide">
                <p>Watch me teach college students how to do full stack coding</p>
                <p class="hidden-sm">Watch me teach college students how to do full stack coding</p>

                <div class="scroll-to-section"><a href="#top_classes">Featured Classes</a><a href="#all_classes">All Classes</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-folder"></i>Resume</h4>
              </div>
              <div class="content-hide">
                <p><a href="assets/images/resume/Louie.Benjamin.Wordpress.pdf" target="_BLANK"><img src="assets/images/resume/thumbnail.png"><br><br>Download or View PDF</a></p>

                <p class="hidden-sm"><a href="assets/images/resume/Louie.Benjamin.Wordpress.pdf"><img src="assets/images/resume/thumbnail.png"  target="_BLANK"><br><br>Download or View PDF</a></p> 
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
  'Tammi Landing Page' => array(
    'thumb' => 'assets/images/tammi_landing_page/thumb.jpg',
    'p' => '<div class="scroll-to-section"><a href="#tammi_landing_page">Read More</a></div>'
  ),
  'Alcohol Screening' => array(
    'thumb' => 'assets/images/alcoholscreening_desktop/thumb.jpg',
    'p' => '<p>Built using Wordpress, Advanced Custom Fields, PHP & MySQL. Desktop & mobile screenshots included.</p>
    <div class="scroll-to-section"><a href="#alcohol_screening">Read More</a></div>'
  ),
  'Online Course for Anti-drug Use' => array(
    'thumb' => 'assets/images/portfolio/online_course.jpg',
    'p' => '<p>Landing page made for anti-drug online course, compatible with Wordpress</p>
    <a href="https://github.com/TheJadeEmperor/LandingPageOnlineCourse" target="_BLANK">View Github</a>'
  ),
  'Help & Hope' => array(
    'thumb' => 'assets/images/sms_hxh/thumb_hxh.jpg',
    'p' => 'H & H'
  ),
  'Heroin Hub' => array(
    'thumb' => 'assets/images/sms_hxh/thumb_heroin.jpg',
    'p' => 'Heroin Hub'
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
            <p>Project TAMMI is a research study that tests whether different types of text messages and assessments are helpful to people who want to cut down on their drinking. This project is being conducted through the Partnership for Drug-Free Kids and the Feinstein Institute for Medical Research at Northwell Health, and is sponsored by the NIAAA.</p>

            <p>This landing page is completely responsive and mobile friendly, using CSS and Javascript.</p>
            
            <div class="main-button"><a rel="nofollow" href="https://drugfree.org/tammi" target="_BLANK">View Live Site</a> 

            <a rel="nofollow" href="https://github.com/TheJadeEmperor/drugfree_tammi" target="_BLANK">View Github</a></div>
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
            <p>&nbsp;</p>

            <h4>View Specs</h4>

            <a href="assets/images/mg_calendar/modernguild_calendar.pdf" target="_BLANK">View modernguild_calendar.pdf</a>

            <h4>View Wireframes</h4>

            <a href="assets/images/mg_calendar/scheduling_wireframe.pdf" target="_BLANK">View scheduling_wireframe.pdf</a>

            </article>
        </div>
        </div>
        
          <div class="col-md-6">
            <div class="left-content">
            <h4>jQuery Calendar</h4>
            <p>Scheduling features<br>
• Student schedules all 5 meetings in the same screen, for IE meetings it’s 3 meetings at
once<br>
• For meeting 1 you click on the calendar, open the pop up and select a time from the
timepicker, and the selected date/time appears on the left module<br>
• Then meeting 2 is highlighted, which is the active meeting. You do the same with
meeting 1. Then meeting 3 is highlighted.<br>
• When you’re done you can add a comment to your coach and click the submit button
and save the meetings to the database 
</p>
              
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
              <p>User Dashboard Features<br>
• Top left corner - user can edit their own profile - jQuery pop up
• Edit their schedule - data is linked with their calendar<br>
• View their inbox and check for messages and send messages to other users<br>
• Reminder “ribbons” with different colors<br>
• Upcoming meetings tab - jQuery dataTable </p>
              
              <div class="main-button"><a rel="nofollow" href="https://github.com/TheJadeEmperor/MG_User" target="_BLANK">View Github</a></div>
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
              <p>&nbsp;</p>
              <h4>View Specs</h4>
              <a href="assets/images/mg_user/modernguild_user.pdf"  target="_BLANK">modernguild_user.pdf</a>
              </article>
            </div>
        </div>
      </div>
    </section>

</section>


<?php 
include('footer.html');
?>