
<?php
$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

include "form.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "connection success";
}

$sql = "INSERT INTO pcsaballo3_myguests (name, email, website, comment, gender)
VALUES ('hyewq', 'eqw', 'eqwe.com', 'eqweq', 'male')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//header("Location: form.php")
?>