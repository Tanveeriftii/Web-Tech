<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (username, password) VALUES ('tanveer09', '2345aiub')";

$res = $conn->query($sql);

var_dump($res);

echo "<br><hr><br>";

if ($res === true) {
	echo "Data Inserted Succssfully";
}
else {
	echo "Error while saving";
}

$conn->close();

?>
