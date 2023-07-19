<head>
    <meta charset="utf-8">
    <title>Create HR Profile</title><br><br>
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

      <?php
          
      include 'conn.php';
    include 'include/helper.php';
          $sql="Select empid,name from employee ;";
            $statement = $conn->prepare($sql);  
            $statement->execute();  
            $emps = $statement->fetchAll();
          
          
      if (isset($_GET['approve'])) {

        $id=$_GET['id'];
          $sql2="Select * from employee where empid=$id";
            $statement = $conn->prepare($sql2);  
            $statement->execute();  
            $put_into_hr = $statement->fetchAll();
          
          $name=$put_into_hr['0']['name'];
          $pass=$put_into_hr['0']['password'];
          $email=$put_into_hr['0']['email'];
          $contact=$put_into_hr['0']['contact'];
          
        
 

        $sql="INSERT into hr(id,name,password,email,contact) values('$id','$name','$pass','$email','$contact')";
        $isSuccess=$conn->exec($sql);
        if ($isSuccess) {
          echo function_alert("SUCCESSFULLY CREATED THE HR PROFILE");

        } else {
          echo function_alert("CAN NOT CONTACT AT THE MOMENT , TRY AGAIN");
        }

      }
?>
    <section id="contact">
      <div class="cardblock" style="background-color: #fff;">
    <body>

      <form action=" " method="get" enctype="multipart/form-data" role="form" class="php-email-form">
        <div class="form-header">
          <center><h3 class="section-title"><br>Create HR Profile</h3>
    
        <div class="row">
          <div class="column">
            <div class="floating-form">
           
              <div class="floating-label">      
                <select class="floating-select" name="id"  placeholder="Select role">
                  <?php foreach ($emps as $exp) : ?>
                    <option value="<?= $exp['empid'] ?>"> <?php echo"$exp[empid] - $exp[name]" ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <span class="highlight"></span><br>
              <label>Select ID to be made as HR :
    </label>        </div>
           
               <div class="text-center"><button type="submit" name="approve">Approve as HR</button></div>
<br>
</center>
