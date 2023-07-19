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
include 'include/helper.php';


 $sql="Select * from employee ;";
            $statement = $conn->prepare($sql);  
            $statement->execute();  
            $emps = $statement->fetchAll();


$sql="Select * from training_code ;";
            $statement = $conn->prepare($sql);  
            $statement->execute();  
            $codes = $statement->fetchAll();


?>
<!-- ======= Contact Section ======= -->
<section id="contact">
  <div class="container wow fadeInUp">
       <div class="cardblock" style="background-color: #fff;">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title"><br>Schedule a Training </h3>
        <div class="section-title-divider"></div><br>
        
      </div>
    </div>

    <center>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <form action=" " method="post" enctype="multipart/form-data" role="form" class="php-email-form">
           <div class="floating-form">
               
               
            <div class="floating-label">      
                <select class="floating-select" name="id"  placeholder="Select role">
                  <?php foreach ($emps as $exp) : ?>

                        <option value="<?= $exp['empid']  ?>"> <?php echo "$exp[empid] --$exp[name]" ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <span class="highlight"></span><br>
              <label>Select Employee :
              </label>      
               </div>

               
                <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="training_title" required>
              <span class="highlight"></span>
              <label>Training Title :</label>
            </div><br>
               


<div class="floating-label">      
                <select class="floating-select" name="training"  placeholder="Select role">
                  <?php foreach ($codes as $exp) : 
                    $train_id=$exp['train_id'];
                    $train_name=$exp['train_name'];
                    
                    echo "<option value='$train_id'>";                                                                                                                                                                                                                                                          
                    echo "$train_name </option>";
                 endforeach; ?>
              </select>
              <span class="highlight"></span><br>
                
              <label>Select training programme :
    </label>        </div>


               <div class="floating-label">      
              <input class="floating-input" type="date" placeholder=" " name="date" required>
              <span class="highlight"></span>
              <label>Set Training Date :</label>
            </div><br>
               
               <div class="floating-label">      
              <input class="floating-input" type="time" placeholder=" " name="duration" required>
              <span class="highlight"></span>
              <label>Duration :</label>
            </div>
            <br>

            

            <div class="floating-label">      
              <input class="floating-input" type="time" placeholder=" " name="time" required>
              <span class="highlight"></span>
              <label>Set Time :</label>
            </div>
            <br>

            <div class="text-center"><button type="submit" name="schedule">Schedule Training</button></div>
          </div>

        </form>
            <br>
      </div>
    </div>
  </center>
</div>
</div>
</section><!-- End Contact Section -->

<?php
if (isset($_POST['schedule'])) {

       
    
        $id=$_POST['id'];
//        $training = $_POST['training'];
        $title = $_POST['training_title'];
        $date = $_POST['date'];
        $time = $_POST['time'];
     $duration = $_POST['duration'];

$trainings=$_POST['training'];
//    var_dump($trainings);



    $sql="INSERT Into trainings(empid,title,date,duration,time) values('$id','$title','$date','$duration','$time');";
    $isSuccess=$conn->exec($sql);
    if ($isSuccess) {
        $sql="INSERT Into indi_training(emp_id,train_id,date) values('$id','$trainings','$date')";
        $isSuccess=$conn->exec($sql);
        echo function_alert("SUCCESSFULLY scheduled");
        
    
    } else {
      echo function_alert("CAN NOT CONTACT AT THE MOMENT , TRY AGAIN");
    }

  }


?>





