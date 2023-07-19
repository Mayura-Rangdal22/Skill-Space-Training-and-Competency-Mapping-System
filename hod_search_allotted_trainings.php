<?php
 
                    
 session_start();
$id=$_SESSION['id'];
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';


 

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT employee.name as 'Employee as Trainer',trainings.title as 'Title of Training',
  training_code.train_name,trainings.date,trainings.duration, trainings.time
            from trainings,training_code,indi_training,employee where trainings.empid=indi_training.emp_id
            and indi_training.train_id=training_code.train_id and indi_training.emp_id=employee.empid
            and employee.name LIKE '%".$search."%' 
       OR trainings.empid=indi_training.emp_id and indi_training.train_id=training_code.train_id 
          and indi_training.emp_id=employee.empid 
          and trainings.date LIKE '%".$search."%'
      OR trainings.empid=indi_training.emp_id and indi_training.train_id=training_code.train_id 
          and indi_training.emp_id=employee.empid 
          and trainings.title LIKE '%".$search."%'
     OR trainings.empid=indi_training.emp_id and indi_training.train_id=training_code.train_id 
          and indi_training.emp_id=employee.empid 
          and training_code.train_name LIKE '%".$search."%'
    
  
 ";
}
else
{
    

            
            
 $query = "
  SELECT employee.name as 'Employee as Trainer',trainings.title as 'Title of Training',
  training_code.train_name,trainings.date,trainings.duration, trainings.time
            from trainings,training_code,indi_training,employee where trainings.empid=indi_training.emp_id
            and indi_training.train_id=training_code.train_id and indi_training.emp_id=employee.empid 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    <th>Employee as Trainer</th>
     <th>Title</th>
     <th>Training Allotted</th>
     <th>Date</th>
     <th>Duration of Training</th>
     <th>Time</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
//     print_r($row);
  $output .= '
   <tr>
   
    <td>'.$row["Employee as Trainer"].'</td>
    <td>'.$row["Title of Training"].'</td>
    <td>'.$row["train_name"].'</td>
    <td>'.$row["date"].'</td>
    <td>'.$row["duration"].'</td>
    <td>'.$row["time"].'</td>
    
 
</tr> 

  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}


?>