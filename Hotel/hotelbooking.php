<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hotel_management_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$arrivaldate = mysqli_real_escape_string($link, $_REQUEST['arrivaldate']);
$departuredate = mysqli_real_escape_string($link, $_REQUEST['departuredate']);
$numberofadults = mysqli_real_escape_string($link, $_REQUEST['numberofadults']);
$numberofchildren = mysqli_real_escape_string($link, $_REQUEST['datanumberofchildren_9']);
$questions = mysqli_real_escape_string($link, $_REQUEST['questions']);
 
// Attempt insert query execution
$sql = "INSERT INTO hotelbooking VALUES (NULL,'$firstname','$lastname','$phone','$email','$arrivaldate','$departuredate','$numberofadults','$numberofchildren','$questions')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>