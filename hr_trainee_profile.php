    <?php

   
    $depts=['Finance','Sales','Supply Chain','Production','Machine Shop','Quality Assurance','Maintenance','Tool Room','Die-maintainance','Logistics','HR','IT',
    'Operations', 'PPC ( Product Planning control)'];
    ?>
    <meta charset="utf-8">
    <title>Create Trainee Profile</title><br><br>
    <link rel="stylesheet" href="assets/css/style_dashboard.css"> 
    <link rel="stylesheet" href="assets/css/style.css"> 
    <style type="text/css">
    * {
      box-sizing: border-box;
    }

    .row {
      display: flex;
      padding :30px;
    }

    /* Create two equal columns that sits next to each other */
    .column {
      flex: 50%;
      padding: 30px;
      /* height: 300px; Should be removed. Only for demonstration */
    }

    body
    {
    font-family: 'Open Sans', sans-serif;
    color:#333; 
    font-size:14px; 
    background-color:#dadada; 
    padding: 20px;
    margin: 40px;
    }
    </style>
    </head>
   
    <body>
 <section id="contact">
      <div class="cardblock" style="background-color: #fff;">
      <form action=" " method="post" enctype="multipart/form-data" role="form" class="php-email-form">
        <div class="form-header">
          <center><h3 class="section-title"><br>Create Trainee Profile</h3></center>
        </div>
        <div class="row">
          <div class="column">
            <div class="floating-form">
              <div class="floating-label">      
                <input class="floating-input" type="text" placeholder=" " name="name" required>
                <span class="highlight"></span>
                <label>Trainee's fullname :</label>
              </div><br>

              <div class="floating-label">      
                <input class="floating-input" type="text" placeholder=" " name="id" required>
                <span class="highlight"></span>
                <label>Trainee's ID :</label>
              </div><br>

              <div class="floating-label">      
                <input class="floating-input" type="password" placeholder=" " name="password" required>
                <span class="highlight"></span>
                <label>Trainee's password :</label>
              </div><br>

              <div class="floating-label">      
                <input class="floating-input" type="date" placeholder=" " name="doj" required>
                <span class="highlight"></span>
                <label>Trainee's Date of Joining : (DD/MM/YYYY)</label>
              </div><br>

 <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="email" required>
              <span class="highlight"></span>
              <label>Trainee's Email :</label>
            </div><br>

            <div class="floating-label">      
              <input class="floating-input" type="text" placeholder=" " name="contact" minlength="10" maxlength="10" required>
              <span class="highlight"></span>
              <label>Trainee's Mobile Number :</label>
            </div><br>


            
                
                   <div class="floating-label">
            <input class="floating-select" name="file" type="file" >
            <span class="highlight"></span><br>
                       <label>Trainee's Resume :</label><br></div>

            <div class="floating-label">
              <input class="floating-select" name="photo" type="file" >
              <span class="highlight"></span><br>
                <label>Trainee's Photo :</label><br></div>


              <div class="floating-label">      
                <input class="floating-input" type="text" placeholder=" " name="qual" required>
                <span class="highlight"></span>
                <label>Trainee's Qualification :</label>
              </div><br>
              
                
              
                 
          </div>
            </div>
            
            

          <div class="column">
<div class="floating-label">      
                <input class="floating-input" type="text" placeholder=" " name="refer" required >
                <span class="highlight"></span>
                <label>References (if any):</label>
              </div><br>
                
                 <div class="floating-label">      

      <span class="highlight"></span><br>
      <label>Trainee's Department :</label>
    </div>


    <?php 
    include 'conn.php';

    $sql="Select * from department ;";
    $statement = $conn->prepare($sql);  
    $statement->execute();  
    $depts = $statement->fetchAll();

    foreach($depts as $dept){

        $dept_name=$dept["dept_name"];
        $dept_id=$dept["dept_id"];
        echo "<input type='checkbox' name='dept[]' value='$dept_id'>$dept_name<br>";

    }

                ?>
        <br>


            </div>
          </div>
        
      <center>
        <div class="text-center"><button type="submit" name="apply">Approve a Trainee</button></div></center>
    <br>
      </div>

    </form>
     </div>
</section>
    </body>
    

      <?php
    //      include 'conn.php';
    include 'include/helper.php';
  $c=1;
  $sql="Select id from trainee;";
    $statement = $conn->prepare($sql);  
    $statement->execute();  
    $trainees = $statement->fetchAll();

      if (isset($_POST['apply'])) {
          for($i=0;$i<count($trainees);$i++){
            if($_POST['id']==$trainees[$i]['id']){
            $c+=1;
        }

    }
          
          
        // Name 
         if (!preg_match("/^[a-zA-z.\s]*$/",$_POST["name"])) {  
          echo function_alert("Only alphabets and words are allowed in name");  
          die();
        }else{
          $name =$_POST["name"];
        }


            //id validation
        if (!preg_match("/^[0-9]{5,5}$/",$_POST["id"])) {  
          echo function_alert("Trainee ID should have only 6 digits.");  
          die();
        }else{
            if($c>1){
          echo function_alert("ID ALREADY EXISTS.");
        }
          $id =$_POST["id"];
        }



        //password validation
    $pass=$_POST["password"];

      if (strlen($pass) <= '8') {
        echo function_alert("Your Password Must Contain At Least 8 Characters!");
        die();
      }
      elseif(!preg_match("#[0-9]+#",$pass)) {
        echo function_alert("Your Password Must Contain At Least 1 Number!");
        die();
      }
      elseif(!preg_match("#[A-Z]+#",$pass)) {
        echo function_alert("Your Password Must Contain At Least 1 Capital Letter!")  ;
        die();
      }
      elseif(!preg_match("#[a-z]+#",$pass)) {
        echo  function_alert("Your Password Must Contain At Least 1 Lowercase Letter!");
        die();
      }
      elseif(empty($pass)) {
        echo function_alert("Please Check You have Entered Or Confirmed Your Password!");
        die();
      }
      else {
        $password = $_POST["password"];
      }





      //Taking data into variables
      $date=$_POST['doj'];
      $qual=$_POST['qual'];
    

      //Email validation
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
          echo function_alert("Invalid email format");  
          die();
        }else{
          $email =$_POST["email"];
        }


    //contact number validation
    if (!preg_match ("/^[0-9]*$/", $_POST["contact"]) ) { 
      echo function_alert("Mobile number should contain only numbers");
      die();
    }else{
      $contact =$_POST["contact"];
     
    }


    //file or resume taking
    $file = $_FILES["file"];
    $file1 = upload_pdf($file);

    //photo 
    $photo = $_FILES['photo'];
    $file2 = upload_photo($photo);

    $refer=$_POST['refer'];

    $depts=$_POST['dept'];
    $dpt="";
    foreach($depts as $chk1)
    {
    $dpt .= $chk1.",";
    }



        $sql="INSERT Into trainee(name,id,password,date,qual,email,contact,resume,photo,reference) values('$name','$id','$password','$date','$qual','$email','$contact','$file1','$file2','$refer')";
        $isSuccess=$conn->exec($sql);
        if ($isSuccess) {
          echo function_alert("SUCCESSFULLY SENT , WE WILL REACH OUT SOON BY MAIL");
            $query=" ";

       
            foreach($depts as $chk1)  
            {  
                $sub_query="insert into trainee_dept(trainee_id,dept_id) values('.$id.','.$chk1.');";

                $query.=$sub_query;

            }
            $isSuccess=$conn->exec($query);



        } else {
          echo function_alert("CAN NOT CONTACT AT THE MOMENT , TRY AGAIN");
        }

        }
      
      ?>
    </html>