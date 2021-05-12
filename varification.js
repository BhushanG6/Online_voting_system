function sendOTP() {
  print('mobile');
	$(".error").html("").hide();
	var number = $("#8208008526").val();
	if (number.length == 10 && number != null) {
		var input = {
			"mobile_number" : 8208008526,
			"action" : "send_otp"
		};
		$.ajax({
			url : 'controller.php',
			type : 'POST',
			data : input,
			success : function(response) {
				$(".container").html(response);
			}
		});
	} else {
		$(".error").html('Please enter a valid number!')
		$(".error").show();
	}
}

function verifyOTP() {
	$(".error").html("").hide();
	$(".success").html("").hide();
	var otp = $("#mobileOtp").val();
	var input = {
		"otp" : otp,
		"action" : "verify_otp"
	};
	if (otp.length == 6 && otp != null) {
		$.ajax({
			url : 'controller.php',
			type : 'POST',
			dataType : "json",
			data : input,
			success : function(response) {
				$("." + response.type).html(response.message)
				$("." + response.type).show();
			},
			error : function() {
				alert("ss");
			}
		});
	} else {
		$(".error").html('You have entered wrong OTP.')
		$(".error").show();
	}
}
