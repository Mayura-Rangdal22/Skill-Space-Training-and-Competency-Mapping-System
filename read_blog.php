
<?php 
include("conn.php");
?>

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
<?php 

include 'include/header.php';



?>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    

</head>
  <style>   
      .flip-box {
          margin-left: 80px;
  background-color: transparent;
  width: 500px;
  height: 700px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: left;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #03C4EB;
  color: black;
}

.flip-box-back {
  background-color: #bbb;
  color: #111;
  transform: rotateY(180deg);
}
      
div.gallery {
margin-left: 20px;
margin-top: 5px;
border: 1px solid #ccc;
float: left;
width: 450px;
background-color: #ffffff;
height: 550px;
}

div.gallery:hover {
  border: 1px solid #777;
}
      
div.desc {
  padding: 15px;
  text-align: left;
    height:820px;
}

div.gallery.h4{
 border-bottom-style: 1px solid;         
      
}
   
#img {
  width: 100%;
  height: auto;
}

</style>




      
 
<body>
        <!-- ======= Blog Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
            <div class="design" >
          <div class="col-md-12">
            <h3 class="section-title">Read Blogs</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Training and Learning experiences are like journeys. The journery will start where learning is now and ends where learner is more successful. <br> The end of the trainings aren't knowing more,it's doing more...</p>
          </div>
        </div>
      </div> 
    </section><!-- End Of Blog Section -->

                 <!-- ======= FLipbox Section ======= -->
       <div class="row " >
       <div class="col-md-6">
        
        <div class="flip-box">
            <div class="flip-box-inner">
            <div class="flip-box-front" style="background-image: url(assets/img/case2.jpg); ">
      
        
                <br><h4><Strong>Name </Strong>: Rashmika Bhatt</h4><br>
                <h4><strong>E-mail </strong>: rashmika06bhatt@gmail.com</h4><br>
                <h4><strong>Title </strong>: Teamspirit Based Growing...</h4><br><br>
                <h4><strong>Photo </strong>: </h4><br>
                <div class="img">
                    <img src="assets/img/heart.JPG" alt="img" style="width:380px;height:260px;
                        margin-left: 50px; padding:10px; background-color:#ffffff; margin-top: 20px;">
                </div>
            </div>
    
            <div class="flip-box-back" style="background-image: url(assets/img/case1.jpg); ">
                    <h4><strong>Blog </strong>:</h4>
                <div class="gallery">
       
                    <div class="desc" style="font-size:13px;"> “What’s at the heart of every great team?”<br>Great teams communicate well and often. They share ideas, brainstorm, ask one another for feedback and have healthy conflicts. They may not agree on everything, but they know how to work through their differences to settle on a sound solution and continue moving forward together.Here are some of the most important ways great teams foster the kind of communication that keeps them performing at their peak:<br>
                        <li>Speak clearly- The clearer and more concise you are, the better you’ll be understood and the more quickly and efficiently things will get done.</li>
                        <li>Listen actively- Active listening is a simple skill for ensuring clear communication. </li>
                        <li>Inquire curiously. In stages of discussion when ideas are being generated and gathered, team communication should use open-ended questions to provoke inquiry and curiosity. </li>
                        <li>Share frequently- Great teams encourage collaboration and build a strong knowledge base with robust channels for sharing and information and ideas. </li>
                        <li>Collaborate effectively- Great teams work together cooperatively, not competitively, in ways that promote effective working relationships—which, in turn, leads to better team performance and overall productivity.</li>
                        <li>Connect religiously- Connection is perhaps the most crucial component in building a  productive and efficient team.</li>
                        <li>Lead from within- If you want to set your team up for success, take their communication seriously. </li></div>
        
                </div>
            </div>
            </div>
        </div>
        </div>
          
        <div class="col-md-6">
    
        <div class="flip-box">
            <div class="flip-box-inner">
            <div class="flip-box-front" style="background-image: url(assets/img/case1.jpg); ">
      
        
                <br><h4><Strong>Name </Strong>: Ananya Singhania </h4><br>
                <h4><strong>E-mail </strong>: singhaniaanaya0497@gmail.com</h4><br>
                <h4><strong>Title </strong>: Social Media Intelligence...</h4><br><br>
                <h4><strong>Photo </strong>: </h4><br>
                <div class="img">
                    <img src="assets/img/blog1.png" alt="img" style="width:380px;height:260px;
                        margin-left: 50px; padding:10px; background-color:#ffffff; margin-top: 20px;">
                </div>
            </div>
    
            <div class="flip-box-back" style="background-image: url(assets/img/case2.jpg); ">
                    <h4><strong>Blog </strong>:</h4>
                <div class="gallery">
       
                    <div class="desc" style="font-size:13px;">
                    Given the importance of social media in shaping how brands are perceived
                    and their future success, using social listening to monitor the interests
                    and opinions of consumers is a common practice. However, in our experience,
                        the insights from social media listening are often not fully utilized 
                        across the business, since they are restricted to one silo within 
                        marketing.<br> 

                    Social media intelligence and Conversational intelligence have emerged 
                        as an important category of business and marketing technology 
                        in recognition of the need to share insights, 
                        integrate data sources and apply intelligence to surface the 
                        most relevant insights. 

                 <br><u>Definition: Social media intelligence and conversational intelligence </u>

                        Approaches to leveraging the consumer insight available 
                        in social media and other sales, marketing and customer
                        service interactions to inform both real-time response
                        to conversations around brands and strategic developments 
                        to brand communications and new product development.

                        Conversational intelligence part of the trend to Conservation 
                        or Conversational Marketing identified by Gartner to support 
                        dialogue and interactions between consumers and businesses
                        throughout the customer lifecycle. Gartner explains that:

                        Conversational marketing technologies enable interactions between 
                        companies and customers that mimic human dialogue and do so at 
                        scale. They employ persistent, session-based, cross-channel 
                        exchanges in the form of natural language dialogue, using 
                        a blend of text and audio.

                    </div>
            </div>
            </div>
        </div>
        </div><br>
           </div>
          
        <div class="col-md-6">
        <br><br>
        <div class="flip-box">
            <div class="flip-box-inner">
            <div class="flip-box-front" style="background-image: url(assets/img/case1.jpg); ">
      
               <br><h4><Strong>Name </Strong>: Rajesh Gupta</h4><br>
                <h4><strong>E-mail </strong>: guptarajesh97@gmail.com</h4><br>
                <h4><strong>Title </strong>:Youth & Leadership</h4><br><br>
                <h4><strong>Photo </strong>: </h4><br>

                <div class="img">
                    <img src="assets/img/leader.JPG" alt="img" style="width:380px;height:260px; 
                        margin-left: 50px; padding:10px; background-color:#ffffff; margin-top: 20px;">
                </div>
            </div>
    
            <div class="flip-box-back" style="background-image: url(assets/img/case2.jpg); ">
                     <h4><strong>Blog </strong>:</h4>
                <div class="gallery">
       
                    <div class="desc" style="font-size:13px;">Almost all successful organizations are grounded by a skillful and talented leadership team. But how can you ensure that your team leaders are hitting their full potential? If you want to get more out of your business, you have to get more out of your team. And that means investing in your leaders. Here are some of the most important ways you can make that happen:<br>
                        <li>Start with the right people- Make sure you’re hiring and promoting the right leaders. </li>
                        <li>Embrace diversity- Embrace all types of leadership styles and diversity of background, thought and opinions. </li>
                    <li>Set smart and achievable goals- Success begins with meaningful goals. </li>
                    <li>Trust your team to be independent and accountable- Trust your leaders to handle their responsibilities in their own way—and encourage them to empower their own people with that same trust.</li>
                    <li>Invest in your team’s professional growth- Show your team how important they are to the organization by investing in leadership training and coaching.</li>
                    <li>Promote from within- Establishing a norm of promoting people from within is one of the best ways to motivate people and foster a high level of performance. </li>
                    <li>Acknowledge your best leaders- Pay attention to the leaders in your organization who are performing their best, making a difference and setting a strong example. </li>
                    <li>Lead from within- If you want the best leadership team, work on finding and cultivating the right people and giving them what they need to succeed.</li></div>
        
                </div>
            </div>
            </div>
        </div>
        </div><br>
           
         
           
           <div class="col-md-6">
        <br><br>
        <div class="flip-box">
            <div class="flip-box-inner">
            <div class="flip-box-front" style="background-image: url(assets/img/case2.jpg); ">
      
        
                <br><h4><Strong>Name </Strong>: Jasmin Khurana</h4><br>
                <h4><strong>E-mail </strong>: jasmin@gmail.com</h4><br>
                <h4><strong>Title </strong>: Don’t Let Failure Stop You from Succeeding...</h4><br><br>
                <h4><strong>Photo </strong>: </h4><br>
                <div class="img">
                    <img src="assets/img/leadership.jfif" alt="img" style="width:380px;height:260px;
                        margin-left: 50px; padding:10px; background-color:#ffffff; margin-top: 20px;">
                </div>
            </div>
    
            <div class="flip-box-back" style="background-image: url(assets/img/case1.jpg); ">
                    <h4><strong>Blog </strong>:</h4>
                <div class="gallery">
       
                    <div class="desc" style="font-size:13px;"> We have all made mistakes in life, done things we regret, or had to deal with failure at one level or another. Some consequences are harder to get through than others. The big question is: how do you come back from the aftershocks of a bad performance, decision, or mistake?

My good friend and coauthor of Helping People Win at Work, WD-40 Company CEO Garry Ridge, knows how. When he took the reins of that organization many years ago, he knew he had to create a safe culture where people knew they wouldn’t be punished or fired if they made a mistake.

“What I needed to do was to help people realize that mistakes were inevitable but not necessarily fatal,” said Garry. “To do that, I had to redefine the concept of mistakes. I needed to teach people not to be afraid to fail. I had to earn their trust by showing that neither I nor any of our managers would take adverse action if someone tried something new and didn’t succeed. At WD-40 Company, when things go wrong, we don’t call them mistakes; we call them learning moments.”

Believe it or not, lots of leaders who encourage innovation in their people feel the same way. High performing organizations like WD-40 Company treat mistakes and failures as important data, recognizing that they often can lead to breakthroughs.

My personal physician, Dr. Lee Rice of the LifeWellness Institute, has this to say about learning from failure: “I like to encourage people to dream big, envision the meaning of success in their effort, and wholeheartedly go for it. Announce the goal, put a stake in the ground, and be committed. Remove the obstacles that have been the seeds to past failures. Pave the way for success and don’t be afraid to make the critical choices and changes that will ensure success. Let go of fear.

                </div>
            </div>
            </div>
        </div>
        </div>
</div>   <br><br>
                      
         <!-- =======End FLipbox Section ======= -->
        </div>
        
        </section><br>
    <br><br><br><br>
          <?php include("include/footer.php");?>
        
    </body>
</html>