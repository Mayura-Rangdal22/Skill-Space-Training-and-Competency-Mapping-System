
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
    <h3 class="section-title">Update blogs</h3>
    <div class="section-title-divider"></div>
    <p class="section-description">Knowledge is power. Provide the details of person whose blog it is
    </p>
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
    <label>Blog Title :</label>
    </div><br>

    <div class="floating-label">      
    <input class="floating-input" type="text" placeholder=" " name="name" required>
    <span class="highlight"></span>
    <label>Name :</label>
    </div><br>

    <div class="floating-label">      
    <input class="floating-input" type="text" placeholder=" " name="email" required>
    <span class="highlight"></span>
    <label>Email :</label>
    </div><br>

    <div class="floating-label">      

    <span class="highlight"></span>
    <label>Blog :</label>
    </div><br>

    <textarea name="blog" rows="10" cols="70" wrap="soft"></textarea><br>

    <div class="floating-label"><br><br>
    <br><br><input class="floating-select" name="photo" type="file">
    <span class="highlight"></span><br>
    <label><br><br><br>Photo :</label><br>
    </div>


    </div>


    <br><div class="text-center"><button type="submit" name="add">Add Blog</button><br></div>
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

    // Name validation
    if(isset($_POST['name'])){
    $name=$_POST['name'];
    }
    else{
    echo function_alert("Mention name");
    die();
    }
    //Email validation
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
    echo function_alert("Invalid email format");  
    die();
    }else{
    $email =$_POST["email"];
    }

    // details validation
    if(isset($_POST['blog'])){
    $blog=$_POST['blog'];
    }
    else{
    echo function_alert("Write your blog...");
    die();
    }
    //photo 
    $photo = $_FILES['photo'];
    $file2 = upload_photo($photo);

    $sql="INSERT Into blogs(`name`, `email`, `title`, `photo`, `blog`) values('$name','$email','$title','$file2','$blog')";
    $isSuccess=$conn->exec($sql);
    if ($isSuccess) {
    echo function_alert("YOUR BLOG IS BEEN SUCCESSFULLY UPDATED...");

    } else {
    echo function_alert("CAN NOT UPLOAD YOUR BLOG , TRY AGAIN");
    }

    }


    ?>




