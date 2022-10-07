<?php include "../inc/dbinfo.inc"; ?>
<!DOCTYPE html PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
  <title>Current Bookings</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<h1>Welcome Admin!</h1>
<h2>Current Video Game Bookings</h2>
<table>
<tr><th>Booking No.</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Game Title</th><th>Rental Length</th></tr>
<?php
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

  $database = mysqli_select_db($connection, DB_DATABASE);

  $result = mysqli_query($connection, "SELECT BOOKINGS.bookingID, BOOKINGS.fname, BOOKINGS.lname, BOOKINGS.email, BOOKINGS.length, GAMES.title FROM BOOKINGS INNER JOIN GAMES ON BOOKINGS.gameID=GAMES.gameID");

  while($row = mysqli_fetch_row($result)){
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[5]."</td><td>".$row[4]."</td></tr>\n";
  }
?>
</table>
</body>
</html>

