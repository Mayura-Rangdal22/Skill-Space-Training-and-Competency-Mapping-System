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
<?php include ('include/header.php');?>
    
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style_dashboard.css" rel="stylesheet">

    
</head>


<style>
/* Float four columns side by side */
.column {
  float: left;
  width: 80%;
  padding: 0 10px;
  position: relative;
    height:auto;
    margin-left: 120px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: #f1f1f1;
  color:#111;
  font-size: 17px;
  height: auto;
    width: 80%;
}



</style>



<body>
    
    
<!-- ======= Case Studies Section ======= -->
    
<section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Case studies</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">The case studies originated from our organization's trainers,employees and trainees.</p>
          </div>
        </div>
      </div>
    
    
     <!------<img src="assets/img/" alt="" style="width:700px; height:75%">---->
    
    
    <div class="row">
  <div class="column">
    <div class="card">
     <h3>Name :-- </h3>
     <strong><h3>Title :--</h3></strong>
        
        
        
        <?php echo'<h3>Name :-- </h3>'.$name; ?>
        <?php echo'<strong><h3>Title :--</h3></strong>'.$name; ?>
        
        
        <br/><br/>
<iframe src="<?php echo $path.$pdf; ?>" width="80%" height="auto">
</iframe>
    </div>
  </div>
    </div>
    </section>
<!--------------------End Of Case Studies Section ------------------>
    

</body>

<?php include('include/footer.php');?>