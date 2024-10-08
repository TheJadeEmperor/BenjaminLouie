<?php

// $adminEmail = 'kaiba.corporation.llc@gmail.com';
$adminEmail = '4158897015@tmomail.net';

if($_POST['message']) {
	$error = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['email']) ? '' : 'INVALID EMAIL ADDRESS';
	
  $message = $_POST['message'];
  $name = $_POST['name']; 
  $phone = $_POST['phone'];
  $email = $_POST['email'];
	

	if(!$error) {
    $headers = "From: ".$adminEmail."\n"; 

		$emailSubject = "BL Web Solutions: Your Message Was Received";
		$emailContent = "You have sent a message to BL Web Solutions. The contents
of the message are the following: 
		
Full Name: ".$name."
Email: ".$email."
Phone: ". $phone."
Message: ".$message."";
		 
		if(@mail($email.','.$adminEmail, $emailSubject, $emailContent, $headers)) { 
			$error = 'Message sent! You will receive a confirmation email shortly.'; 
		} 
		else {
			$error = 'Error: message not sent! Please inform the administrator';
		}

	}
}

?>
  
  <section class="section contact" data-section="contact" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 id="contact">Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
        
        <form id="contact" action="./#contact" method="post">
            
            <div class="row">
              <div class="col-md-12">
                  
                <p><?=$error ?></p>
                   
              </div>
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone #" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us your business idea or the website you want to update..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" class="button" title="<?=$adminEmail?>">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.0259022289138!2d-73.9896948852854!3d40.6954271793337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a4a6c47643b%3A0x284552dca0b97d69!2sNew%20York%20City%20College%20of%20Technology!5e0!3m2!1sen!2sus!4v1656563562452!5m2!1sen!2sus" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
 

<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright  <?php echo date('Y', time()); ?>
          by <a href="mailto:<?=$adminEmail?>" target="_parent">BL Web Solutions</a>
          <br /><a href="sms:3473894994" target="_parent">(347) 389-4994</a></p>
        </div>
      </div>
    </div>
  </footer>
 
 <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/hoverbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>

<script>
      //according to loftblog tut
      $('.nav li:first').addClass('active');

      var showSection = function showSection(section, isAnimate) {
        var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $('body, html').animate({
            scrollTop: reqSectionPos },
          800);
        } else {
          $('body, html').scrollTop(reqSectionPos);
        }

      };

      var checkSection = function checkSection() {
        $('.section').each(function () {
          var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
       
          //console.log( $this.data('section')); 
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
            reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
          }
        });
       };


      $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
        if($(e.target).hasClass('external')) {
          return;
        }
        //e.preventDefault();
        $('#menu').removeClass('active');
        showSection($(this).attr('href'), true);
      });

      $(window).scroll(function () {
        checkSection();
      });
  </script>
</body>
</html>