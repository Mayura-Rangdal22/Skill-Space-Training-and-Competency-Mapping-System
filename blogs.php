

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

<!-- ======= Contact Section ======= -->
  <section id="contact">
    <div class="container wow fadeInUp">
    <div class="cardblock" style="background-color: #fff; height: 125%;"><br>
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Write Your Blogs</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">We would love to upload your blogs... <br> Go Ahead !</p>
        </div>
      </div>
   <center>
        <div class="col-lg-5 col-md-8">
          <div class="form">
            <form action=" " method="post" >
              <div class="floating-form">
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="name" required>
              <span class="highlight"></span>
              <label>Your Name :</label>
            </div><br>
                  
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="email" required>
              <span class="highlight"></span>
              <label>Your Email :</label>
            </div><br>
                  
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="title" required>
              <span class="highlight"></span>
              <label>Write Title :</label>
            </div><br>
                  
            <div class="floating-label">
            <input class="floating-select" name="file" type="File">

            <span class="highlight"></span><br>
            <label>Add Photo :</label><br><br>
               </div>
                  
            <div class="floating-label">       
              <span class="highlight"></span>
                <textarea name="write" rows="12" cols="50" wrap="soft" required>
                    
                </textarea>
            </div>
            
            <div class="text-center"><button type="submit" name="blog">Upload Blog</button></div><br>
            </div>
          
        </form>
        </div>    
        </div>
        </center> 
      </div>
      </div>
</section>
   <!-- End Contact Section -->
  <?php
include 'dbconn.php';
include 'include/helper.php';

  if (isset($_POST['blog'])) {
    //name validation
    if (!preg_match("/^[a-z A-Z]*$/",$_POST["name"])) {  
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

// Title validation
        if(isset($_POST['title'])){
      $title=$_POST['title'];
    }
    else{
      echo function_alert("Mention title");
      die();
    }
      
      
      //photo 
    $photo = $_FILES['file'];
    $file1 = upload_photo($photo);

      // Message validation
        if(isset($_POST['write'])){
      $write=$_POST['write'];
    }
    else{
      echo function_alert("Write your blog...");
      die();
    }
        

    $sql="INSERT Into blogs(name, email, title,file, blog) values('$name','$email','$title','$file1','$write')";
    $isSuccess=$conn->exec($sql);
    if ($isSuccess) {
      echo function_alert("YOUR BLOG IS BEEN SUCCESSFULLY SENT...");

    } else {
      echo function_alert("CAN NOT UPLOAD YOUR BLOG , TRY AGAIN");
    }

  }

  ?>

  <?php 

  include 'include/footer.php';

  ?>
