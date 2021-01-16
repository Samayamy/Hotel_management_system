<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hotel_management_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$id = mysqli_real_escape_string($link, $_REQUEST['id']);
// Attempt delete query execution
$sql = "DELETE FROM hotelbooking WHERE id='$id'";
if(mysqli_query($link, $sql)){
    echo "Your booking is cancelled successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>