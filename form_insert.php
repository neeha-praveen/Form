<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mydatabase";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$blood_group = $_POST["blood_group"];

$sql = "INSERT INTO form (fname, email, phone, dob, gender, blood_group) VALUES ('$fname', '$email', '$phone', '$dob', '$gender', '$blood_group')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p>Your data has been saved to the database.</p>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>