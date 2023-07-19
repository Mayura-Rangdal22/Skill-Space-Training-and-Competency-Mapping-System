<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <title>Skill Space</title>
 

</head>
   
    
    <style>
body {font-family: "Lato", sans-serif;}
 
.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0%;
  left: 0;
  background-color: #c4c2c2;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color:  #111 ;
  display: block;
}

.sidenav a:hover {
  color: #03C4EB;
}
    
    .sidenav a, .dropdown-btn {
  padding: 4px 5px 4px 13px;
  text-decoration: none;
  font-size: 16px;
  color: #111;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #03C4EB;
    background-color: #111;
}

  
/* Add an active class to the active dropdown button */
.active {
  background-color: #8f938f;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #8f938f;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

  @media screen and (max-height: 450px) {
  .sidenav {padding-top: 12px;}
  .sidenav a {font-size: 15px;}
}
     
  
    
   </style>

<body>

   <div class="sidenav">
    
     
  
       <a href="trainee_alloted.php" target="frame2">Training Allotted</a>
       <a href="notice.php" target="frame2">Notice Board</a>
       <a href="calendar/index.php" target="frame2">Scheduling Calendar</a>
       <a href="write_testimony.php" target="frame2">Write a testimony</a>
       <a href="submit_casestudies.php" target="frame2">Submit case studies</a>
       <a href="feedback.php" target="frame2">Give Feedback</a>
       
       
</div>
     

  
</body>
    
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
    
 </html>   
    







