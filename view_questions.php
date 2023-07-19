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

   <style>
    #questions-navbar {
  overflow: hidden;
  background-color: #03C4EB;
    width:1250px;
    margin-left: 50px;
}

#questions-navbar a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 12px 14px;
  text-decoration: none;
  font-size: 17px;
}

#questions-navbar a:hover {
  background-color: #4d4c4c;
  color: #ffffff;
}

#questions- a.active {
  background-color: #606060;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: relative;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
       
.column {
  color:#111;
  float: center;
  width: 75%;
  padding: 0 10px;
  height:inherit;
  margin-left: 140px;
}

/* Remove extra left and right margins, due to padding */
.que-row {margin: 0 -5px;}

/* Clear floats after the columns */
.que-row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: inherit;
      height: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
h5{
    text-align: left;
}
       
p{
    text-align: left;
}
ol{
        
    text-align: left;
}
li{
    text-align: left;
}
       
       
       
       
       
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #111;
  display: block;
  border:#cccccc;
  background: ;
  width: 850px;
  height: 50px;
  text-align: left;
  cursor: pointer;
  outline: none;
    margin-left: 50px;
}

/* On mouse-over */
 .dropdown-btn:hover {
  color: #03C4EB;
}




/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #cdd0d1;
  padding-left: 8px;
  width: 850px;
  height:250px;
  margin-left: 50px;
}
.dropdown-container  a {
    color: #111;
    text-decoration: none;
    /* color: #03C4EB; */
    transition: 0.5s;
}



/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
       
</style>
</head>                                                     


<!-- =======Interview Quetions Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Interview Questions</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">  </p>
              
          </div>
        </div>
      </div>
        
        
<div id="questions-navbar">
    
        <a class="active" href="#manager"> Manager</a>
        <a href="#assosciate-manager">Associate  Manager</a>
        <a href="#assistant">Assistant</a>
        <a href="#executive">Executive</a>
        <a href="#marketing">Marketing</a>
        <a href="#get">GET (Graduate Engineer Trainee)</a>
        <a href="#get">DET (Diploma Engineer Trainee)</a>
        <a href="#worker"> Worker</a>
       
</div>
       
       
       
        
        
    </section>

 <br><br>
    <section id= worker>
    <div class="que-row">
  <div class="column">
    <div class="card">
        
        <h3><b>Most Common Questions Asked For Interview</b></h3>
        <button class="dropdown-btn" >Question- Tell me about yourself!
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- I grew up in a small town in upstate New York most people have never heard of, but I know you’ll recognize it because I saw it listed as your hometown on your employee bio! What a small world. I graduated from ABC University one year ago, then moved here to be an executive assistant at XYZ Organization. It fit well with my passion for analytics and conceptualizing creative campaigns. Now, I’m looking for my next professional challenge, and believe I’ve found it at your company.</p>
    </div><br><br>
        
        <button class="dropdown-btn" >Question- Do you prefer to work on a team or independently?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
  <p>Ans(Example):- I love working on a team. When I interned with XYZ Company, there were issues with a few fellow interns not getting along. I intervened, organized a social gathering for the group, and it really helped them put their differences aside. We finished the summer on a great note and came up with the best ideas by putting our heads together. At the same time, I enjoy working independently when necessary. In school, I prided myself on never missing an essay deadline. That was because I’m able to put my head down and focus.
        </p>
    </div><br><br>
        
        
        <button class="dropdown-btn" >Question- What are your strengths?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
 <p>Ans(Example):- I believe one of my greatest strengths is time management. For example, last semester I managed to earn a 3.8 GPA while working 20 hours a week at a local coffee shop, serving as president of my fraternity, and acting as a teaching assistant for a freshman writing course. I’m also very organized and detail-oriented.
        </p>
    </div><br><br>
         
        
   
        <button class="dropdown-btn" >Question- What is your greatest weakness?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
 <p>Ans(Example):- I’m an organized person, so I have trouble with last-minute changes and ambiguity. In school, I scheduled out all my work, but in an office environment, deadlines and priorities are always shifting. So, I’m working to get more accustomed to those changes. I’m taking an online class in project management, and it’s helped me make room for changing priorities. Now, if a last-minute change crops up, I know how to reprioritize.
        </p>
    </div><br><br>
        
        
        <button class="dropdown-btn" >Question- Why do you want to work here?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
 <p>Ans(Example):- One of the main reasons I want to work here is your company’s commitment to the community. It really sets you apart from your competitors. I love that you all volunteer at the Special Olympics each spring. I’ve volunteered with the local animal shelter every week for the past four years. Being a part of a company that also values giving back to others is really important to me.
        </p>
    </div><br><br>
        
        <button class="dropdown-btn" >Question- Where do you see yourself in five years?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
 <p>Ans(Example):- In five years, I see myself here at XYZ Company, contributing to the team and adding value for the branch. I love that you offer so many opportunities for professional development, and I want to grow with the company. So, I plan to master my role as an assistant in the next few years, and hopefully become an associate after that.
        </p>
    </div><br><br>
        
       <button class="dropdown-btn" >Question- Why should we hire you?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
 <p>Ans(Example):- ABC Company is revered in the advertising world for its commitment to creativity. Since before I can remember, I’ve prided myself on being a creative person myself. In college, I was in charge of event planning for my sorority and coordinated over a dozen distinct, themed events last year. In a typical year, the sorority does five events. I’m excited to think how my creativity and ambition could enhance what’s already great here.
        </p>
    </div><br><br>      
      </div>    
    </div>
  </div>
        
</section><br> 
        <img src="assets/img/design.JPG">
        
   <section id= assosciate-manager>
    <div class="que-row">
  <div class="column">
    <div class="card">
        <h3><b>Questions Asked For Associate  Manager Interview</b></h3>
        
         <button class="dropdown-btn" >Question- Tell me about your experience in hiring new employees.
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
  <p>Ans(Example):- In my most recent role, I was in charge of hiring and interviewing new employees. I ensured that the candidates I considered were well-qualified and that they'd be able to contribute to the company's professional development. I read through several applications, chose potential candidates, conducted a few rounds of interviews and hired the individuals with the experience that best aligned with the job's responsibilities.</p>
    </div><br><br>     
        
         <button class="dropdown-btn" style="height:80px;" >Question- What was your working relationship like with the manager in your previous role? Did you work well together?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- I've worked with the current manager at my company for more than five years. Though we didn't know each other that well when I was first hired, we have built a strong, professional relationship that has helped drive momentum and achieve company-wide goals. I believe our open communication and honesty were large influences on our continued success. This is something I hope to find in every role moving forward.
        </p>
    </div><br><br>    
        
        
         <button class="dropdown-btn" style="height:80px;" >Question- How have you demonstrated decision-making in your previous role as an assistant manager?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- In one of my previous roles, the manager unexpectedly fell ill and I had to take over their tasks for the remainder of the week. This included delegating tasks and deciding how immediate customer issues would be handled. When I made these decisions, I considered various alternatives and how those decisions may play out. When handling customer issues, in particular, I considered how these issues have been handled in the past, how I could best help our customers and my available resources and limitations to help create a positive experience for them despite the situation. Ultimately, I made sure the decisions I made aligned our company standards and mission statement.
        </p>
    </div><br><br>    
        
        
         <button class="dropdown-btn" >Question- Why is the role of an associate manager important for a company?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- Associate managers have several responsibilities that are integral to a company's success and general operations. Not only do they serve as a point of communication for several company positions such as employees and customers, but they also provide assistance to senior roles and help manage an organization's day-to-day operations
        </p>
    </div><br><br>    
       
        
          
         <button class="dropdown-btn" style="height:70px;" >Question- Describe a positive contribution you made in a previous role as an<br> assistant manager.
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
  <p>Ans(Example):- In one of my previous roles, I noticed that our number of sales was down compared to previous quarters. To remedy the situation, I provided sales training opportunities to help employees develop their skills. I also self-led developmental meetings to introduce new sales techniques. Both of these helped improve our numbers in the following quarters.
        </p>
    </div><br><br>    
      </div>
    </div>
  </div>
        
</section><br>      
        <img src="assets/img/design.JPG">
        
   <section id= manager>
    <div class="que-row">
  <div class="column">
    <div class="card">
        <h3><b>Questions Asked For Manager Interview</b></h3>
        
        <button class="dropdown-btn">Question- Why are you interested in our company?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
  <p>Ans(Example):- I'm interested in your company because I've learned from the research I've done that you are an interdependent team of people who value leading by example and providing great customer service. Also, I admire your dedication to equal opportunity programs and giving back to the community. I know I would be a very great fit here.</p>
    </div><br><br>   
       
        
        <button class="dropdown-btn">Question- How would you describe your leadership style?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
<p>Ans(Example):- Based on my experiences working for the YMCA as a swim coach and working at SweetFrog as an assistant manager, I would say that my leadership style consists of leading by example and being consistently participative. That is, I help with everyday tasks in order to promote unity and productivity within the team.
        </p>
    </div><br><br> 
        
        
         <button class="dropdown-btn" style="height:80px;" >Question- Describe someone you coached or mentored. What did that process<br> look like?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
<p>Ans(Example):- Through the 'Big Brothers Big Sisters' organization, I mentored a girl in middle school for several years. Before we formed a relationship, she struggled with her grades and making time to study, but over the course of our time together, I was able to help her make better choices in her life.
        </p>
    </div><br><br> 
     
        
        <button class="dropdown-btn" style="height:70px;">Question- Talk about a successful work project involving multiple teams.<br> What was your role?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
<p>Ans(Example):- At a previous job, there was one night where the manager had to leave early for a family emergency. Since the store was new and most of us hadn't closed up alone, no one felt sure what to do. Instead of waiting for someone else to step up, I embraced the role of leader and organized the other employees into teams and then delegated the closing chores to the different groups.
        </p>
    </div><br><br> 
       
        
         
        <button class="dropdown-btn" >Question- How would you tell a team member that he/she was underperforming?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
 <p>Ans(Example):- When I worked at the YMCA, one of the swim coaches under me began to stop showing up to practices. Instead of embarrassing him in front of the team or being harsh, I quietly pulled him aside and asked him if there was any way I could help him. He opened up that he had been going through a hard time, and together, we were able to compromise and find the best solution.
        </p>
    </div><br><br> 
      </div>
    </div>
  </div>
        
</section><br>      
        <img src="assets/img/design.JPG">   
        
     <section id= assistant>
    <div class="que-row">
  <div class="column">
    <div class="card">
        <h3><b>Questions Asked For Assistant Interview</b></h3>
          
        <button class="dropdown-btn" >Question- Tell me about your experience in hiring new employees.
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
  <p>Ans(Example):- In my most recent role, I was in charge of hiring and interviewing new employees. I ensured that the candidates I considered were well-qualified and that they'd be able to contribute to the company's professional development. I read through several applications, chose potential candidates, conducted a few rounds of interviews and hired the individuals with the experience that best aligned with the job's responsibilities.</p>
    </div><br><br> 
        
         <button class="dropdown-btn" style="height:80px;" >Question- What was your working relationship like with the manager in your<br> previous role? Did you work well together?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- I've worked with the current manager at my company for more than five years. Though we didn't know each other that well when I was first hired, we have built a strong, professional relationship that has helped drive momentum and achieve company-wide goals. I believe our open communication and honesty were large influences on our continued success. This is something I hope to find in every role moving forward.
        </p>
        
    </div><br><br> 
        
     
        <button class="dropdown-btn" style="height:80px;" >Question- How have you demonstrated decision-making in your previous role as an assistant manager?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
  <p>Ans(Example):- In one of my previous roles, the manager unexpectedly fell ill and I had to take over their tasks for the remainder of the week. This included delegating tasks and deciding how immediate customer issues would be handled. When I made these decisions, I considered various alternatives and how those decisions may play out. When handling customer issues, in particular, I considered how these issues have been handled in the past, how I could best help our customers and my available resources and limitations to help create a positive experience for them despite the situation. Ultimately, I made sure the decisions I made aligned our company standards and mission statement.
        </p>
        
    </div><br><br> 
        
       
         
        <button class="dropdown-btn"  >Question- Why is the role of an assistant manager important for a company?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- Assistant managers have several responsibilities that are integral to a company's success and general operations. Not only do they serve as a point of communication for several company positions such as employees and customers, but they also provide assistance to senior roles and help manage an organization's day-to-day operations.
        </p>
        
    </div><br><br> 
        
        
         <button class="dropdown-btn" style="height:80px;"  >Question- Describe a positive contribution you made in a previous role as an assistant manager.
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
  <p>Ans(Example):- In one of my previous roles, I noticed that our number of sales was down compared to previous quarters. To remedy the situation, I provided sales training opportunities to help employees develop their skills. I also self-led developmental meetings to introduce new sales techniques. Both of these helped improve our numbers in the following quarters.
        </p>    
    </div><br><br> 
      </div>  
    </div>
  </div>
        
</section><br>  

    
        <img src="assets/img/design.JPG">   
        
     <section id= executive>
    <div class="que-row">
  <div class="column">
    <div class="card">
        <h3><b>Questions Asked For Executive Interview</b></h3>
        
         <button class="dropdown-btn"  >Question- Who do you look up to for inspiration or mentorship?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- As a leader, it is important to maintain connections with role models and mentors. Regardless of a leader’s success, these     are the individuals they go to when they need advice themselves.
          Perhaps this question can encourage you to find mentors in your profession who have overcome trials you are currently facing. By learning from their experience, you can avoid potential pitfalls along the way.
          The leader’s answer may even be surprising. You may follow the same role models. This can be a point of connection to start a rewarding, lasting relationship.
</p>  
    </div><br><br> 
        
        
        <button class="dropdown-btn"  >Question- What is one decision you wish you didn’t make?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- Part of growth is learning from other people’s mistakes. Even if you have done a SWOT analysis, there is always more to learn about your own abilities. You can save yourself time and resources by speaking with leaders who have made mistakes while encountering situations similar to your experience. It may also be helpful to inquire about the thought processes and the actions that led to said mistakes. This will allow you to learn from the wisdom of those who have experienced failures.
        </p>
    </div><br><br>
        
        
          
        <button class="dropdown-btn"  >Question- How do you keep your team motivated despite conflicts and obstacles? 
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>How to Ans(Example):- This is one of the most insightful questions to ask senior leaders because it involves their vision and how they   help their organization achieve its goals. Good leaders know that people need more than financial incentives to commit to long-term         goals.Regardless of your industry, this question can reveal actionable strategies that will motivate employees or fellow team members       to work toward the same vision. It takes more than astute leadership to do this, it involves providing a source of motivation, which        your leaders are more than likely experienced in. Speaking about the right motivation for teams can help you learn how to approach      this with your team’s specific needs.

        </p>
    </div><br><br>
         
        
          
        <button class="dropdown-btn"  >Question- What are the most important attributes of successful leaders today? 
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- Some people are natural leaders. They can bring people together behind their ideas and manage them to achieve a common goal. If you don’t have this natural trait, you can still become an exceptional leader by studying the habits of successful leaders in your industry.
            This question can demonstrate the power of communication skills, empathy, vision, strategic thinking and other desirable qualities in a leader. It can also show you the best combination of traits to enhance your leadership style and deliver top quality guidance for your team or organization.

        </p>
    </div><br><br>
        
       
          <button class="dropdown-btn"  >Question-  How do you generate great ideas in your organization?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Example):- Different organizations use a broad range of idea generation techniques. Some companies have an organizational culture that encourages dialogue, sharing of information and feedback. Others have a procedure for stimulating and documenting new ways of solving problems and reward systems to encourage creativity.
            By asking this question, you can discover enhanced methods to make your employees or team members better idea-generators. A great idea can come from the lowest ranking employee or a senior executive. Making sure everyone has access to things that help optimize different ideas makes way for growth in your organization. What’s more, this question can reveal weaknesses in your employee feedback policy and how to make this more effective.
        </p>  
    </div><br><br>
        
        
       
          <button class="dropdown-btn"  >Question- What sort of person would be successful in this role?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
     <p>Ans(Why it is asked):- In an interview, you’re probably already wondering whether you’re the type of person the company is looking for.      Asking this question allows you to know for sure (and it sure sounds a lot more diplomatic than “Do you want to hire me?”). Plus, it    provides you with more information than what’s in the job description alone.
        </p>   
    </div><br><br>
        
        
      
          <button class="dropdown-btn"  >Question-  What brought you to this company/role? What keeps you here?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Why it is asked):- When a company is truly a great place to work, the person you’re interviewing shouldn’t have any trouble answering this question. Their answer “gives you so much insight into the culture, organization and your future leader. 

        </p>  
    </div><br><br>
      
        
    
        <button class="dropdown-btn"  >Question-  What does a typical day look like?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Example):- Of course, every job will probably require a few tasks you aren’t crazy about, but if those don’t make up the bulk of the daily work and are balanced with responsibilities you do like, then you have good reason to believe you’d enjoy the work overall
        </p>  
    </div><br><br>
        
    
        
        <button class="dropdown-btn"  >Question- What are some of the biggest challenges within the department currently?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(How you can tackle this question ):- Once the interviewer has outlined current challenges, the candidate has the perfect opportunity to discuss why and how their background and accomplishments/experiences can be put to immediate use in dealing with those challenges.
        </p> 
          
    </div><br><br>
         
        
        
        <button class="dropdown-btn"  >Question- How would I be evaluated in this role?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Expectations ):- Don’t just look for a job you can do — you should look for one you can do well. This question “tells you how success is measured and what the expectations for success are in this role,” so you can determine exactly what would be expected of you and whether or not you can meet it. Beware the companies with outrageous expectations, or those that can’t even articulate how to define success.
            When you get a clear idea of what the objectives and key accomplishments for the role are, you can not only make sure they’re realistic — you can also keep them in mind from day one should you accept the role, which will help you hit the ground running and find success quickly. Can you say performance bonus?
        </p> 
          
    </div><br><br>
         
        
         
        <button class="dropdown-btn" style="height:90px;">Question- Tell me about a time when a project or assignment didn’t go as planned. <br>How would you approach the situation differently in the future?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example):- Last semester we had a group project that took approximately six weeks. Around week four, we realized that one of the group members was not pulling his weight. The work he agreed to do was not getting done. I took charge of the situation and scheduled a group meeting to discuss the issue. Ultimately, that person dropped the course, but by addressing the problem head-on, the group was able to divide up our work and complete the project on-time. In the future, I would make sure that the group has weekly meetings to assess our progress. That would make sure the project was on-track and that the work was getting done.
        </p>      
    </div><br><br>
       
        
        <button class="dropdown-btn" >Question-What do you enjoy most and least about engineering?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example ):- I really love the design work in engineering, the face-to-face interaction with clients, and the opportunity to see projects come to life. But if I had to pick one thing that I don’t enjoy as much, I would have to say it’s contract preparation.

        </p>    
    </div><br><br>
        
        
         
        <button class="dropdown-btn" >Question-Where do you see yourself five years from now?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Example ):- I would like to start out in this role as a junior engineer and master the technical skills necessary to move onto a more senior position. From there, I’d like to assist in major projects and hopefully eventually take on a leadership role in the company
        </p> 
          
    </div><br><br>
       
       
        <button class="dropdown-btn" style="height:90px;" >Question-Tell me about a time when you became aware of a hazardous workplace condition. How did you handle it?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Example ):- I once saw a colleague laying an extension cord in the office. It crossed a high-traffic hallway and posed a trip hazard. I think it’s always best to confront the person directly as opposed to escalating it to their manager, so I approached the person and said that I thought the cord was unsafe. They agreed, and I helped them secure it so it was no longer a hazard.


        </p> 
    </div><br><br>
       
        
         <button class="dropdown-btn"  >Question-How do you keep yourself organized?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Example ):- I’m a very punctual and organized person. When I was in school, I also worked part-time and staying organized was critical to make sure I did well at school and met the commitments of my job. I like to use Excel to create project schedules, and my phone calendar keeps me on track.
        </p> 
    </div><br><br>
      </div>  
    </div>
  </div>
        
</section><br>  
        
        
       <img src="assets/img/design.JPG">    
        <section id= marketing>
    <div class="que-row">
  <div class="column">
    <div class="card">
        <h3><b>Questions Asked For Marketing Interview</b></h3>
        <button class="dropdown-btn"  >Question-Name 5 essential elements of a marketing campaign.
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Example):-The five essential elements of a successful marketing campaign are: <br></p>
          <li>Target,Value proposition, Call-to-action message, Delivery method, Follow-up</li><br>
        
        <p>Here, you can talk about the marketing campaigns that you have directly managed and individually define the strategies you have used for these five marketing campaign elements.</p>
    </div><br><br>
        
       
         <button class="dropdown-btn"  >Question-What are the marketing channels that you have experience working in?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Expectation):- This question is to test your knowledge of the marketing channels that you have worked with. So, do not just mention the channels but describe how you used them to deliver successful marketing campaigns. 
            For example, if you have hands-on experience of using email marketing channels, you can talk about how you finalized the target audience, designed the template, planned the offer, drafted the communication message, etc. Also, talk about the open rates, CTRs, that you managed to achieve. 

        </p>
    </div><br><br>
        
        
        
         <button class="dropdown-btn" style="height:90px;"  >Question- Are you familiar with any analytics platform? What are the platforms that you used in your previous job?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
    <p>Ans(Expectation):- Mention the platforms that you have worked with and how it has helped in your marketing plans.<br> 
            For instance, you can talk about how you use Google Analytics to track and monitor your website’s traffic

        </p>
    </div><br><br>
        
        
        
         <button class="dropdown-btn" style="height:80px;"  >Question- Can you give us a customer trend that is happening in our industry right now?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
   <p>Ans(Expectation):- This shows how prepared you are for the interview. Before going for the interview, go through the industry news and understand what are the current trends and customer insights.
        </p>
    </div><br><br>
        
        
      
      <button class="dropdown-btn"  >Question- What can be the best approach to increase website traffic?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
      <p>Ans(Example):- We can achieve this in various ways –<br></p>
        <ol>1.Ensuring good user experience</ol>
            <ol>2. Building referral traffic</ol>
            <ol>3. Performing on-page SEO</ol>
            <ol>4. Targeting long-tail keywords</ol>
            <ol>5. Using landing pages</ol>
     
    </div><br><br>
      </div>  
    </div>
  </div>
        
</section><br>  

        
         
       <img src="assets/img/design.JPG">    
        <section id= get>
    <div class="que-row">
  <div class="column">
    <div class="card">
        <h3><b>Questions Asked For GET(Graduate Engineer Trainee) OR </b></h3>
        <h3><b> DET(Diploma Engineer Trainee) Interview</b></h3>
        
        <button class="dropdown-btn" style="height:90px;" >Question- Describe a time when you encountered difficulty and required assistance?<br> What did you learn from it?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
       <p>Ans(Example):-Whatever example you use for this question, ensure that you place emphasis on how you overcame it. Whether it’s related to technical ability in a project, or a personal competency you had to improve, let them know you recognised the issue and overcame it by asking for help.
        
    </p>
    </div><br><br>
        
        
         <button class="dropdown-btn" style="height:70px;" >Question- What are the marketing channels that you have experience working in?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
       <p>Ans(Expectation):- This question is to test your knowledge of the marketing channels that you have worked with. So, do not just mention the channels but describe how you used them to deliver successful marketing campaigns. 
            For example, if you have hands-on experience of using email marketing channels, you can talk about how you finalized the target audience, designed the template, planned the offer, drafted the communication message, etc. Also, talk about the open rates, CTRs, that you managed to achieve. 

        </p>
        
    </div><br><br>
        
         <button class="dropdown-btn" style="height:80px;" >Question- Are you familiar with any analytics platform? What are the platforms that you used in your previous job?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
       <p>Ans(Expectation):- Mention the platforms that you have worked with and how it has helped in your marketing plans.<br> 
            For instance, you can talk about how you use Google Analytics to track and monitor your website’s traffic

        </p>
        
        
    </div><br><br>
        
     
        
         <button class="dropdown-btn"  >Question- Can you give us a customer trend that is happening in our industry right now?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
       <p>Ans(Expectation):- This shows how prepared you are for the interview. Before going for the interview, go through the industry news and understand what are the current trends and customer insights.
        </p>
        
        
    </div><br><br>
       
         <button class="dropdown-btn"  >Question- What can be the best approach to increase website traffic?
           <i class="bi bi-chevron-down" style="
    float: right;
"></i></button>
  <div class="dropdown-container">
      <p>Ans(Example):- We can achieve this in various ways –<br></p>
        <ol>1.Ensuring good user experience</ol>
            <ol>2. Building referral traffic</ol>
            <ol>3. Performing on-page SEO</ol>
            <ol>4. Targeting long-tail keywords</ol>
            <ol>5. Using landing pages</ol>
     
        
        
    </div><br><br>
        
      </div>  
    </div>
  </div>
        
</section><br><br><br> 



      


<!-- End Interview Questions Section -->




<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("questions-navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


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

<?php include ('include/footer.php');?>

