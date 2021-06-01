<?php
require"header.php";
$result="";
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$to_email = "raishalam043@gmail.com";
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$headers = "From: $email";
	$send = mail($email,$subject,$message,$headers);
    if(!$send){
	  echo "Email sending failed...";
    }else{
		echo "Email sent.";
	}
	//echo $name." ".$email;
	
}
 ?>
<section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3 class="test-gander">Our Address</h3>
                  <p>InnogenX, 4th Floor , Uma Admiralty, No.1, HDFC Bank, Bannerghatta Main Rd, BTM Layout 1, Bengaluru, Karnataka 560029</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@innogenx.in</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+919901972889</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->
	<?php require"footer.php";?>
  