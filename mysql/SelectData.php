<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";

$data = $conn->query($sql);

if ($data->num_rows > 0) {
	while ($row = $data->fetch_assoc()) {
		echo "username: " . $row["username"];
		echo "<br>";
	}
}

$conn->close();

?>
