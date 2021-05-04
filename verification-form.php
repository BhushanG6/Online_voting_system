<?php
 include "header.php";
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<div style="color: #483333;
    padding: 10px;
    background: #ffbcbc;
    border: #efb0b0 1px solid;
    border-radius: 3px;
    margin: 0 auto;
    margin-bottom: 20px;
    width: 350px;
    display:none;
    box-sizing: border-box;
    text-align:center;"></div>
<div class="success"></div>
<div style="margin-top: 100px">
<form id="frm-mobile-verification">
	<div style=" margin-bottom: 30px;text-align:center">
		<label>OTP is sent to Your Mobile Number</label>
	</div>
	<div style=" margin-bottom: 30px;text-align:center">
		<input type="number"  id="mobileOtp" class="form-input" placeholder="Enter the OTP">
	</div>
	<div  style=" margin-bottom: 30px;text-align:center">
		<input id="verify" type="button" class="btnVerify" value="Verify" onClick="verifyOTP();">
	</div>
</form>
</div>
