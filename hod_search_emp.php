<?php

 session_start();
 $id=$_SESSION['id'];
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';

 include 'conn.php';
     
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
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT employee.photo,employee.empid,employee.name,employee.email,
            employee.date,GROUP_CONCAT(department.dept_name) as Departments,
            employee.contact,employee.designation   FROM employee ,department,emp_dept
  WHERE  emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and employee.name LIKE '%".$search."%' and emp_dept.dept_id in (select dept_id from department where dept_id in ($string)) OR
           
 emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and employee.empid LIKE '%".$search."%' and emp_dept.dept_id in (select dept_id from department where dept_id in ($string)) OR
           
           emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and department.dept_name LIKE '%".$search."%'and emp_dept.dept_id in (select dept_id from department where dept_id in ($string)) OR
           
           emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
           and employee.designation LIKE '%".$search."%' and emp_dept.dept_id in (select dept_id from department where dept_id in ($string)) 
           
           group by empid
 ";
}
else
{
   
            
            
 $query = "  select employee.photo,employee.empid,employee.name,employee.email,employee.date,GROUP_CONCAT(department.dept_name) as Departments,employee.contact,employee.designation from employee,department,emp_dept 
            where emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
            and emp_dept.dept_id in (select dept_id from department where dept_id in ($string))
            GROUP by empid; ";
}
$result = mysqli_query($connect, $query);
//var_dump($result);
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
   
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
//     print_r($row);
      if($row['empid']==$id){
                    continue;
      }
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