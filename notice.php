<html>
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

 <!-- Twitter Cards integration: https://dev.twitter.com/cards/ -->
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

<style>
html{
   min-height: 100%;
   background-image: url(./assets/img/notice_background.png);
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center center;
   background-attachment: fixed;
}
    
 .notice-card .head-block{
    top: 40px;
    text-align: center;
    margin-left: 25%;
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgb(245 229 229 / 49%);
    color: #171414;
    width: 500px;
    position: absolute;
    font-size: 26px;
    height: 40px;
     align-content: center;
}  
    /* Create four equal columns that floats next to each other */
.notice-card .column {
  float: left;
  width: 70%;
  padding: 10px;
  margin: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .notice-card .column  {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .notice-card .column  {
    width: 50%;
  }
}
    .info {
  background-color: #e7f3fe;
  border-left: 8px solid #9fa579;     
  height:auto;
  padding: 8px 16px;
    margin: 17px;
}

    .notice-card{
        background-image: url('assets/img/notice_background.png');
        background-size: cover;
   background-repeat: no-repeat;
   background-position: center center;
   background-attachment: fixed;
/*        background-color: aliceblue;*/
        min-height: 80%;
/*        background-color: aquamarine;*/
        
    }   
</style>  
    </head>  
    
    
<body>  
    
   
   <div class="notice-card"> 
        <div class="head-block">
    <h1><b>View Notices</b></h1>   
  </div><br><br><br><br><br><br><br><br>
   

    
    
    <?php
       include "conn.php";
       $sql = "SELECT title,message FROM notices order by time desc";
       $statement = $conn->prepare($sql);  
       $statement->execute();  
       $notice = $statement->fetchall();
//       var_export($notice);

    
                    foreach($notice as $class) {  
//                        var_export($notice);
                        
               echo"<div class='row' style='margin-left:200px; height:auto; max-height:600px;'> ";                                 
               echo "<div class='column' style='background-color:#262424;'>" ;
               echo "<div class='info' >";
               echo '<h2 style="color:#111;text-align:center;"><strong>';
               echo $class['title'];
               echo "</h2></strong>";
               echo '<p style="color:#111">';
               echo $class['message'];
               echo "</p>";

       
                echo "</div>";
                echo "</div>";
                echo "</div>";
               
         }
        ?>
    </div>

