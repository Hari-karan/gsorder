<?php
include("db.php");
$sname=$_GET['sname'];
$ophone=$_GET['ophone'];
$location=$_GET['location'];
$item1=$_GET['item1'];
$quant1=$_GET['quant1'];
$item2=$_GET['item2'];
$quant2=$_GET['quant2'];
$item3=$_GET['item3'];
$quant3=$_GET['quant3'];
$item4=$_GET['item4'];
$quant4=$_GET['quant4'];
$discription=$_GET['discription'];
$otb=$_GET['otb'];

$sql="INSERT INTO `gstex`.`order` (`id`,`sname`, `ophone`, `location`, `item1`, `quant1`, `item2`,`quant2`, `item3`,`quant3`,`item4`,`quant4`,`discription`,`otb`) VALUES (NULL,'$sname', '$ophone', '$location', '$item1','$quant1', '$item2','$quant2', '$item3','$quant3','$item4','$quant4','$discription', '$otb' )";
if(mysqli_query($con,$sql))
{
	echo"success";
}
else
{
	echo"Data Error!";
}
?>