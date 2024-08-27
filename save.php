<?php
include_once("connection.php");
if(isset($_POST['datasave'])){
$aname=$_POST['aname'];
$aemail=$_POST['aemail'];
$aphone=$_POST['aphone'];
$aappointmentdate=$_POST['aappointmentdate'];
$aappointmenttime=$_POST['aappointmenttime'];
$amessage=$_POST['amessage'];

echo "<br>aname= ".$aname;
echo "<br>aemail= ".$aemail;
echo "<br>aphone= ".$aphone;
echo "<br>aappointmentdate= ".$aappointmentdate;
echo "<br>aappointmenttime= ".$aappointmenttime;
echo "<br>amessage= ".$amessage;

$inserttime=date('Y-m-d h:i:s a');
echo "<br>sqlquery = ".$sqlquery="insert into tblappointment(aname,aemail,aphone,aappointmentdate,aappointmenttime,amessage) values('".$aname."','".$aemail."','".$aphone."','".$aappointmentdate."','".$aappointmenttime."','".$amessage."')";
mysqli_query($con,$sqlquery);
header('location:index.php');
}
?>
<?php

// To Remove unwanted errors
error_reporting(0);

// Add your connection Code


// Important Files (Please check your file path according to your folder structure)
require "./Downloads/PHPMailer-master/src/PHPMailer.php";
require "./Downloads/PHPMailer-master/src/SMTP.php";
require "./Downloads/PHPMailer-master/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Email From Form Input
$send_to_email = $_POST["aemail"];

// Generate Random 6-Digit OTP
$verification_otp = random_int(100000, 999999);

// Full Name of User
$send_to_name = $_POST["aname"];

function sendMail($send_to, $otp, $aname) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Enter your email ID
    $mail->aname = "yourEmailID@gmail.com";
    $mail->Password = "Your Password";

    // Your email ID and Email Title
    $mail->setFrom("yourEmailID@gmail.com", "DikshaKulkarni");

    $mail->addAddress($send_to);

    // You can change the subject according to your requirement!
    $mail->Subject = "Account Activation";

    // You can change the Body Message according to your requirement!
    $mail->Body = "Hello, {$aname}\nYour account registration is successfully done! Now activate your account with OTP {$otp}.";
    $mail->send();
}

sendMail($send_to_email, $verification_otp, $send_to_name);

// Message to print email success!
echo "Email Sent Successfully!";

?> 

 