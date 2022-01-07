<?php
	include('config.php');

	$id=$_GET['id'];

	$sql="DELETE FROM `crudtable` Where id= $id";
	$result=mysqli_query($con,$sql);

	header('location:display.php');
?>
