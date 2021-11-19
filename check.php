<?php





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "churchill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



global $sum;
global $sim;

$sql = "SELECT `seats` FROM `event1` ";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      { 

      $sim = $row['seats'];
      }  

      echo "$sim";


$sql = "SELECT `seatNos` FROM `clients1` ";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      { 

      $sum += $row['seatNos'];
      }  

      if ($sum<$sim) {
      	header('Location: clients1.php');
      } else {
      	header('Location: full.php');
      }
      

$conn->close();
?> 