<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agile";



$Username=$_POST{'Username'};
$Name=$_POST{'Name'};
$Password=$_POST{'Password'};
$Email=$_POST{'Email'};
$Passwordconfirm=$_POST{'Passwordconfirm'};
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($Password != $Passwordconfirm) {
echo "<script> alert('Passwords don\'t match');</script>";
}
else{
$sql = "INSERT INTO user (Username, Name, Password, Email)
VALUES ('$Username', '$Name', '$Password','$Email')";

if ($conn->query($sql) === TRUE) {
    echo "New account created successfully";
     header("Location: http://localhost/agile2/welcome.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

$conn->close();
?>