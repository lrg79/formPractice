<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "***************************";
$dbname = "forms1";

$input1 = $_POST['inputTest'];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn -> connect_error){
	die("Connection failed: " . $conn ->connect_error);
}

if (empty($input1)){
	echo "input 1 cannot be blank. Please press back and correct the issue!";
	die();
}

$sql = "INSERT INTO demo (input1) VALUES ('$input1')";

if ($conn ->query($sql) === TRUE){
	echo "Thank you, has been added";
} else {
	echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
