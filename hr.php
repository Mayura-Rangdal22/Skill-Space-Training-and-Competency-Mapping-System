<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <title>Skill Space</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
 <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <nav id="navbar" class="navbar">
         <ul>
            <li><a class="nav-link scrollto" href="#">View Profile</a></li>
        </ul>
          
          <ul>
            <li><a class="nav-link scrollto" href="logout_HR.php">Logout</a></li>
        </ul>
          
         

        <i class="bi bi-list mobile-nav-toggle"></i>
      
        </nav>
    </div>
  </header>
  <!-- End Header -->
<style>
body {font-family: "Lato", sans-serif;}
 
.sidenav {
  height: 90%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 10%;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color:  #ffffff ;
  display: block;
}

.sidenav a:hover {
  color: #03C4EB;
}
    
    .sidenav a, .dropdown-btn {
  padding: 4px 5px 4px 13px;
  text-decoration: none;
  font-size: 15px;
  color: #ffffff;
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
    background-color: #555755;
}

  
/* Add an active class to the active dropdown button */
.active {
  background-color: #555755;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
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
     #footer {
    position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  background: #111;
  padding: 25px 0;
  color: #fff;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #ccc;
}
  
    
   </style>

<body>



   <div class="sidenav">
       
        <button class="dropdown-btn">Manage 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Feedbacks</a>
    <a href="#">Blog Updation</a>
    <a href="#">Case Studies</a>
    <a href="#">Hiring Guides</a>
      <a href="#">Videos</a>
  </div>

      <button class="dropdown-btn">Create 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="hr_trainee_profile.php">Trainee Profile</a>
    <a href="#">Staff Profile</a>
  </div>


       <button class="dropdown-btn">Handling Training
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Training Calendar</a>
    <a href="#">Training Details</a>
    <a href="#">Mark attendance</a>
      <a href="#">Allot Staff</a>
  </div>
         
        <button class="dropdown-btn">Hire
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Job Description</a>
  </div>
   
       <a href="#">Notice Board</a>
       
       
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
    


<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Skill Space</strong>. All Rights Reserved
          </div>
          <div class="credits">
            
            Designed by Skill Space
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->






