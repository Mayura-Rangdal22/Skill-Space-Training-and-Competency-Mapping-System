
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
  <meta name="t witter:card" content="summary">
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

<body style="background-color:#dadada;">


<!-- ======= Contact Section ======= -->
<section id="contact">
  <div class="container wow fadeInUp">
      <!-------------Add that section here and close the div before end of section------>
       <div class="cardblock" style="background-color: #fff;">
          <!-----------------And add #dadada into style.css main file ------------------------>
    <div class="row">
        
      <div class="col-md-12"><br><br>
        <h3 class="section-title">Add Event</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">This event will appear on the calendar.</p>
      </div>
    </div>

    <center>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action=" " method="post" enctype="multipart/form-data" role="form" class="php-email-form">
           <div class="floating-form">
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="title" required>
              <span class="highlight"></span>
              <label>Add Event Title :</label>
            </div><br>
               
               
               <div class="floating-label">      
              <input class="floating-input" type="date" placeholder=" " name="date" required>
              <span class="highlight"></span>
              <label>Add Event Date :</label>
            </div><br>
               
               <div class="floating-label">      
              <input class="floating-input" type="time" placeholder=" " name="duration" required>
              <span class="highlight"></span>
              <label>Add Duration :</label>
            </div>
            <br>

            

            <div class="floating-label">      
              <input class="floating-input" type="time" placeholder=" " name="time" required>
              <span class="highlight"></span>
              <label>Add Time :</label>
            </div>
            <br>
               
               
               
               
		</div>
	

               <br><div class="text-center"><button type="submit" name="add">Add event</button><br></div>
       <br>

        </form>
      </div>
    </div>
  </center>

      </div>

    </div>
</section><!-- End Contact Section -->
</body>                               
<?php
include 'conn.php';
include 'include/helper.php';

 if(isset($_POST['add'])){ 
// Title validation
        if(isset($_POST['title'])){
      $title=$_POST['title'];
    }
    else{
      echo function_alert("Add Title");
      die();
    }
      
     $title = $_POST['title']; 
     $date = $_POST['date']; 
     $time = $_POST['time'];
     $duration = $_POST['duration'];

    $sql="INSERT Into events(title,date,time,duration) values('$title','$date','$time','$duration')";
    $isSuccess=$conn->exec($sql);
    if ($isSuccess) {
      echo function_alert("YOUR EVENT IS BEEN SUCCESSFULLY ADDED...");

    } else {
      echo function_alert("CAN NOT ADD YOUR EVENT , TRY AGAIN");
    }

  }


?>
    



