
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

<body>


<!-- ======= Contact Section ======= -->
<section id="contact">
  <div class="container wow fadeInUp">
      <!-------------Add that section here and close the div before end of section------>
       <div class="cardblock" style="background-color: #fff;">
          <!-----------------And add #dadada into style.css main file ------------------------>
    <div class="row">
        
      <div class="col-md-12"><br><br>
        <h3 class="section-title">Add Notice</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">This notice will appear on the notice board.</p>
      </div>
    </div>

    <center>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action=" " method="post" enctype="multipart/form-data" role="form" class="php-email-form">
           <div class="floating-form">
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="title" style="width:439px;" required>
              <span class="highlight"></span>
              <label>Notice title :</label>
            </div><br>
     
               <div class="floating-label">      
            
              <span class="highlight"></span>
              <label>Notice details :</label>
            </div><br>
               
               <textarea name="notice" rows="10" cols="70" wrap="soft"></textarea><br>
		</div>
	

               <br><div class="text-center"><button type="submit" name="add">Add notice</button><br></div>
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
      echo function_alert("Mention title");
      die();
    }
      
      
      // details validation
        if(isset($_POST['notice'])){
      $details=$_POST['notice'];
    }
    else{
      echo function_alert("Write your blog...");
      die();
    }


    $sql="INSERT Into notices(title,message) values('$title','$details')";
    $isSuccess=$conn->exec($sql);
    if ($isSuccess) {
      echo function_alert("YOUR NOTICE IS BEEN SUCCESSFULLY UPDATED...");

    } else {
      echo function_alert("CAN NOT UPLOAD YOUR NOTICE , TRY AGAIN");
    }

  }


?>
    



