<?php
if(isset($_POST['Update'])){
$Fuel_id= filter_input(INPUT_POST, 'Fuel_id');
$Fuel_name= filter_input(INPUT_POST, 'Fuel_name');
$Cost= filter_input(INPUT_POST, 'Cost');
$Stock= filter_input(INPUT_POST, 'Stock');

if (!empty($Fuel_id)){
if (!empty($Fuel_name)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "petrolpump";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{


$sql="UPDATE fuel 
SET 
Fuel_name='$Fuel_name',
Cost='$Cost',
Stock='$Stock'
WHERE Fuel_id='$Fuel_id'";

if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
     echo '<script>alert("Project details updated sucessfully");</script>'; 

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo '<script>alert("Please eneter your Project detailscorrectly");</script>'; 

die();
}
}
else{
echo '<script>alert("Please eneter your Project details correctly");</script>'; 
   
die();
}
}
  // Close connection
  mysqli_close($link);
}
    else{
        echo " enter";
    }
?>