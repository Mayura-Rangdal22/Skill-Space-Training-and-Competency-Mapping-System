
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
      <script>
    function goBack() {
    window.history.back();
    }
    </script>  
    </head>
    <button onclick="goBack()">&lang; &nbsp;Go Back</button>
    <?php
    session_start();
      

    include "conn.php";
    include "include/helper.php";


    $id=$_GET['id'];
    $name=$_GET['train'];
//    $training=$_GET['train'];



    $sql="SELECT trainee.id,trainee.name,GROUP_CONCAT(department.dept_name) as departments
    from indi_tni,trainee,trainee_dept,training_code,department where 
    indi_tni.trainee_id=trainee.id and indi_tni.trainee_prog=training_code.train_id 
    and trainee.id=trainee_dept.trainee_id and trainee_dept.dept_id=department.dept_id 
    and indi_tni.trainee_prog='$id' GROUP by id";
    $statement = $conn->prepare($sql);  
    $statement->execute();  
    $info = $statement->fetchAll();
    //            print_r($info);
    if(empty($info)){
    function_alert("NO TRAINEE ARE PRESENT.");
        exit();
    }
    $count=count($info);



    

    
    ?> 
    <section id="contact">
    <body>
    <div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <br><div class="cardblock" style="background-color: #fff; padding: 30px;">
    <h3 class="section-title"> <br>MARK THE ATTENDANCE <br>OF <?php echo $name ?></h3><br>
    <div class="table-responsive">
    <table class="table">
    <tr>

    <th>Trainee ID</th>
    <th>Name of Trainee</th>
    <th>Department</th>
    <th>Attendance</th>




    </tr>
        <?php for($i=0;$i<$count;$i++){ ?>
   
    <tr>
    <form action="" method="post">

    <td><?php echo $info[$i]['id']; ?></td>


    <td><?php echo $info[$i]['name']; ?></td>


    <td><?php echo $info[$i]['departments']; ?></td>


    <td>
    <input type="radio" name="attend[<?php echo $info[$i]['id']; ?>]" value="present">P
    <input type="radio" name="attend[<?php echo $info[$i]['id']; ?>]" value="absent">A
    </td>


    <?php } ?>
    </table>

    <div class="text-center"><button type="submit" name="mark">Mark</button></div><br>
    </div>

    </div>
    <br>
    </form>
    <?php
    
    if(isset($_POST['mark'])){
        
        
    $attend = $_POST['attend'];
//    print_r($attend); 
    foreach ($attend as $atn_key => $atn_value) {
//        echo"$atn_key";
			if ($atn_value == "present") {
				$stu_query = "INSERT INTO attendence(trainee_id,training,attend,att_time) VALUES('$atn_key','$name','present',now())";
				$data_insert = $conn->exec($stu_query);
			} elseif ($atn_value == "absent") {
				$stu_query = "INSERT INTO attendence(trainee_id,training,attend,att_time) VALUES('$atn_key','$name','absent', now())";
				$data_insert = $conn->exec($stu_query);
			}
		}


    
    if ($data_insert) {
        echo function_alert("SUCCESSFULLY MARKED ATTENDENCE.");
    

    } else {
    echo function_alert("CAN NOT CONTACT AT THE MOMENT , TRY AGAIN");
    }
    
    }


    ?>
    </div>
    </body>
    </section>

    






