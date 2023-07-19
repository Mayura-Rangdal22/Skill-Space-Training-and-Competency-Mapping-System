
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
include 'conn.php';
$sql="Select name, empid from employee UNION SELECT name,id from trainee ;";
            $statement = $conn->prepare($sql);  
            $statement->execute();  
            $emps = $statement->fetchAll();
?>


<!-- ======= TNI Section ======= -->
<section id="contact">
  <div class="container wow fadeInUp">
      <div class="cardblock" style="background-color: #fff;"><br>
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Training Need Identification</h3>
        <div class="section-title-divider"></div><br>
        
      </div>
    </div>

    <center>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action=" " method="post" enctype="multipart/form-data" role="form" class="php-email-form">
           <div class="floating-form">


                <div class="floating-label">      
                <select class="floating-select" name="trainee_id"  placeholder="Select role">
                  <?php foreach ($emps as $exp) : ?>

                        <option value="<?= $exp['empid']  ?>"> <?php echo "$exp[empid] --$exp[name]" ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <span class="highlight"></span><br>
              <label>Select Trainee :
              </label>      
               </div>

 
               <div class="floating-label">      
              <span class="highlight"></span><br>
              <label style="color:#03c4eb;">Trainings  :</label><br>
                   
               <div class="assign" style="text-align:left;margin:10px;">
            
               <?php 
        
    $sql="Select * from training_code ;";
    $statement = $conn->prepare($sql);  
    $statement->execute();  
    $codes = $statement->fetchAll();

    foreach($codes as $dept){

        $dept_name=$dept["train_name"];
        $dept_id=$dept["train_id"];
        echo "<input type='checkbox' name='trainings[]'  value='$dept_id'>    $dept_name<br>";

    }

    ?></div>
    
<br><br>
            <div class="text-center"><button type="submit" name="add">Add TNI</button></div><br>
          </div>

        </form>
      </div>
    </div>
          
</div>
</div>
    


</section><!-- End of TNI Section -->

<?php
    
    include 'include/helper.php';
    if (isset($_POST['add'])) {

    
      $trainee_id =$_POST["trainee_id"];


        
    $trainings=$_POST['trainings'];  
    $chk=" ";  
    foreach($trainings as $chk1)  
    {  
      $chk .= $chk1.",";  
    }  

        $sql="INSERT Into tni(trainee_id) values('$trainee_id')";
        $isSuccess=$conn->exec($sql);
        if($isSuccess) {
            
            $query=" ";

            
            foreach($trainings as $chk1)  
            {  
                $sub_query="insert into indi_tni(trainee_id,trainee_prog) values('$trainee_id','$chk1');";

                $query.=$sub_query;

            }
            $isSuccess=$conn->exec($query);

            echo function_alert("SUCCESSFULLY ADDED TRAINING PROGRAM TO A TRAINEE ");

        } else {
            echo function_alert("FAILED ADDING TRAININGS , TRY AGAIN");
        }
    

}

    ?>

</center>


