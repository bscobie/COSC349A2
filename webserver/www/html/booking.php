<?php include "../inc/dbinfo.inc"; ?>
<!DOCTYPE html PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
  <title>Admin Server</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h3>Thank you <?php echo $_POST["fname"], ' ', $_POST["lname"]; ?> <br>
  You successfully rented <?php echo $_POST["gameSelect"]; ?> for <?php echo $_POST["lengthSelect"]; ?>
  </h3>

  <p>Click here to <a href="http://ec2-107-22-152-77.compute-1.amazonaws.com">Make a Booking</a>.</p>

<?php
   $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

   if(mysqli_connect_errno()) echo "Failed to connect to MYSQL: " . mysqli_connect_error();

   $database = mysqli_select_db($connection, DB_DATABASE);

    $game =  $_REQUEST['gameSelect'];
    $first_name =  $_REQUEST['fname'];
    $last_name = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $length = $_REQUEST['lengthSelect'];

   $q = mysqli_query($connection, "SELECT gameID,title FROM GAMES WHERE title='$game'");

   while($row = mysqli_fetch_row($q)){
        mysqli_query($connection, "INSERT INTO BOOKINGS (gameID, fname, lname, email, length) VALUES ('$row[0]', '$first_name', '$last_name', '$email', '$length')");
      }
 ?>



</body>
</html>
