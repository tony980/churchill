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

if (isset($_POST['inptxt1'])) {
$five = $_POST['inptxt1'];}
if (isset($_POST['abc'])) {
$six = $_POST['abc'];}

if (isset($_POST['Price'])) {
$seven = $_POST['Price'];}

if (isset($_POST['you'])) {
$eight = $_POST['you'];}


global $nine;
$sql = "SELECT `event` FROM `event1` ";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      { 

      $nine = $row['event'];
      }  

     

$sql="INSERT INTO `clients1`(`First Name`, `Last Name`, `Phone No`, `Email`, `seat`, `seatNos`, `Price`, `Event`)  VALUES ('$one','$two','$three','$four','$five','$six','$seven','$nine' ) ";
if ($conn->query($sql) === TRUE) {

include('pdf.php');
	$file_name = md5(rand()) . '.pdf';
	$html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
	$html_code = ' <div><h1><i>Churchill show Laugh Event </i></h1><br> <i><u>'.$nine.' Edition</u></i><p class="text-uppercase">
	NAME: '.$_POST["First"].' '.$_POST["Last"].'<br>SEAT TYPE:'.$_POST["inptxt1"].'<br> SEATS BOOKED:'.$_POST["abc"].' <br>PRICE:'.$_POST["Price"].'/= <br><b> BY MANAGEMENT:<br> MR SADD<br>
	EVENT ORGANIZER:<br> <u> <i>SDKT</i></u><br><p style="color:red;">FOR ANY ENQUIRES, REACH OUT THROUGH THE EMAIL.</p></b></p></div>';
	$pdf = new Pdf();
	$pdf->load_html($html_code);
	$pdf->render();
	$file = $pdf->output();
	file_put_contents($file_name, $file);





$mail=new PHPMailer();

$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth="true";

$mail->SMTPSecure="tls";
$mail->Port="587";
$mail->Username="laugheventschurchill@gmail.com";
$mail->Password="mwanamisi49";
$mail->Subject="Churchill Laugh Event";

$mail->setFrom("laugheventschurchill@gmail.com");
$mail->isHTML(true);
$mail->addAttachment($file_name);

$mail->Body="<h3>TICKET RESERVATION</h3><br><p>This is to confirm a spot has been reserved for you at the Churchill Laugh event.Attached below is your ticket.</p>";
$mail->addAddress($four);


$mail->send();


unlink($file_name);


$mail->smtpclose();


  header('Location: events.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 