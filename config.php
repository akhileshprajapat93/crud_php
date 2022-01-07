<?php
	$server='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='crud';

	$con=mysqli_connect($server,$dbuser,$dbpass,$dbname);

	if (!$con) {

		mysqli_connect_error($con);
	}
?>