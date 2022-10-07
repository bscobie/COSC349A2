<?php include "../inc/dbinfo.inc"; ?>
<!DOCTYPE html PUBLIC "-//IETF//DTD HTML//EN">
<html>
  <head>
    <title>Video Game Booking Home</title>
    <link rel="stylesheet" href="styles.css">
  </head>

<body>
  <h1>Video Game Booking Home</h1>

  <p>Welcome to the home page of Video Game Booking!</p>
  <?php
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

  $database = mysqli_select_db($connection, DB_DATABASE);
  ?>

  <form action="booking.php" method="post">
  <?php
    echo "Game: <select name=gameSelect value=''>Game</option><option value='%s' selected='selected'>Select a Title</option>";

    $result = mysqli_query($connection, "SELECT * FROM GAMES");

    while($row = mysqli_fetch_row($result)){
      echo "<option>".$row[1]."</option>";
    }

    echo "</select><br>";
    ?>
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    E-mail: <input type="text" name="email"><br>
    Length: <select name="lengthSelect" value=''>WORD</option>
      <option value='%s' selected='selected'>Select a Rental Length</option>
      <option value='3 Days'>3 Days</option>
      <option value='7 Days'>7 Days</option>
      <input type="submit">
   </form>

   <?php
   mysqli_close($connection);
   ?>
  </body>
</html>

