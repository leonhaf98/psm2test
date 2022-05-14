<?php
include_once("database.php");
?>
<html>
    <head>
        <!--chart js -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    </head>
    <body>
      <?php
         $chkresults = mysqli_query($conn,"SELECT MONTH(tarikh_daftar) AS subscriber_month, COUNT(*) AS subscriber_count FROM ngo GROUP BY MONTH(tarikh_daftar)");    
      ?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['Bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['bulan 1 hingga 12','jumlah ngo'],
         <?php     
        while($row=mysqli_fetch_assoc($chkresults)){            
           echo "['".$row["subscriber_month"]."',".$row["subscriber_count"]."],";
          }
         ?>
        ]);
        var options = {
          chart: {
            title: 'Carta Graf Jumlah ngo berdaftar',          
          },
          bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 300,         
          width:1000,
          colors: ['#d95f02']
        };
        var chart = new google.charts.Bar(document.getElementById('bar-graph-location'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>     
        <!--location where bar graph will be displayed-->
        <div id="bar-graph-location">
        </div>
    </body>
</html>