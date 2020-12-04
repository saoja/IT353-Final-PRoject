<!DOCTYPE html>
<html >
  <head>

    <title> Schedule</title>
  <div id="Topofpage">
  <h1>Schedule</h1>
  <link rel="stylesheet" href="Schedule.css">
  </div>
  </head>


  <body>
    <div id="navtab">

      <a href="main.html">Main Page</a>
      <p></p>
      <a href="weather.html">Weather</a>
      <p></p>
      <a href="ToDoList.html">To Do List</a>
      <p></p>
      <a href="schedule.php">Schedule</a>

    </div>

<div id="week">
  <table>


    <?php
    include "functions.inc.php";
    $days = array("Sunday","Monday","Tueday","Wednesday","Thursday","Friday","Saturday");

    echo("<tr> <td> <b>".$days[0]."</b> </td> <td> <b>".$days[1]."</b></td><td> <b>".$days[2]."</b></td><td> <b>".$days[3]."</b></td><td> <b>".$days[4]."</b></td><td> <b>".$days[5]."</b></td><td> <b>".$days[6]." </b></td></tr>");

    echo("<tr>".getevents("Sunday").getevents("Monday").getevents("Tuesday").getevents("Wednesday").getevents("Thursday").getevents("Friday").getevents("Saturday")."</tr>");

     ?>

    </table>

</div>
<div id="addevent">
  <form method ="post" action = "addevent.php">

    <h3>Add Event</h3>

    <p>
    <label>EventName:</label>
    <input type="text" name="Name" value="" placeholder="Enter a name">
    </p>

    <p>
    <label>Location:</label>
    <input type="text" name="Location" value="" placeholder="Enter a place">
    </p>

    <p>
    <label>Day:</label>
    <select  name="Day">
      <option value="Sunday">Sunday</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednsday">Wednsday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>

    </select>

    </p>
    <p>
    <label>Time:</label>
    <select  name="Time">
      <option value="0">0:00</option>
      <option value="1">1:00</option>
      <option value="2">2:00</option>
      <option value="3">3:00</option>
      <option value="4">4:00</option>
      <option value="5">5:00</option>
      <option value="6">6:00</option>
      <option value="7">7:00</option>
      <option value="8">8:00</option>
      <option value="9">9:00</option>
      <option value="10">10:00</option>
      <option value="11">11:00</option>
      <option value="12">12:00</option>
      <option value="13">13:00</option>
      <option value="14">14:00</option>
      <option value="15">15:00</option>
      <option value="16">16:00</option>
      <option value="17">17:00</option>
      <option value="18">18:00</option>
      <option value="19">19:00</option>
      <option value="20">20:00</option>
      <option value="21">21:00</option>
      <option value="22">22:00</option>
      <option value="23">23:00</option>
      </select>
    </p>

  <p></p>
    <input id="proceed" type="submit" name="submit" value="Proceed">

    </form>


  </body>
</html>
