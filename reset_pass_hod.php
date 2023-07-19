<!--reset_pass_hr -->
<?php 
 session_start();
 include 'conn.php';
// include 'include/header.php';
include 'include/helper.php';
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
     
     
     
     



 <?php
        $id=$_SESSION['id'];
        $sql="SELECT password FROM hod where id='$id'";
        $statement = $conn->prepare($sql);  
        $statement->execute();  
        $trainee = $statement->fetchAll();
?>
<style type="text/css">
  body{
    font-family: 'Open Sans', sans-serif;
    color: #333;
    font-size: 14px;
    background-color: #dadada;
    padding: 50px;
  }
</style>

</head>

<!-- ======= Contact Section ======= -->
<body>
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="cardblock" style="background-color: #fff;">
            
             <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="background-color:#c4c2c2; text-align: right; color: black">
    <div class="container d-flex align-items-center justify-content-between">

      <a  class="logo mr-auto">

        </a>
      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>
      
        </nav>
    </div>
  </header>
  <!-- End Header -->
    
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title"><br>Reset your password</h3>
            <div class="section-title-divider"></div>

          </div>
        </div>

        <center>
           <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action=" " method="post" role="form" class="php-email-form">
                <div class="floating-form">
            <div class="floating-label">      
              <input class="floating-input" type="password" placeholder=" " name="oldpass" required>
              <span class="highlight"></span>
              <label>Your Old Password :</label>
            </div><br>

            <div class="floating-label">      
              <input class="floating-input" type="password" placeholder=" " name="newpass" required>
              <span class="highlight"></span>
              <label>Your New Password :</label>
            </div><br>
                    
            <div class="floating-label">      
              <input class="floating-input" type="password" placeholder=" " name="cpass" required>
              <span class="highlight"></span>
              <label>Confirm Your New Password :</label>
            </div><br>

            <div class="text-center"><button type="submit" name="reset">RESET PASSWORD</button></div>
          </div><br>
              </form>
            </div>
          </div>
      </center>
        </div>
      </div>
    </section><!-- End Contact Section -->
    <?php
 include "conn.php";
$id=$_SESSION['id'];
if (isset($_POST['reset'])) {

    $oldpass = $_POST["oldpass"];
    $newpass =$_POST["newpass"];
    $cpass =$_POST["cpass"];
            
   
      $sql = "SELECT password FROM hod WHERE id = '$id'";
      $statement = $conn->prepare($sql);  
      $statement->execute();  
      $hod_data = $statement->fetchAll();

      if(($hod_data[0]["password"]=="$oldpass") and ("$newpass"=="$cpass")){
        $sql="update hod set password='$cpass' where id='$id'";
        $statement = $conn->prepare($sql);  
        $condition=$statement->execute();
        if($condition){
           echo '<script>alert("Password changed")</script>';
        }
      }
      else{
        echo '<script>alert("Incorrect old password");</script>';
      }
            }      
        
?>
