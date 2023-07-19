
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
<style type="text/css">
  body
{
  font-family: 'Open Sans', sans-serif;
   color:#333; 
   font-size:12px; 
   background-color:#dadada; 
   padding: 20px;
   margin: 10px;
 }
</style>
  </head>
 
  <?php
  session_start();
  ?> 
<section id="contact">
<body>
  <div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <br><div class="cardblock" style="background-color: #fff; padding: 30px;">
    <h3 class="section-title"> <br>TRAININGS ALLOTTED TO YOU</h3><br>
    <div class="table-responsive">
        <table class="table">
            <tr>
               
                
                <th>Training Allotted</th>
                <th>Scheduled Date</th>
              
                
                
            </tr>

            <?php 
            
            include "conn.php";
            include "include/helper.php";

//           here i get the id of hod from sessions
             $id=$_SESSION['id'];
                    
            $sql="SELECT training_code.train_name, indi_training.date from 
            tni,indi_tni,training_code,indi_training where tni.trainee_id='$id'
            and tni.trainee_id=indi_tni.trainee_id and indi_training.train_id=indi_tni.trainee_prog 
            and indi_tni.trainee_prog=training_code.train_id GROUP by train_name";
            $statement = $conn->prepare($sql);  
            $statement->execute();  
            $trains = $statement->fetchAll();
//            print_r($trains);
        
            
            if(empty($trains)){
                function_alert("CURRENTLY YOU HAVE NO TRAININGS TO ATTEND OR MAYBE TRAINING IS NOT SCHEDULED YET.");
            }
            
            //FOR DISPLAYING THE RECORDS
            
            $string="";
            
            foreach($trains as $test){
              

            
              ?>
            <tr>


           
            <td><?php echo $test['train_name']; ?></td>
            <td><?php echo $test['date']; ?></td>
           

                

            
        
           

            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<br>

      
      
      
      

