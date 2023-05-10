<?php

// Get the form data
$name = $_POST['name'];
$bloodgroup = $_POST['bloodgroup'];
$districtname	 = $_POST['districtname	'];
$phone = $_POST['phone'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodgroup";

$conn = new mysqli($servername, $username, $password, $dbname);
echo"HHH";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the form data into the table
$sql = "INSERT INTO registration (name, bloodgroup, districtname, phone)
        VALUES ('$name', '$bloodgroup', '$districtname	', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
