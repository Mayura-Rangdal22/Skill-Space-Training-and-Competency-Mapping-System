<?php

// include_once "scripts/checklogin.php";
include "include/helper.php";
include "conn.php";

// if (!check("admin")) {
//     header('Location: logout.php');
//     exit();
// }
if (isset($_GET['id'])) {
    
    $id=$_GET['id'];
    
                $sql = "DELETE  FROM employee WHERE empid='$id'";
                $isRemoved= $conn->prepare($sql);  
                $isRemoved->execute();  
                if ($isRemoved) {
                    function_alert("Employee deleted successfully");
                    header('Location: employee_master.php');
                    exit();
                } else {
                    function_alert("Could not delete Testimonial , try again ");
                }

                
            
}            
        
?>