<head>
   <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

 
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="assets/css/style_chatbot.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<style>
img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 500px;
  width: 30px;
  height: 30px;
}
.chat_box{
  position: fixed;
  right: 20px;
  bottom: 100px;
  width: 400px;
  height: 75vh;
  background: #dedede;
  z-index: 1000%;
  transition: all 0.3s ease-out;
  transform: scaleY(0);

}
.chat_box.active{
  transform: scaleY(1);
}
.material-icons {
  vertical-align: middle;
  user-select: none;
}

.action-container {
    position: fixed;
    bottom: 10px;
    right: 20px;
    display: flex;
    cursor: pointer;
}

.child-container {
  display: flex;
  width: 0px;
  transition: 1s;
  overflow: hidden;
}

.action-btn {
  width: fit-content;
  border-radius: 50%;
  display: inline-block;
}

.action-parent {
  padding: 1em;
  background-color: white;
  color: white;
}

.action-parent:hover+.child-container {
  width: 159px;
}

.action-child {
  padding: 0.75em;
  background-color: black;
  color: white;
  height: fit-content;
  margin-top: 5px;
  margin-left: 5px;
}

.child-container:hover {
  width: 159px;
}

p{
  margin: 20px;
}

.fa .fa-close-right{
  
  float: right;

}
</style>
<!-- <script type="text/javascript" src="js/jquery-3.1.1.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>
 -->
</head>
<body>
<?php 
// include 'bot.php';
include 'include/header.php';

?>
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="assets/img/logo.png" alt="Imperial">
        </div>

        <h1>Training and Competence mapping .<br></h1>
        <h2>We help <span class="typed" data-typed-items=" to increase knowledge of employees. , to progress professionally and personally.,to improve business."></span></h2>
        <div class="actions">
          <a href="#subscribe" class="btn-get-started">Get Started</a>
          
        </div>
      </div>
    </div>
  </section><!-- End Hero -->



  <main id="main">
    

    

    <!-- ======= Subscrbe Section ======= -->
    

    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title">Subscribe For Updates</h3>
            <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="newsletter.php">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->





<!-- ======= About Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">To become a world class engineering company 
                in the Automotive and Non Automotive sector. This is to be achieved by 
                capitalizing on our superior technology base for the benefit of our 
                customers, suppliers and stakeholders is our ultimate Vision.Thriving on challenges, Amtek registered its presence across Americas, Europe 
                  & Asia to cater to a number of clients. And is poised to explore new global
                  frontiers to invent new products and to scale new heights. </p>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="assets/img/about-img.jpg" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">The Amtek Group, headquartered in India, </h2>
            <p class="about-text">
               is one of the largest integrated 
                component manufacturers in India with a strong global presence. It has also
                become one of the world's largest global forging and integrated machining companies.
                The Group has operations across Forging, Iron and Aluminium Casting, Machining 
                and Sub-Assemblies. It has world-class facilities across India, Japan,
                Thailand, Germany, Hungary, Italy, Romania, UK, Brazil, Mexico and US. 
                
            </p>
            <p class="about-text">
              The Amtek Group is comprised of corporate entities Amtek Auto, JMT Auto, 
                Amtek Global Technologies and other subsidiaries and associates. With the
                infrastructure and technology platform developed over 25 years, the Group 
                is well positioned in the Indian Auto and Non-Auto component markets.
            </p>
              <p class="about-text">
              </p>
            
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

<!-- ======= Tech Team Section ======= -->
<section id="team" align="center">
<div class="container wow fadeInUp">
<div class="row">
<div class="col-md-12">
<h3 class="section-title">Our Tech Team</h3>
<div class="section-title-divider"></div>
<p class="section-description">Team is a very essential asset of a comapny.</p>
</div>
</div>


<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-3">
<div class="member">
<div class="pic"><img src="assets/img/t1.jpeg" alt="" style="height:270;"></div>
<h4>Sara Shaikh</h4>
<span>Back-end Developer</span>
<div class="social">
<a href=""><i class="bi bi-twitter"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
</div>

 <div class="col-md-2">
</div>
<div class="col-md-3">
<div class="member">
<div class="pic"><img src="assets/img/t2.jpeg" alt="" style="height:270;"></div>
<h4>Mayura Rangdal</h4>
<span>Front-end Developer</span>
<div class="social">
<a href=""><i class="bi bi-twitter"></i></a>
<a href=""><i class="bi bi-facebook"></i></a>
<a href=""><i class="bi bi-instagram"></i></a>
<a href=""><i class="bi bi-linkedin"></i></a>
</div>
</div>
</div>

 <div class="col-md-3">
</div>

</div>
</div>
</section><!-- End Team Section -->
 
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="action-container">

  <div class="action-parent action-btn">
    
    <div class="dropup">

    <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Dropup button

    </button> -->
    <img class="sticky dropdown-toggle" src="assets/img/chatbot.png" align="right" data-toggle="dropdown">
    <div class="dropdown-menu">
      <div class="wrapper">
        <div class="title">Skill Space Chatbot <i class="fa fa-close"></i></div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
$(document).on('click.bs.dropdown.data-api', '.wrapper', function (e) {
  e.stopPropagation();
});

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    
    </script>
    </div>
  </div>

  </div>
  </div>
</main>
<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

<?php 

include 'include/footer.php';

?>