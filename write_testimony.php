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
        $sql="SELECT * FROM trainee where id='$id'";
        $statement = $conn->prepare($sql);  
        $statement->execute();  
        $trainee = $statement->fetchAll();
        $name=$trainee['0']['name'];


if (isset($_POST['send'])) {
       
        $photo = $_FILES['photo'];
        $file1 = upload_photo($photo);
      
        //name validation
        if (!preg_match("/^[a-zA-z\s.]*$/",$_POST["name"])) {  
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

        

        //message validation
        if(isset($_POST['message'])){
          $message=$_POST['message'];
        }
        else{
          echo function_alert("Enter message ");
          die();
        }
        
        
       
       
        $sql="INSERT Into testimonials(name, email,message,pic ) values('$name','$email','$message','$file1')";
        $isSuccess=$conn->exec($sql);
        if ($isSuccess) {
            echo function_alert("SUCCESSFULLY SENT ");
            
        } else {
            echo function_alert("CAN NOT CONTACT AT THE MOMENT , TRY AGAIN");
        }
    
}

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
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title"><br>Share your story with us.</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Its great to get acknowledged by our trainees and Employees !</p>
          </div>
        </div>

        <center>
          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action=" " method="post" role="form" enctype="multipart/form-data">
                <div class="floating-form">
             <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="name" value="<?php echo $trainee[0]['name'] ?>" readonly>
              <span class="highlight"></span>
              <label>Your name :</label>
            </div><br>

            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " value="<?php echo $trainee[0]['email'] ?>" name="email" readonly>
              <span class="highlight"></span>
              <label>Your Email :</label>
            </div>

            <br><div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="message" >
              <span class="highlight"></span>
              <label>Your Reviews :</label>
            </div>

            <div class="floating-label"><label>Your Photo :</label><br><br>
                <input name="photo" id="photo"  type="file" class=" floating-input" placeholder="Select Photo "
                        ><br><br>

            <div class="text-center"><button type="submit" name="send">SUBMIT</button><br></div>
          </div><br>
              </form>
            </div>
          </div>
      </center>
        </div>
      </div>
    </section><!-- End Contact Section -->
</form>
</div>
</div>
</center>
</div>
</section>
</body>
<!-- 

include 'include/footer.php';


 --> 