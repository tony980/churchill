<?php



require 'phpmailer/includes/PHPMailer.php';
require 'phpmailer/includes/SMTP.php';
require 'phpmailer/includes/Exception.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

if (isset($_POST['First'])) {
 $one= $_POST['First'];}
if (isset($_POST['Last'])) {
 $two= $_POST['Last']; 
}
if (isset($_POST['Phone'])) {

$three= $_POST['Phone'];}

if (isset($_POST['Email'])) {

$four = $_POST['Email'];}

if (isset($_POST['box2'])) {
$five = $_POST['box2'];}
if (isset($_POST['abc'])) {
$six = $_POST['abc'];}

if (isset($_POST['Price'])) {
$seven = $_POST['Price'];}

if (isset($_POST['you'])) {
$eight = $_POST['you'];}


global $nine;
global $ten;
global $eleven;
global $e;
$sql = "SELECT `event`,`vip` FROM `event1` ";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      { 

      $nine = $row['event'];
      $ten= $row['vip'];
    
      }  
echo $nine;
 echo $eleven=$e;

echo $eleven;
if ($five==$ten) {
   echo"vvip";
   $e="trial";
} else {
  echo "stanard";
  $e="trial";
}


$conn->close();
?> 