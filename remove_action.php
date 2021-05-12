<?php
session_start();
$captcha = "" ;
include "connection.php";
if(isset($_POST['submit'])) {
	/*if (isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
		  $error = "Please check captcha too";
		  include ('remove_can.php');
		  exit();
        }
        $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
		  $error = "You are spammer !";
        }*/
$name = mysqli_real_escape_string($con, $_POST['fullname']);
$name2 = mysqli_real_escape_string($con,$_POST['about']);


$sq = mysqli_query($con, 'SELECT fullname FROM candidates WHERE fullname="'.$_POST['fullname'].'"');
$exist = mysqli_num_rows($sq);

		if($exist==0){
		$nam="<center><h4><font color='#FF0000'>The Party doesn't exist !!!</h4></center></font>";
		unset($fullname);
		include('remove_can.php');
		exit();
		}

$sql2 = mysqli_query($con, 'DELETE From candidates where fullname="'.$_POST['fullname'].'" ');
if (!$sql2) {
		 die (mysqli_error($con));
		 }
else {
echo "Successfully Deleted Candidate!  <a href= 'remove_can.php'>Clich here to remove more </a>";
}
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"add_can.php";
}
?>

