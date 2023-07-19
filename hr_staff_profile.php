<?php


$roles=['General Manager','Deputy General manager','Associate General Manager','Senior Engineer / Executive','Manager','Associate Manager','Senior Manager', 'Executive/Engineer','Assistant Engineer','Junior Engineer','Executive','GET (Graduate Engineer Trainee)','DET (Diploma Engineer Trainee)','Worker'];
$grades=['Worker','Staff','MCS'];
?>
<meta charset="utf-8">
<title>Create Employee Profile</title><br><br>
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
<section id="contact">
<div class="cardblock" style="background-color: #fff;">
<body>

  <form action=" " method="post" enctype="multipart/form-data" role="form" class="php-email-form">
    <div class="form-header">
      <center><h3 class="section-title"><br>Create Employee Profile</h3></center>
    </div>
    <div class="row">
      <div class="column">
        <div class="floating-form">
          <div class="floating-label">      
            <input class="floating-input" type="text" placeholder=" " name="name" required>
            <span class="highlight"></span>
            <label>Employee's fullname :</label>
          </div><br>

          <div class="floating-label">      
            <input class="floating-input" type="text" placeholder=" " name="empid" required>
            <span class="highlight"></span>
            <label>Employee's ID :</label>
          </div><br>

          <div class="floating-label">      
            <input class="floating-input" type="password" placeholder=" " name="password" required>
            <span class="highlight"></span>
            <label>Employee's password :</label>
          </div><br>

          <div class="floating-label">      
            <input class="floating-input" type="date" placeholder=" " name="staff_doj" required>
            <span class="highlight"></span>
            <label>Employee's Date of Joining :</label>
          </div><br>



<div class="floating-label">      
    
      <span class="highlight"></span><br>
      <label>Employee's Department :</label>
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
            
        <div class="floating-label">      
          <input class="floating-input" type="text" placeholder=" " name="qual" required>
          <span class="highlight"></span>
          <label>Employee's Qualification :</label>
        </div><br>


      <div class="floating-label">      
        <input class="floating-input" type="text" placeholder=" " name="email" required>
        <span class="highlight"></span>
        <label>Employee's Email :</label>
      </div><br>
            
            <div class="floating-label">      
      <select class="floating-select" name="grade"  placeholder="Select role">
        <?php foreach ($grades as $role) : ?>
          <option value="<?= $role ?>"> <?= $role ?>
        </option>
      <?php endforeach; ?>
    </select>
    <span class="highlight"></span><br>
    <label>Employee's Grade :</label>
  </div>
       </div>
          
          
        


      <div class="floating-label">      
        <input class="floating-input" type="text" placeholder=" " name="contact" minlength="10" maxlength="10" style="width:320px;"required>
        <span class="highlight"></span>
        <label>Employee's Mobile Number :</label>
      </div><br>




     

</div>
 <div class="column">


     
    <div class="floating-label">
      <input class="floating-select" name="photo" type="file">
      <span class="highlight"></span><br>
      <label>Employee's Photo :</label><br>
    </div>






    <div class="floating-label">      
      <select class="floating-select" name="designation"  placeholder="Select role">
        <?php foreach ($roles as $role) : ?>
          <option value="<?= $role ?>"> <?= $role ?>
        </option>
      <?php endforeach; ?>
    </select>
    <span class="highlight"></span><br>
    <label>Employee's Designation :</label>
  </div>


<div class="floating-label">      
      
      <span class="highlight"></span><br>
      <label>Trainings Undertaken :</label><br>
    <?php 
        
    $sql="Select * from training_code ;";
    $statement = $conn->prepare($sql);  
    $statement->execute();  
    $codes = $statement->fetchAll();

    foreach($codes as $dept){

        $dept_name=$dept["train_name"];
        $dept_id=$dept["train_id"];
        echo "<input type='checkbox' name='train[]' value='$dept_name'>$dept_name<br>";

    }

    ?>
    </div>


</div>
</div>

<center>
<div class="text-center"><button type="submit" name="apply">Approve an Employee</button></div><br></center>



</form>


</body>

<?php
//    include 'conn.php';
include 'include/helper.php';
    $c=1;
  $sql="Select empid from employee;";
    $statement = $conn->prepare($sql);  
    $statement->execute();  
    $empids = $statement->fetchAll();

    
if (isset($_POST['apply'])) {
    for($i=0;$i<count($empids);$i++){
        if($_POST['empid']==$empids[$i]['empid']){
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
if (!preg_match("/^[0-9]{5,5}$/",$_POST["empid"])) {  
echo function_alert("Trainee ID should have only 5 digits.");  
die();
}

else{
    if($c>1){
        echo function_alert("ID ALREADY EXISTS.");
    }
$id =$_POST["empid"];
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

$grade=$_POST['grade'];



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
  // echo function_alert($_POST['contact'].$contact);
}


//photo 
$photo = $_FILES['photo'];
$file2 = upload_photo($photo);

//    $depts=$_POST['dept']; 





 //Taking data into variables
$date=$_POST['staff_doj'];
//$dept=$_POST['dept'];


$qual=$_POST['qual'];

$designation=$_POST['designation'];

$trainings=$_POST['train'];  
$chk="";  
foreach($trainings as $chk1)  
{  
$chk .= $chk1.",";  
}  

$depts=$_POST['dept'];
$dpt="";
foreach($depts as $chk1)
{
$dpt .= $chk1.",";
}



$sql="INSERT Into employee(name,empid,password,date,qual,email,grade,contact,photo,designation,trains) 
values('$name','$id','$password','$date','$qual','$email','$grade','$contact','$file2','$designation','$chk')";
$isSuccess=$conn->exec($sql);
if ($isSuccess) {
    echo function_alert("SUCCESSFULLY SENT , WE WILL REACH OUT SOON BY MAIL");
    
    $query=" ";

   
        foreach($depts as $chk1)  
        {  
            $sub_query="insert into emp_dept(emp_id,dept_id) values('.$id.','.$chk1.');";

              $query.=$sub_query;

        }
        $isSuccess=$conn->exec($query);

    }

 else {
    echo function_alert("CAN NOT CONTACT AT THE MOMENT , TRY AGAIN");
}

}

?>


