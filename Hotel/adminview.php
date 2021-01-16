<?php 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hotel_management_system";
// Create connection
$mysqli = new mysqli ($host, $dbusername, $dbpassword, $dbname);
// Checking for connections 
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
// SQL query to select data from database 
$sql = "SELECT * FROM admininsert";
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>Available Rooms</title> 
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
      body{
         background-image: url("https://www.ikea.com/images/a-bedroom-containing-a-green-tufjord-bed-with-regolit-lampsh-2aa7e67af54c9825264ee940056b7def.jpg");
         background-repeat: no-repeat;
background-size: cover;
      }
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
            width:40%;
            border-collapse:collapse;
        } 
  
        h1 { 
            text-align: center; 
            color: black;
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: lightgrey; 
            border: 1px solid black; 
        } 
  
         
        td { 
           border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
        th{
            border: 1px solid black; 
            padding: 10px; 
            text-align: center;
            color: black;
            
            
        }
 
       
        td { 
            font-weight: lighter; 
        } 
        .piche{
    
    position: absolute;
    top: 5%;
    left: 70%;
    transform: translate(-50%,-50%); 
}
.btn{
  background-color: grey;
  
  text-decoration: none;
    color: rgb(255, 251, 251);
    padding: 5px 20px;
    border: 1px solid rgb(253, 253, 253);
}

    </style> 
</head> 
  
<body > 
    <section> 
        <h1>Rooms</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>id</th> 
                <th>Roomtype</th> 
                <th>Cost</th> 
               
            </tr> 
            <div class="piche">
            <a href="adminroominsert.html" class="btn">Add Records</a>
        </div>
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['roomid'];?></td> 
                <td><?php echo $rows['roomtype'];?></td> 
                <td><?php echo $rows['cost'];?></td> 
               
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html>