<html>
<head>

</head>
<body style="background-color:#;margin-top:40px">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php include "header.php";
	if(!isset($_SESSION)) {
	session_start();
	}
	
	?>
	<br>
	<br>
	<center>
		<?php
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
include "header_admin.php";?>
	<legend> <h3> Add candidate </h3></legend> </center>
	<?php global $nam; echo $nam; ?>
	<?php global $error; echo $error; ?>
	<center><font size="4" >
	<form action= "can_action.php" method= "post" id="myform" >

	<input type="text" name="fullname" placeholder="Party Name" />
	<br>
	<br>
  <input type="text" name="about" placeholder="Candidate Name" />
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
	 frmvalidator.addValidation("fullname","req","Please enter Party Name");
	 frmvalidator.addValidation("fullname","maxlen=50");
	 frmvalidator.addValidation("about","req","Please enter Candidate Name");
	 frmvalidator.addValidation("about","maxlen=50");
	 

	</script>
	<?php include "footer.php" ;?>

</body>
<html>
