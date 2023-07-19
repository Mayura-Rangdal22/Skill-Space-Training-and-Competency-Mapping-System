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
       


      <button class="dropdown-btn">Create 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="hr_trainee_profile.php" target="frame2">Trainee Profile</a>
      
       <a href="hr_profile.php" target="frame2">HR Profile</a>
      
      <a href="hr_hod_profile.php" target="frame2">HOD Profile</a>

    <a href="hr_staff_profile.php" target="frame2">Employee Profile</a>
      
     
  </div>


       <button class="dropdown-btn">Scheduling Calendar
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="calendar/index.php" target="frame2">Scheduling Calendar</a>
    <a href="add_event.php" target="frame2">Add Event</a>

    
  </div>
         
      
        <button class="dropdown-btn"> Notice Board
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add_notice.php" target="frame2">Add Notice</a>
      <a href="notice.php" target="frame2">Notice Board</a>


  </div>
       
       
       <button class="dropdown-btn">Master Data 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="employee_master.php" target="frame2">Employee Master</a>

    <a href="trainee_master.php" target="frame2">Trainee Master</a>
      <a href="training_master.php" target="frame2">Training Master</a>
  </div>
       

       
       
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
    







