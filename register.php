<html>
<head>

</head>
<body style="background-color:#;margin-top:40px">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php include "header.php";
	if(!isset($_SESSION)) {
	session_start();
	}
	if (isset($_SESSION['SESS_NAME'])!="") {
		header("Location: voter.php");
	}
	?>
	<br>
	<br>
	<center>
	<legend> <h3> REGISTER </h3></legend> </center>
	<?php global $nam; echo $nam; ?>
	<?php global $error; echo $error; ?>
	<center><font size="4" >
	<form action= "reg_action.php" method= "post" id="myform" >

	<input type="text" name="firstname" placeholder="Firstname" />
	<br>
	<br>
  <input type="text" name="lastname" placeholder="Lastname" />
	<br>
	<br>
	<input type="text" name="username" placeholder="Username" />
	<br>
	<br>
	<input type="password" name="password" placeholder="Password" />
	<br>
	<br>
	<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
	<br>
	<br>
	<input style="background-color:green;color:#fff" type="submit" name="submit"value="Next" />
	</form>
	</font>
	</center>
	<script type= "text/javascript" >
	 var frmvalidator = new Validator("myform");
	 frmvalidator.addValidation("firstname","req","Please enter student firstname");
	 frmvalidator.addValidation("firstname","maxlen=50");
	 frmvalidator.addValidation("lastname","req","Please enter student lastname");
	 frmvalidator.addValidation("lastname","maxlen=50");
	 frmvalidator.addValidation("username","req","Please enter student username");
	 frmvalidator.addValidation("username","maxlen=50");
	 frmvalidator.addValidation("password","req","Please enter student password");
	 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

	</script>
	<?php include "footer.php" ;?>

</body>
<html>
