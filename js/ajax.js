$(document).ready(function(){

	// Check username Starts
	$('#username').blur(function(){
	 	var username =	$(this).val();

	 	$.ajax({
	 		url: 'process.php',
	 		data: {username: username},
	 		method: 'POST',
	 		success: function(data) {
	 			$('#status').html(data);
	 		}

	 	});
	}); // Check username end


	// Auto Complete Starts
	$('#skill').keyup(function(){
	 	var skill =	$(this).val();

	 	$.ajax({
	 		url: 'autoCompleteSkill.php',
	 		data: {skill: skill},
	 		method: 'POST',
	 		success: function(data) {
	 			$('#skillstatus').fadeIn();
	 			$('#skillstatus').html(data);
	 		}

	 	});

	}); // KeyUp end

	// Click value to the box
	$(document).on('click', 'li', function(){
 		$('#skill').val($(this).text());
 		$('#skillstatus').fadeOut();

	}); // Click value to the box End



	// Show / Hide Password
	$('#showPassword').click(function(){
		var pass = $("#password");
		var fieldType = pass.attr('type');
		if (fieldType == 'password') {
			pass.attr('type', 'text');
			$(this).text('Hide Password');
		}else{
			pass.attr('type', 'password');
			$(this).text('Show Password');
		}

	}); // Show / Hide Password End


	// Live Search starts
	$('#username').keyup(function(){
	 	var username =	$(this).val();

	 	$.ajax({
	 		url: 'livesearchCode.php',
	 		data: {username: username},
	 		method: 'POST',
	 		success: function(data) {
	 			$('#searchResult').html(data);
	 		}

	 	});
	});





}); // Document Ready Function End