<html >
  <head>

    <title> Schedule</title>
  <div id="Topofpage">
  <h1>Schedule</h1>
  <link rel="stylesheet" href="Schedule.css">
  </div>
  </head>


  <body>

<h2>New event added!</h2>
<a href="schedule.php">Return to Schedule</a>

<?php
$name=$_POST['Name'];
$location=$_POST['Location'];
$day=$_POST['Day'];
$time=$_POST['Time'];

$mysqli=new mysqli("localhost","user","pass","final project");
if($mysqli->connect_errno){
  echo(" connection failed");
}
$command =  "INSERT INTO planner (EventName, Location, Day, Time) VALUES( ' " .$name. " ' ,'". $location. "', '".$day."','".$time ."');";
$result = $mysqli->query($command);

$mysqli->close();




 ?>
 </body>
</html>
