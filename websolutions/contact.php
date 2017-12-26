<?php

if($_POST) {
    $error = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['email']) ? '' : 'INVALID EMAIL ADDRESS';
	 
    $values = array ('name','email','message');
    $required = array('name','email','message');

    foreach($values as $key => $value) {
        if(in_array($value, $required)) {
            if( empty($_POST[$value]) )  { 
                $error .= '<br />Please fill in the required field: '.$value; 
            }
        }
    }
    
    if($_POST['spam'] != 10) {
        $error .= '<br />Please answer what is 3 + 7';
    }
	
    if(!$error) {
        $adminEmail = "louie.benjamin@gmail.com";
        $headers = "From: louie.benjamin@gmail.com\n";
        $headers .= "Content-type: text/html;";
        $emailSubject = "BL Web Solutions: ".$_POST['subject'];
        $emailContent = "<p>You have sent a message to BL Web Solutions. The contents
        of the message are the following:</p> 

        <p>Name: ".$_POST['name']."<br>
        Company: ".$_POST['company']."<br>
        Email: ".$_POST['email']."<br>
        Message: ".$_POST['message']."</p>";

        if(@mail($adminEmail, $emailSubject, $emailContent, $headers)) {
            $error = 'Message sent! You will receive a confirmation email shortly.'; 
        } 
        else {
            $error = 'Error: message not sent! Please inform the administrator: louie.benjamin@gmail.com';
        }
    }
}
?>
<div class="body">
<div class="body_resize">
<div class="clr"></div>
<div class="left">
    <div style="width: 700px; margin: 0px 70px;">
	<?=$error?>
	<h2>Leave Us a Message</h2>
	<p>If you'd like more information about us, or request custom pricing on a certain project, feel free to contact
	us using the form below. We will respond to you within 48 to 72 hours or earlier.</p>
	<form method="post" id="contactform">
	<ol>
		<li>
		  <label for="name">Full Name</label>
		  <input id="name" name="name" class="text" value="<?=$_POST['name']?>"/>
		</li>
		<li>
		  <label for="email">Your email</label>
		  <input id="email" name="email" class="text" value="<?=$_POST['email']?>"/>
		</li>
		<li>
		  <label for="company">Company</label>
		  <input id="company" name="company" class="text" value="<?=$_POST['company']?>"/>
		</li>
		<li>
		  <label for="message">Message</label>
		  <textarea id="message" name="message" rows="6" cols="50"><?=$_POST['message']?></textarea>
		</li>
                <li>
                    <label>Answer this: What is 3 + 7? </label>
                     <input id="spam" name="spam" class="text" value="<?=$_POST['spam']?>"/>
                </li>
		<li class="buttons">
		  <input type="image" name="imageField" id="imageField" src="images/send.gif" class="send" />
		  <div class="clr"></div>
		</li>
	</ol>
	</form>
        
        <p>&nbsp;</p>
        <h2>Contact Us By Phone</h2>
        <p>If you have a project that you want a quote on, please call my 
        manager at 212-777-8001</p>
    </div>
</div>