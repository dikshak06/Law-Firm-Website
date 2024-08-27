<?php
include_once("connection.php");
if(isset($_POST['save'])){
$sname=$_POST['sname'];
$semail=$_POST['semail'];
$ssubject=$_POST['ssubject'];
$smessage=$_POST['smessage'];


echo "<br>sname= ".$sname;
echo "<br>semail= ".$semail;
echo "<br>ssubject= ".$ssubject;
echo "<br>smessage= ".$smessage;



echo "<br>sqlquery = ".$sqlquery="insert into contactus(sname,semail,ssubject,smessage) values('".$sname."','".$semail."','".$ssubject."','".$smessage."')";
mysqli_query($con,$sqlquery);
header('location:contact.php');
}
    

?>