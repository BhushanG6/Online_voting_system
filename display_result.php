<?php
include "connection.php";
session_start();
$sess = $_SESSION['SESS_NAME'] ;


$sql1 =mysqli_query($con, 'UPDATE result set Status="DISPLAY" WHERE id = 1');
	if(!$sql1){
	die("Error on mysql query".mysqli_error());
	}
	else{
	
		include "admin.php";
	exit();
	}

?>

