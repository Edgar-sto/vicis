<?php
 $con = mysqli_connect('10.9.2.21','root','c4dbury$$','telefonia');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['class Name','Students'],
 <?php 
			$query = "SELECT count(c_dialstatus),c_dialstatus  from reporte_36 where c_dialstatus='CONGESTION'AND u_start_time>='2019-01-30 00:00:00' and u_start_time<='2019-01-30 23:59:59'
       union 
      SELECT count(c_dialstatus),c_dialstatus  from reporte_28 where c_dialstatus='BUSY' AND u_start_time>='2019-01-30 00:00:00' and u_start_time<='2019-01-30 23:59:59' 
      UNION 
      SELECT count(c_dialstatus),c_dialstatus  from reporte_28 where c_dialstatus='ANSWER' AND u_start_time>='2019-01-30 00:00:00' and u_start_time<='2019-01-30 23:59:59' 
      UNION 
      SELECT count(c_dialstatus),c_dialstatus  from reporte_28 where c_dialstatus='CANCEL' AND u_start_time>='2019-01-30 00:00:00' and u_start_time<='2019-01-30 23:59:59'
       UNION
      SELECT count(c_dialstatus),c_dialstatus  from reporte_28 where c_dialstatus='CHANUNAVAIL' AND u_start_time>='2019-01-30 00:00:00' and u_start_time<='2019-01-30 23:59:59'";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['c_dialstatus']."',".$row['count(c_dialstatus)']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Number of Students according to their class',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          
          is3D: true,
 };



 
 }
    </script>

</head>
<body>
 <div class="container-fluid">
<center> <div id="columnchart12" style="width: 90%; height: 300px;"></div></center>
 </div>
<br>
<br>

  <div class="container">
      <nav class="navbar navbar-default navbar-fixed-top" >
        <?php 
          include 'chart2.php';
        ?>
      </nav>

 </div>

</body>
</html>