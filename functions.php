<?php

require 'config.php';

//establish connection to database
function connect_db() {
    
     global $host, $username, $password, $dbname;

     $conn = mysqli_connect($host, $username, $password, $dbname);
     
     if (!$conn) {

         return false;
     } 
     return $conn;
}

function test_db() {
    global $host, $username, $password, $dbname;

     $conn = mysqli_connect($host, $username, $password, $dbname);
     
     if (!$conn) {

         echo "not doing it" . mysqli_error($conn);
     } 
     echo "working";
}
//add user to the database
function add_user($firstname, $lastname, $email) {
    $conn = connect_db();

   if (!$conn) {
        return false;
   } 

   $sql = "INSERT INTO users (first_name, last_name, email) VALUES ('" . $_POST['firstname'] ."','" . $_POST['lastname'] ."','" . $_POST['email'] ."')";
   $result = mysqli_query($conn, $sql);
   if ($result == false) {
       echo mysqli_error($conn);
   } 
   mysqli_close($conn);
   
}

//save booking to the database
function book_vacation() {
    $conn = connect_db();

    if (!$conn) {
        echo "this is the problem";
         return false;
    } 

    $sql = "INSERT INTO bookings (hotel_name, days_booked) VALUES ('" . $_POST['hotels'] ."','" . $_POST['days'] ."',)";
    $result = myslqi_query($conn, $sql);
    if ($result == false) {
       echo mysqli_error($conn);
   } 
   mysqli_close($conn);
}
 ?>