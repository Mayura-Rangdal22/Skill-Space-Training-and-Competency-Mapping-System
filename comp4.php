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
    <?php include ('include/header.php');?>
</head>




<style>
div.job-gallery {
  height: 320px;
  margin: 20px;
  border: 2px solid #777;
  float: left;
  width: 300px;
  margin-left: 10px;
  background-color: #f1f1f1;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
}

div.job-gallery:hover {
  border: 2px solid #03c4eb;
}

div.job-gallery img {
  width: 100%;
  height:160px;
}

div.desc {
    color: #111;
    height:120px;
  padding: 25px;
    font-weight: 100px;
  text-align: center;
    font-size: 17px;
}
    
div.desc:hover {
  color:  #03c4eb;
}
  
    
    /* Float four columns side by side */
.column {
  float: left;
  width: 30%;
  padding: 0 10px;
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

button{
background: #03C4EB;
border: 0;
padding: 10px 24px;
color: #fff;
transition: 0.4s;
}


</style>


<body>
<br><button onclick="goBack()">&lang; &nbsp;Go Back</button>
<!-- ======= About Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">LEADERSHIP COMPETENCIES</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Leadership competencies translate the behaviors and attitudes of successful leaders into defined, measurable traits that drive performance and results. </p>
              <center>
                  <a href="#comp2">
                       <div class="img-card" style="width:800px; background-color:#f4f4f4;height:auto;border:1px
                        solid #d6d6d6; box-shadow: 0 4px 8px 0 rgba(21, 21, 21, 0.8);padding:20px;">
                           <img src="assets/img/leader2.jfif" alt="" style="width:500px;"></div>
                  </a></center>
          </div>
        </div>
      </div>
 <section id=comp2>     
<h2 class="section-title"><br> Leadership Competencies</h2>
        
          
<div class="container about-container wow fadeInUp">
<div class="row">     
<div class="col-md-12 about-content" >
<p class="about-text" >
             
<li style="margin-left:400px;"> Acting with hEmpathy and Compassion</li>
<li style="margin-left:400px;"> Embracing Diversity</li>
<li style="margin-left:400px;">Ensuring Accountability</li>
<li style="margin-left:400px;">Exemplifying Integrity</li>
<li style="margin-left:400px;">Fostering Learning and Development</li>
<li style="margin-left:400px;">Inspiring Others</li>
<li style="margin-left:400px;"> Leading Change</li>
<li style="margin-left:400px;"> Nurturing Innovation</li>
 </div>   
    
    
</div>
                 
           
</div> 
        </section>
</section><!-- End About Section -->
  
    
    
    

      <div class="row">
    <div class="job-gallery" style="width:260px; margin-left:120px; " >
  <a target="_self" href="comp6.php">
    <img src="./assets/img/ed.png" alt="desc" >
 
    <div class="desc"><u>EMBRACING DIVERSITY </u><br><br> <p>Learn More.</p></div>

        </a></div>

<div class="job-gallery" style="width:260px;" >
  <a target="_self" href="comp6.php">
    <img src="./assets/img/io.jfif" alt="desc" >
    
    <div class="desc"><u>INSPIRING OTHERS</u><br><br><br> <p>Learn More...</p></div>

    </a></div>

<div class="job-gallery" style="width:260px;"  >
  <a target="_self" href="comp6.php">
    <img src="./assets/img/lc.jfif" alt="desc" >
 
    <div class="desc"><u> LEADING CHANGE</u><br><br><br> <p>Learn More...</p></div>

       </a></div>
      
<div class="job-gallery" style="width:260px;" >
  <a target="_self" href="comp6.php">
    <img src="./assets/img/na.jfif" alt="desc" >
 
    <div class="desc"><u> NURTURING INNOVATION</u><br><br><p>Learn More...</p></div>
 </a></div>
</div><br><br><br><br>

<script>
function goBack() {
window.history.back();
}
</script>
    
    <?php include('include/footer.php');?>