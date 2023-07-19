<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="icon" type="image/png" href="assets/img/favicon.png">

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
<style>
.mobile-nav-toggle{
  color: #000000;
}
.navbar a{
  color: #000000;
}
</style>
    <?php 
 session_start();
 ?>
</head>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="background-color:#c4c2c2; text-align: right;">
    <div class="container d-flex align-items-center justify-content-between">

      <a  class="logo mr-auto"><img src="assets/img/logo2.png" 
                                    style="height:50px;width:220px;margin-top:15px"  alt=""></a>
      <nav id="navbar" class="navbar">
         
          <ul>
              <li><a class="nav-link scrollto" href="view_emp_profile.php" 
                     target="frame2" color="#000000" 
                     style="margin-top: 13px;" text-align="right">View Profile     </a></li>   </ul>
          
          <ul>
            <li><a class="nav-link scrollto" href="reset_pass_emp.php" href=" " 
                   target="frame2" color="#000000" style="margin-top: 13px;" 
                   text-align="right">Reset Password</a></li>
        </ul>
          
          <ul>
            <li><a class="nav-link scrollto" href="logout_emp.php"
                   target="_top" color="#000000"
                   style="margin-top: 13px;" text-align="right">Logout</a></li>
        </ul>
          
 
         

        <i class="bi bi-list mobile-nav-toggle"></i>
      
        </nav>
    </div>
  </header>
  <!-- End Header -->