<?php 

//require connection details
require ("config.php");

//connect to database
$conn = mysqli_connect($host, $username, $password, $dbname);

//check if db connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//close db connection
mysqli_close($conn); 

?>