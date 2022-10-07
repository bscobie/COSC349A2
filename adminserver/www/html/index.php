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

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT bookings.bookingID, bookings.fname, bookings.lname, bookings.email, bookings.length, games.title FROM bookings INNER JOIN games ON bookings.gameID=games.gameID");

while($row = $q->fetch()){
  echo "<tr><td>".$row["bookingID"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td>
  <td>".$row["title"]."</td><td>".$row["length"]."</td></tr>\n";
}

?>
</table>
</body>
</html>

