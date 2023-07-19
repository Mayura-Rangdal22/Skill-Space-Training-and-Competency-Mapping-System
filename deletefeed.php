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
    
                $sql = "DELETE  FROM testimonials WHERE id='$id'";
                $isRemoved= $conn->prepare($sql);  
                $isRemoved->execute();  
                if ($isRemoved) {
                    function_alert("Testimonial deleted successfully");
                    header('Location: update_testimonial.php');
                    exit();
                } else {
                    function_alert("Could not delete Testimonial , try again ");
                }

                
            
}            
        
?>