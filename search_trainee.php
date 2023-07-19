<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT trainee.photo,trainee.name,trainee.id,trainee.email,trainee.date,
  GROUP_CONCAT(department.dept_name) as Departments, trainee.contact,trainee.reference  
  FROM trainee,department,trainee_dept 
  WHERE  trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and trainee.name LIKE '%".$search."%' OR
           
 trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and trainee.id LIKE '%".$search."%' OR
           
          trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and department.dept_name LIKE '%".$search."%' OR
           
        trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
           and trainee.email LIKE '%".$search."%' 
           
           group by id
  
 ";
}
else
{
 $query = "
  Select trainee.photo,trainee.name,trainee.id,trainee.email,trainee.date,GROUP_CONCAT(department.dept_name) as Departments,
            trainee.contact,trainee.reference
            from trainee,department,trainee_dept
            where trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
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
     <th>Action</th>
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
    
 <td><a href="delete_trainee.php?id='.$row['id']. '"><i class="material-icons" style="font-size:30px;color:#111">&#xe872;</i></a></td>
<td><a href="update_trainee.php?id='.$row['id'] .'"><i class="fa fa-edit" style="font-size:30px;color:#111;margin-left:-15px"></i></a></td>
               
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