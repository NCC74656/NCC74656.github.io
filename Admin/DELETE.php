<?php
$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$dbname = "account";
$sId = $_POST["sId"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM user WHERE sId ='$sId'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
//... OH MY GOD!!! THIS WORKS!!!, WE CAN USE THIS CODE TO CREAT USER ACCOUNTS!!!! THIS IS BLODDY BRILIGNT!!!! THANKS W3SCHOOL!!!!
?>


