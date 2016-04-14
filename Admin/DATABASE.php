<?php
echo "<head>
</head>
<title>
Datebase
</title>
";

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$dbname = "account";
$user = $_POST["user"];
$pass = $_POST["pass"];

$connection = mysql_connect($servername, $username, $password); //The Blank string is the password
mysql_select_db($dbname);

$query = "SELECT * FROM user"; //You don't need a ; like you do in SQL
$result = mysql_query($query);


include test.php;
echo $tttt;
// echo '<select id="animal" name="animal">                      
// <option value="0">--Select Animal--</option>
// <option value="1">Cat</option>
// <option value="2">Dog</option>
// <option value="3">Cow</option>
// </select>
// ';

// if($_POST['submit'])
// {
// $animal=$_POST['animal'];
// }

// echo $animal;

echo "<table>"; // start a table tag in the HTML

echo "<tr><td>" . "First Name" . "</td><td>" . "Last Name" . "</td><td>" . "Password" . "</td><td>" . "Email" . "</td><td>" . "Home Room" . "</td><td>" . "Student ID" . "</td><td>" . "Student Pin" . "</td><td>" . "Grade" . "</td></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['fName'] . "</td><td>" . $row['lName'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['email'] . "</td><td>" . $row['hRoom'] . "</td><td>" . $row['sId'] . "</td><td>" . $row['sPin'] . "</td><td>" . $row['grade'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection 
?>