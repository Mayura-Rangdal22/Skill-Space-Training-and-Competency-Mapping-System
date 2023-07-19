<?php
include 'conn.php';
 session_start();
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';
$id=$_SESSION['id'];
   
 $sql="Select dept_id from emp_dept where emp_id='$id' ;";
            $statement = $conn->prepare($sql);  
            $statement->execute();  
            $dept = $statement->fetchAll();

            $count_array=count($dept);
            $string="";
            for($i = 0; $i < $count_array; $i++) {
                if($i==$count_array-1){
                    $string=$string."'".$dept[$i]['dept_id']."'";
                    break;
                    
                }
                $string=$string."'".$dept[$i]['dept_id']."'".",";
                
            }
 

if(isset($_POST["query"]))
{
     $sql="Select dept_id from emp_dept where emp_id='$id' ;";
            $statement = $conn->prepare($sql);  
            $statement->execute();  
            $dept = $statement->fetchAll();

            $count_array=count($dept);
            $string="";
            for($i = 0; $i < $count_array; $i++) {
                if($i==$count_array-1){
                    $string=$string."'".$dept[$i]['dept_id']."'";
                    break;
                    
                }
                $string=$string."'".$dept[$i]['dept_id']."'".",";
                
            }
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT trainee.photo,trainee.id,trainee.name,trainee.email,
            trainee.date,GROUP_CONCAT(department.dept_name) as Departments,
            trainee.contact   FROM trainee ,department,trainee_dept
  WHERE  trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and trainee.name LIKE '%".$search."%' and trainee_dept.dept_id in (select dept_id from department where dept_id in ($string)) OR
           
 trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and trainee.id LIKE '%".$search."%' and trainee_dept.dept_id in (select dept_id from department where dept_id in ($string)) OR
           
           trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and department.dept_name LIKE '%".$search."%'and trainee_dept.dept_id in (select dept_id from department where dept_id in ($string)) OR
           
           trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and trainee.email LIKE '%".$search."%' and trainee_dept.dept_id in (select dept_id from department where dept_id in ($string))
           
           group by id

 ";
}
else
{
    
       

            
            
 $query = "
 select trainee.photo,trainee.id,trainee.name,trainee.email,trainee.date,GROUP_CONCAT(department.dept_name) as Departments,trainee.contact from trainee,department,trainee_dept 
            where trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
            and trainee_dept.dept_id in (select dept_id from department where dept_id in ($string))
            GROUP by id;
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    <th>Photo</th>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>DOJ</th>
     <th>Departments</th>
     <th>Contact No.</th>
   
   
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
//     print_r($row);
  $output .= '
   <tr>
   <td><img style=" height:60px; width: 90px;" src="images/'.$row['photo'].' "/></td>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["date"].'</td>
    <td>'.$row["Departments"].'</td>
    <td>'.$row["contact"].'</td>
   
       
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