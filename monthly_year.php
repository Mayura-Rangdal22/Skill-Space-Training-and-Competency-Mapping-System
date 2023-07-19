<html>
    <?php 
     $connect = mysqli_connect("localhost", "root", "sarasaeed", "skillspace");  
    $query = "SELECT date,DAYOFWEEK(date) as Yaxis,WEEKDAY(date) as Xaxis 
 FROM trainings where YEAR(date)=2020 and MONTH(date)=9";  
 $result = mysqli_query($connect, $query); 
?>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Week No.', 'Day of the week'],
           <?php
               while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Xaxis"]."', ".$row["Yaxis"]."],";
//                                  echo "[".$row["date"]."]";
                          }
               ?>
        ]);

        var options = {
          title: 'Week No vs. Day of the week',
          hAxis: {title: 'Week No', minValue: 0, maxValue: 5},
          vAxis: {title: 'Day of the week', minValue: 0, maxValue: 7},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
