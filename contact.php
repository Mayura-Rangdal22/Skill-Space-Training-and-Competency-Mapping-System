   <head>
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
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  include 'conn.php';
  include 'include/header.php';
  include 'include/helper.php';

  ?>
  <!-- ======= Contact Section ======= -->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="cardblock" style="background-color: #fff; height: 520px;">
       
      <div class="row">
        <div class="col-md-12"><br>
          <h3 class="section-title"><br>Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">We would love to hear suggestions or any queries .. Go Ahead !</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6">
          <div class="info" style="margin-left:150px;">
            <div>
              <i class="bi bi-geo-alt"></i>
              <p>Ranjangaon<br>Pune , Maharashtra</p>
            </div>

            <div>
              <i class="bi bi-envelope"></i>
              <p>skillspace@gmail.com</p>
            </div>

            <div>
              <i class="bi bi-phone"></i>
              <p>+91 7210110121</p>
            </div>

          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form" style="margin-left:150px;">
            <form action=" " method="post" >
              <div class="floating-form">
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="name" required>
              <span class="highlight"></span>
              <label>Your name :</label>
            </div><br>
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="email" required>
              <span class="highlight"></span>
              <label>Your Email :</label>
            </div><br>
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="subject" required>
              <span class="highlight"></span>
              <label>Your Subject :</label>
            </div>
            <br>
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="message" required>
              <span class="highlight"></span>
              <label>Your Message :</label>
            </div>
            
            <div class="text-center" style="margin-left:-400px;"><button type="submit" name="send">CONTACT US</button></div>
          </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  </section><!-- End Contact Section -->
  <?php
  if (isset($_POST['send'])) {
    //name validation
    if (!preg_match("/^[a-zA-z\s]*$/",$_POST["name"])) {  
      echo function_alert("Only alphabets and words are allowed in name");  
      die();
    }else{
      $name =$_POST["name"];
    }

          //Email validation
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
      echo function_alert("Invalid email format");  
      die();
    }else{
      $email =$_POST["email"];
    }

          //subject  validation
    if(isset($_POST['subject'])){
      $subject=$_POST['subject'];
    }
    else{
      echo function_alert("Enter subject ");
      die();
    }

          //message validation
    if(isset($_POST['message'])){
      $message=$_POST['message'];
    }
    else{
      echo function_alert("Enter message ");
      die();
    }




    $sql="INSERT Into contact(name, email,subject,message ) values('$name','$email','$subject','$message')";
    $isSuccess=$conn->exec($sql);
    if ($isSuccess) {
      echo function_alert("SUCCESSFULLY SENT , WE WILL REACH OUT SOON BY MAIL");

    } else {
      echo function_alert("CAN NOT CONTACT AT THE MOMENT , TRY AGAIN");
    }

  }

  ?>

  <?php 

  include 'include/footer.php';

  ?>
