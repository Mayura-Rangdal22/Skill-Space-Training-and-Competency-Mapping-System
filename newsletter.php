<head>
   <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Skill Space</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
 <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style_dashboard.css" rel="stylesheet">

</head>
<?php 

include 'include/header.php';

?>
<?php 
include "conn.php";
require "include/helper.php";

if(isset($_POST['send'])){

	if(!empty($_POST["name"])and !empty($_POST["email"])){
			if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
    echo function_alert("Invalid email format");  
    }else{
    $email =$_POST["email"];
    }
   //name validation
    if (!preg_match("/^[a-zA-z\s]*$/",$_POST["name"])) {  
    	echo function_alert("Only alphabets and white space are allowed in name");  
    }else{
    $name =$_POST["name"];
    }
  $sql="INSERT into newsletter (name,email) values ('$name','$email')";
  $subscribed=$conn->exec($sql);
  if($subscribed){
  	function_alert("NEWSLETTER SUBSCRIBED SUCCESSFULLY");
  	
  }
  }
	mail($email,'Newsletter Subscription from Skill Space',"Hello $name, We are tech team of Skill Space ,Thanks for subscribing to our newsletter.We will keep you updated.",'From: sarassk21@gmail.com');
}
?>
<!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container wow fadeInUp">
          <div class="cardblock" style="background-color: #fff; height:520px;">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title"><br><br>Newsletter Subscription</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">We would love to give you updates !</p>
          </div>
        </div>

        <center>
          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action=" " method="post" role="form" class="php-email-form">
                <div class="floating-form">
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="name" required>
              <span class="highlight"></span>
              <label>Your name :</label>
            </div><br><br>

            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="email" required>
              <span class="highlight"></span>
              <label>Your Email :</label>
            </div><br><br>

            <div class="text-center"><button type="submit" name="send">GET SUBSCRIPTION</button></div>
          </div>
              </form><br><br>
            </div>
          </div>
          <center>

        </div>
      </div>
    </section><!-- End Contact Section -->
<?php 

include 'include/footer.php';

?>
