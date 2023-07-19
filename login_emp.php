
<?php

include 'conn.php';
include 'include/helper.php';

session_start();


if (isset($_POST['login'])) { 

  $id = test_input($_POST["uname"]);
  $pass =test_input($_POST["pass"]); 

  $sql = "SELECT * FROM employee WHERE empid = '$id' AND password = '$pass'";
  $statement = $conn->prepare($sql); 
  $statement->execute();  
  $emps = $statement->fetchAll();
  $_SESSION['id']=$emps['0']['empid'];
     
  if(($emps['0']['empid'] =="$id") &&  ($emps['0']['password'] == "$pass")) {
      
        header("Location: emp_dashboard.php");

        }
  else{
          header("Location: invalid.php");
         
           }
}



?>
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
include 'include/header.php';

?>
<!-- ======= Contact Section ======= -->
<section id="contact">
  <div class="container wow fadeInUp">
    <div class="cardblock" style="background-color: #fff;height:520px;">
    <div class="row">
      <div class="col-md-12"><br><br><br><br>
        <h3 class="section-title">Login as Employee</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">Welcome Employee</p>
      </div>
    </div>

    <!-- LOGIN FORM START -->
    <center>
      <form method="post" action="">
        <div class="floating-form">
          <div class="floating-label">      
            <input class="floating-input" type="text" placeholder=" " name="uname" required>
            <span class="highlight"></span>
            <label>Your ID :</label>
          </div><br><br>
        
          <div class="floating-label">      
            <input class="floating-input" type="password" placeholder=" " name="pass" required>
            <span class="highlight"></span>
            <label>Your Password :</label>
          </div><br><br>
          <div class="text-center"><button type="submit" name="login">LOGIN</button></div><br><br><br>
        </div>
      </form>
    </div>  
      
    </div>
  </center>
  <!-- LOGIN FORM END -->
</div>
</div>
</section><!-- End Contact Section -->





<?php
include 'include/footer.php';

?>

