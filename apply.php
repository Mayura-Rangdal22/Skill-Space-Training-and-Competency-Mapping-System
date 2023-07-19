
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
$roles=['General Manager','Deputy General manager','Associate General Manager',
        'Senior Engineer / Executive','Manager','Associate Manager','Senior Manager',
        'Executive/Engineer','Assistant Engineer','Junior Engineer','Executive',
        'GET (Graduate Engineer Trainee)','DET (Diploma Engineer Trainee)','Worker','Trainee'];
?>

<body>


<!-- ======= Contact Section ======= -->
<section id="contact">
  <div class="container wow fadeInUp">
      <!-------------Add that section here and close the div before end of section------>
       <div class="cardblock" style="background-color: #fff;">
          <!-----------------And add #dadada into style.css main file ------------------------>
    <div class="row">
        
      <div class="col-md-12"><br><br>
        <h3 class="section-title">Apply To HR</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">Thanks for showing interest !!</p>
      </div>
    </div>

    <center>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action=" " method="post" enctype="multipart/form-data" role="form" class="php-email-form">
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
              <input class="floating-input" type="text" placeholder=" " name="contact" minlength="10" maxlength="10" required>
              <span class="highlight"></span>
              <label>Your Mobile Number :</label>
            </div><br>

            <div class="floating-label">      
              <!-- <input class="floating-input" type="text" placeholder=" " name="role" required> -->
              <select class="floating-select" name="role"  placeholder="Select role">
                <?php foreach ($roles as $role) : ?>
                  <option value="<?= $role ?>"> <?= $role ?>
                </option>
              <?php endforeach; ?>
            </select>
            <span class="highlight"></span><br>
            <label>Your Desired Designation :</label>
          </div>


          <div class="floating-label">
            <input class="floating-select" name="file" type="file">

            <span class="highlight"></span><br>
            <label>Your Resume :</label>
               </div>


            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="link" required>
              <span class="highlight"></span>
              <label>Your LinkedIn URL :</label>
            </div><br>

            

           
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="why" required>
              <span class="highlight"></span>
              <label>Why do you want to get trained at our firm ? :</label>
            </div>
            <div class="text-center"><button type="submit" name="apply">APPLY</button></div>
          </div><br>

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
//$roles=["Trainee","HRD","HR"];

if (isset($_POST['apply'])) {

        //name validation
if (!preg_match("/^[a-zA-z.\s]*$/",$_POST["name"])) {  
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



        //contact number validation
  if (!preg_match ("/^[0-9]*$/", $_POST["contact"])) { 
    echo function_alert("Mobile number should contain only numbers");
    die();
  }
  elseif ((preg_match("/[0-9]/",$_POST["contact"]))!=1 ||$_POST["contact"]=="1234567890"||
          $_POST["contact"]=="1111111111"||$_POST["contact"]=="0000000000"||
          $_POST["contact"]=="1122334455"||$_POST["contact"]=="2222222222"||
          $_POST['contact']=="3333333333"||$_POST['contact']=="4444444444"||
          $_POST['contact']=="5555555555"||$_POST["contact"]=="6666666666"||
          $_POST["contact"]=="7777777777"||$_POST["contact"]=="8888888888"||
          $_POST["contact"]=="9999999999"){
    echo function_alert("Enter valid Mobile number");
    die();
  }
  else{
    $contact =$_POST["contact"];
  }


//Role
  if(isset($_POST['role'])){
    $role=$_POST['role'];
  }





    
    $file = $_FILES["file"];
    $file1 = upload_pdf($file);
  

    //linkedIn link validation
  $str =$_POST['link'];
  $pattern = "/(https?)?:?(\/\/)?(([w]{3}||\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/";
  if(preg_match($pattern, $str)){
    $link=$_POST['link'];
  }
  else{
    function_alert("INVALID LINKEDIN LINK");
    die();
  }
 

  //why
  if(isset($_POST['why'])){
    $why=$_POST['why'];
  }



  $sql="INSERT Into apply(name, email,contact,role,resume,link,why ) values('$name','$email','$contact','$role','$file1','$link','$why')";
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
    





<!--  <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div><br>
                <div class="form-group mt3">
                    
                <select class="form-control" name="role"  placeholder="Select role">
                        <?php foreach ($roles as $role) : ?>
                        <option value="<?= $role ?>"> <?= $role ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
              <br><br>
                <div class="text-center"><button type="submit" name="send">Send Message</button></div>
 -->