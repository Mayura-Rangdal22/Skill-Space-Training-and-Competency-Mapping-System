<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';
if(isset($_POST["export_excel"]))
{
 $query = "Select employee.photo,employee.qual,employee.empid,employee.name,employee.email,
            employee.date,GROUP_CONCAT(department.dept_name) as Departments,
            employee.contact,employee.designation 
            from employee,department,emp_dept
            where emp_dept.emp_id=employee.empid and emp_dept.dept_id=department.dept_id
            GROUP by empid ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Empid</th>  
                         <th>Date of Joining</th>  
       					 <th>Department</th>
       					 <th>Qualifications</th>
       					 <th>Email</th>
       					 <th>Contact No.</th>
       					
       					 <th>Designation</th>
       					 

                    </tr>  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["empid"].'</td>  
                         <td>'.$row["date"].'</td>  
       					 <td>'.$row["Departments"].'</td>  
       					 <td>'.$row["qual"].'</td>

       					 <td>'.$row["email"].'</td>  
                         <td>'.$row["contact"].'</td>  
                         
       					 <td>'.$row["designation"].'</td>  
       					
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download_employees.xls');
  echo $output;
 }
}
?>