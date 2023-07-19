<html>

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



  
   
</head>

 <?php 
include'include/header.php';
?>

<body>




<?php 


// include("db.php");
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "sarasaeed"; /* Password */
$dbname = "skillspace"; /* Database name */



$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

  <!-- ======= Videos Section ======= -->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Trainings Videos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Training and development allows employers to pinpoint the knowledge and skills they want their employees to have. Training and development programs can educate employees about new skills or provide updates on existing skills to enhance productivity.</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
          <img src="assets/img/training_image.png" alt="" width="100%" height="450px">
        </div>

        <div class="col-md-6 about-content">
          <h2 class="about-title">We provide best training programmes for our trainees!!</h2>
          <p class="about-text">
            Training presents a prime opportunity to expand the knowledge base of all employees, but many employers in the current climate find development opportunities expensive. Employees attending training sessions also miss out on work time which may delay the completion of projects. However despite these potential drawbacks, training and compentance provides both the individual and organisations as a whole with benefits that make the cost and time a worthwhile investment. The return on investment from training and compentance of employees is really a no brainer.
          </p>
          <p class="about-text">
            Whether dealing with an entire company, an internal department, or an individual, training and compentance has significant effects on talent retention, profit growth, and overall company sustainability. Fine tuning performance is the top goal of any business’s leadership, and focusing on the development of employee’s pays massive dividends—in revenue, but more importantly, in impact. 
          </p>
          <p class="about-text">

          </p>
        </div>
      </div>
    </div>
  <br><br>
      <h3 class="section-title">Best Trainings Videos</h3>
    <div class="section-title-divider"></div>
    <div class="container" style="position: relative;left: 18px;">
      <div class= "box">


      <?php


      $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
      while($row=mysqli_fetch_assoc($fetchVideos)){
        $loc=$row['location'];
        $caption=$row['caption'];
        $name=$row['name'];
        echo "<div style='float: left; margin-right: 10px; margin-left:90px; margin-bottom:100px; 
        column-span:all; padding:20px;border-spacing:40px; float:left; background-color:#111; 
        max-width: 490px; '>";
        echo "<video src='$loc' controls width='450px' height='300px' ></video>";    
        echo "<br>";
        echo "<span style='text-align:center; padding:5px;  color:#03C4EB;'>$caption</span>";
        echo"</div>";
      }


      ?>

    </div>
        </div>  
  
</section><!-- End Videos Section -->
<?php include"include/footer.php";?>
</body>
</html>