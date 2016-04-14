<?php
$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$dbname = "account";
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$pass = $_POST["password"];
$email = $_POST["email"];
$hRoom = $_POST["hRoom"];
$sID = $_POST["sID"];
$sPin = $_POST["sPin"];
$grade = $_POST["grade"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user VALUES ('$fName', '$lName', '$pass', '$email', '$hRoom', '$sID', '$sPin', '$grade')";
//$sql = "UPDATE user SET email='$email' WHERE fName='$fName'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    $sql = "SELECT * FROM user";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
//... OH MY GOD!!! THIS WORKS!!!, WE CAN USE THIS CODE TO CREAT USER ACCOUNTS!!!! THIS IS BLODDY BRILIGNT!!!! THANKS W3SCHOOL!!!!
?>


