<?php

function getevents($day){


  $mysqli=new mysqli("localhost","user","pass","final project");
  if($mysqli->connect_errno){
    echo(" connection failed");
  }
  $command = "SELECT  EventName, Location, Day, Time FROM planner WHERE Day= "."'".$day."' ORDER by Time";
  $result = $mysqli->query($command);
  echo"<td>";
  if($result->num_rows > 0){

    while ($row = $result->fetch_assoc()) {
      if($row["Time"]>12){}
    echo "Event: ".$row["EventName"] . " <p></p>Location: " . $row["Location"]. "<p></p>Day:  ".$row["Day"]."<p></p>Time: ".$row["Time"].":00 "."<p>----------</p>";
    }
  }else{
  }
  echo"</td>";
  $mysqli->close();
}

 ?>
