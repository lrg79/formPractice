<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "GenjiHanzo9199";
$dbname = "forms1";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn -> connect_error){
	die("Connection failed: " . $conn ->connect_error);
}

$sql = "SELECT ID, input1 FROM demo";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result -> fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["input1"];
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>
