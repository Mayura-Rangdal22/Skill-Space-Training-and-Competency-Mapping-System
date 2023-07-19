 <head>
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
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

<link href="style2.css" rel="stylesheet">

</head>

<?php  
 $connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");  
  
 ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Employees as Trainee', 'Count of total trainings'],
          <?php 
            $query = "SELECT trainee.name as name, COUNT(*) as count
            FROM indi_tni,trainee
            where indi_tni.trainee_id=trainee.id
            GROUP BY indi_tni.trainee_id
            HAVING COUNT(*) > 1
            UNION
            SELECT employee.name as name,count(*) as count from indi_tni,employee
            WHERE indi_tni.trainee_id=employee.empid
            group by indi_tni.trainee_id
            HAVING count(*)>1";  
            $result = mysqli_query($connect, $query);
//            var_dump($result);
            while($data=mysqli_fetch_array($result)){
                 
                               echo "['".$data["name"]."', ".$data["count"]."],";  
                          }
            
            ?>
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
        
          legend: { position: 'none' },
          chart: {  },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
      <h3 class="section-title"> <br>Employee wise Training Report <br> 
                    </h3>  
               <div class="section-title-divider"></div>
                   <p class="section-description" style="font-size: x-large;"> Diagramatical representation in the form of Bar-Chart </p>
                 <p style="text-align:center;color:#111;font-size:20px">Annual Report </p>
    <div id="top_x_div" style="width: 900px; height: 300px;"></div>
  </body>
</html>
