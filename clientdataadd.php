<?php
include("db.php");
$sname=$_GET['sname'];
$ophone=$_GET['ophone'];
$email=$_GET['email'];
$mname=$_GET['mname'];
$mphone=$_GET['mphone'];
$location=$_GET['location'];
$address=$_GET['address'];

$sql="INSERT INTO `gstex`.`client` (`id`,`sname`, `ophone`,`email`, `mname`, `mphone`, `location`, `address`) VALUES (NULL,'$sname', '$ophone', '$email','$mname', '$mphone', '$location', '$address')";
if(mysqli_query($con,$sql))
{
	echo"success";
}
else
{
	echo"Data Error!";
}
?>