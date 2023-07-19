<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");
$output = '';


if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  Select * from training_code
  WHERE  train_name LIKE '%".$search."%' OR
   train_id LIKE '%".$search."%' ";
}
else
{
 $query = "
  Select * from training_code; 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    
     <th>ID</th>
     <th>Name</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
//     print_r($row);
  $output .= '
   <tr>
  
    <td>'.$row["train_id"].'</td>
    <td>'.$row["train_name"].'</td>
   
    
 
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