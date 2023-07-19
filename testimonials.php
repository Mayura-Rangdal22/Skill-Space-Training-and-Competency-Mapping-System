<html>
<head lang="en">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta charset="UTF-8">
    <title>Skill Space</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    
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
    /*body{
            margin-top: 100px !important;
        }*/
        .view-testimonial{
            margin-top: 110px !important;
            border-right: 4px solid #111;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
            padding: 30px 30px 30px 130px;
            margin: 0 15px 30px 15px;
            overflow: hidden;
            position: relative;
        }
        .view-testimonial:before{
            content: "";
            position: absolute;
            bottom: -4px;
            left: -17px;
            border-top: 25px solid #03c4eb;
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            transform: rotate(45deg);
        }
        .view-testimonial:after{
            content: "";
            position: absolute;
            top: -4px;
            left: -17px;
            border-top: 25px solid #111;
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            transform: rotate(135deg);
        }
        .view-testimonial .pic{
            display: inline-block;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: 60px;
            left: 20px;
        }
        .view-testimonial .pic img{
            width: 100%;
            height: auto;
        }
        .view-testimonial .view-description{
            font-size: 15px;
            letter-spacing: 1px;
            color: #6f6f6f;
            line-height: 25px;
            margin-bottom: 15px;
        }
        .view-testimonial .title{
            display: inline-block;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #111;
            margin: 0;
        }
        .view-testimonial .post{
            display: inline-block;
            font-size: 17px;
            color: #03c4eb;
            font-style:italic;
        }
        .owl-theme .owl-controls .owl-page span{
            border: 2px solid #03c4eb;
            margin:15px;
            background: #fff !important;
            border-radius:0 !important;
            opacity: 1;
        }
        .owl-theme .owl-controls .owl-page.active span,
        .owl-theme .owl-controls .owl-page:hover span{
            background: #111 !important;
          border-color:#111;
        }
        @media only screen and (max-width: 767px){
            .view-testimonial{
                padding: 20px;
                text-align: center;
            }
            .view-testimonial .pic{
                display: block;
                position: static;
                margin: 0 auto 15px;
            }
        }
    </style>
    
 <?php
    include'conn.php';
    
        $sql="SELECT * FROM testimonials ";
        $statement = $conn->prepare($sql);  
        $statement->execute();  
        $tests = $statement->fetchAll();
    ?>   
</head>
<body>
    
    <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
    

      <nav id="navbar" class="navbar" style="padding: 10px 0 10px 30px;">
        <ul style="margin-left: 100px;margin-top:20px">
         
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="apply.php">Apply to HR</a></li>

          <li class="dropdown" ><a href="#" ><span>Departments</span> <i class="bi bi-chevron-down"></i></a>

            <ul style="width:350px;">
				<div class = "first">
              <li><a href="dpt1.php">Finance</a></li>
              <li><a class="nav-link scrollto" href="dpt2.php">Sales</a></li>
              <li><a href="dpt3.php">Supply Chain</a></li>
              <li><a href="dpt4.php">Production</a></li>
              <li><a href="dpt5.php">Machine Shop</a></li>  
			  <li><a href="dpt6.php">Quality Assurance</a></li>
              <li><a href="dpt7.php">Maintenance</a></li>
			  </div>
			  <div class= "second" style="position: relative;left: 165px;top: -306px;max-height: 10px;">
             
              <li><a href="dpt8.php">Tool Room</a></li> 
			  <li><a href="dpt9.php">Die-maintenance</a></li>
              <li><a href="dpt10.php">Logistics </a></li>
              <li><a href="dpt11.php">HR</a></li> 
			  <li><a href="dpt12.php">IT</a></li> 
              <li><a href="dpt13.php">Operations</a></li> 
              <li><a href="dpt14.php">PPC</a></li> 
            </div>
             
              
                        </ul>
                    <div>
          
          <li class="dropdown"><a href="#"><span>Our Content</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="job_description.php">Job Descriptions</a></li>
              <li><a href="interview.php">Interview Questions</a></li>
              <li><a href="training_details.php">Training Details</a></li>
              <li><a href="competencies.php">Competencies</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="contact.php">Contact us</a></li>
          <li><a class="nav-link scrollto" href="testimonials.php">Testimonials</a></li>
              <li><a href="about.php">About Us</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="read_blog.php">Blogs</a></li>
              <li><a class="nav-link scrollto" href="read_videos.php">Videos</a></li>
              <li><a href="view_casestudies.php">Case Studies</a></li>
              <li><a href="hiring_guides.php">Hiring Guides</a></li>
             
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Dashboard </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login_trainee.php">Trainee Login</a></li>
              <li><a href="login_HR.php">HR Login</a></li>
              <li><a href="login_HOD.php">HOD Login</a></li>
              <li><a href="login_emp.php">Employee Login</a></li>


             </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
                        </li>
              </div></li></ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header--->
       <br><br><h3 class="section-title">Testimonials</h3>
    <div class="section-title-divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 
                <div id="testimonial-slider" class="owl-carousel">
                    <?php for($i=0;$i<count($tests);$i++):?>
                    <div class="view-testimonial" style="max-height:250px;min-height:200px;">
                        <div class="pic">
                            <img  src="images/<?php echo $tests["$i"]["pic"];?>"/>
                        </div>
                        <p class="view-description">
                            <?php echo $tests["$i"]["message"];?>
                        </p>
                        <h3 class="title"><?php echo $tests["$i"]["name"];?></h3><br>
                        <small class="post"><?php echo "-".$tests["$i"]["email"];?></small>
                    </div>
                    <?php endfor ;?>
                </div>
                
            </div>
        </div>
    </div><br><br>
    <br><br>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    
    
    
    <script>
        $(document).ready(function(){
            $("#testimonial-slider").owlCarousel({
                items:2,
                itemsDesktop:[1000,2],
                itemsDesktopSmall:[990,2],
                itemsTablet:[768,1],
                pagination:true,
                navigation:false,
                navigationText:["",""],
                slideSpeed:1000,
                autoPlay:true
            });
        });
    </script>
</body>
</html>

<?php include('include/footer.php');?>


 