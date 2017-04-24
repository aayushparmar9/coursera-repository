<?php
$servername = "localhost";
$username = "root";
$password = "";
$name1=$_POST['name1'];
$email=$_POST['email'];
$db = "testdb";
// Create connection
$db = new mysqli($servername, $username, $password, $db) or die("Unable to connect");


echo "Connected successfully ";

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
$sql = "CREATE TABLE Trap (
id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($db->query($sql) === TRUE) {
    echo "Table Trap created successfully ";
} else {
    echo "Error creating table: " . $db->error;
}


$sql = "INSERT INTO Trap (lastname, email)
VALUES ('$name1', '$email')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>

