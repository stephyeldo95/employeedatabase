<?php
include("config.php");
$dbObj = new Database();
if(isset($_POST['submit1']))
{

	$empcode=$_POST['empcode'];
	$empname=$_POST['empname'];
	$department=$_POST['department'];
	$age=$_POST['age'];
	$exp=$_POST['empexperience'];
	$dbObj->insertRecond($empcode, $empname, $department, $age,$exp);

}


?>