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
        $sql="SELECT employee.name,employee.empid,employee.email,employee.contact,department.dept_name
        FROM employee,emp_dept,department where emp_dept.emp_id=employee.empid and 
        emp_dept.dept_id=department.dept_id and employee.empid='$id'";
     
        $statement = $conn->prepare($sql);  
        $statement->execute();  
        $emps = $statement->fetchAll();
//var_dump($emps);
     $str="";
     foreach($emps as $testing){
        $str.=$testing['dept_name'].",";
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
            <h3 class="section-title"><br>Viewing your own details</h3>
            <div class="section-title-divider"></div>

          </div>
        </div>

        <center>
            
          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action=" " method="post" role="form" enctype="multipart/form-data">
                <div class="floating-form">
                    
             <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="name" value="<?php echo $emps['0']['name'] ?>" readonly>
              <span class="highlight"></span>
              <label>Your name :</label>
            </div><br>
                    
            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="id" value="<?php echo $emps['0']['empid'] ?>" readonly>
              <span class="highlight"></span>
              <label>Your ID :</label>
            </div><br>
                    
          

            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " value="<?php echo $emps['0']['email'] ?>" name="email" readonly>
              <span class="highlight"></span>
              <label>Your Email :</label>
            </div>
                    
                     <br><div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="id" value="<?php echo $emps['0']['contact'] ?>" readonly>
              <span class="highlight"></span>
              <label>Your Contact No. :</label>
            </div><br>
            
            <br><div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="id" value="<?php print_r($str) ?>" readonly>
              <span class="highlight"></span>
              <label>Your Department :</label>

         
            </div><br>
                    <br>
          </div>
              </div>