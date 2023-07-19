<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT employee.photo,employee.empid,employee.name,employee.email,
            employee.date,GROUP_CONCAT(department.dept_name) as Departments,
            employee.contact,employee.designation   FROM employee ,department,emp_dept
  WHERE  emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and employee.name LIKE '%".$search."%' OR
           
 emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and employee.empid LIKE '%".$search."%' OR
           
           emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and department.dept_name LIKE '%".$search."%' OR
           
           emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and employee.designation LIKE '%".$search."%' 
           
           group by empid
  
 ";
}
else
{
 $query = "
  Select employee.photo,employee.empid,employee.name,employee.email,
            employee.date,GROUP_CONCAT(department.dept_name) as Departments,
            employee.contact,employee.designation 
            from employee,department,emp_dept
            where emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
            GROUP by empid ; 
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
     <th>Designation</th>
     <th>Action</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
//     print_r($row);
  $output .= '
   <tr>
   <td><img style=" height:60px; width: 90px;" src="images/'.$row['photo'].' "/></td>
    <td>'.$row["empid"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["date"].'</td>
    <td>'.$row["Departments"].'</td>
    <td>'.$row["contact"].'</td>
    <td>'.$row["designation"].'</td>
 <td><a href="delete_emp.php?id='.$row['empid']. '"><i class="material-icons" style="font-size:30px;color:#111">&#xe872;</i></a></td>
<td><a href="update_emp.php?id='.$row['empid'] .'"><i class="fa fa-edit" style="font-size:30px;color:#111;margin-left:-15px"></i></a></td>
               
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