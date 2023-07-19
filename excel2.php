<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';
if(isset($_POST["export_excel"]))
{
 $query = "Select trainee.photo,trainee.name,trainee.id,trainee.email,trainee.date,GROUP_CONCAT(department.dept_name) as Departments,
            trainee.contact,trainee.reference
            from trainee,department,trainee_dept
            where trainee_dept.trainee_id=trainee.id and trainee_dept.dept_id=department.dept_id
            GROUP by id";
 $result = mysqli_query($connect, $query);
//var_dump($result);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>ID</th>  
                         <th>Date of Joining</th>  
       					 <th>Department</th>
       					 
       					 
       					 
                               <th>Email</th>
                               <th>Contact No.</th>
       				
       					 <th>References</th>

                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["date"].'</td>  
       					 <td>'.$row["Departments"].'</td>  
       					

       					
                        
                          <td>'.$row["email"].'</td>  
                         <td>'.$row["contact"].'</td>  
                         <td>'.$row["reference"].'</td>  


    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download_trainee.xls');
  echo $output;
 }
}
?>