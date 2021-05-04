<html>
<body style="margin-top:80px">
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<center>
<legend> <h3>User and Admin login </h3></legend>
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
<input type="text" name="username" placeholder="Username" >
<br>
<br>
<input type="password" name="password" placeholder="Password" >
<br>
<br>
<input style="background-color:green;color:#fff" type="submit" name="login" value="login" >
</form></font>
</center>

<script type="text/javascript" >
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>
</body>
</html>
