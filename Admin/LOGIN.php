

<?php

//Get the time

date_default_timezone_set("America/New_York");
$cdate = date('m-j-Y H:i:s');

//phpinfo();
 $servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$dbname = "account";
$user = $_POST["sId"];
$pass = $_POST["pass"];


//Local Values
$temp = false;
$name = "";
$email = "";
$hRoom = 0;
$grade = 0;
$temp = false;


$connection = mysql_connect($servername, $username, $password); //The Blank string is the password
mysql_select_db($dbname);



 //Login in Check
$query = "SELECT * FROM user"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

// $sId;
//echo "<br>";
//echo $pass;

 // start a table tag in the HTML


while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
    
    if ($row['sId'] == $user) {
        if ($row['pass'] == $pass) {
                  //$row['index'] the index here is a field name
                $name = $row['fName'];
                $email = $row['email'];
                $hRoom = $row['hRoom'];
                $grade = $row['grade'];
                
                
                $temp = true;
        }
    }
}

mysqli_close($connection);



if ($temp == true) {
    echo "<br> <br> Login Passed";
    echo "<br> <br> Name: $name";
    echo "<br> Email: $email";
    echo "<br> Home Room: $hRoom";
    echo "<br> Grade: $grade";
    
    $person = array($name, $email, $hRoom, $grade, $user);
    
    setcookie('User  ID', $name, 0, "/");
    setcookie('sId', $user, 0, "/");
    
    
    
    
    //POST($pserson)
}
else {
    echo "<br> <br> Login Falure";
}



// This will add a person to the list of all logins.

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO login VALUES ('$user', '$pass', '$cdate', '$temp')";

if (mysqli_query($conn, $sql)) {
    echo "<br>Compleate";
    
    require_once('../Admin/login_s.php');
    session($person);
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<HTML>
    <head>
        <title>LOGIN TEST</title>
    </head>
    <body>
        <br>
        SORTA WORKING AT THE MOMENT<br>
        <br><br><br><br>
        Apologies<br>
        -The Management
    </body>
</HTML>