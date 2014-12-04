//Compose message
$(document).ready(function() {

	$('form').submit( function(action) {

		var data_collect = {

			'Email'		:$('input[name = email]').val(),
			'Subject'	:$('input[name = subject]').val(),
			'Body'		:$('input[name = body]').val()
		};

		//Process data
		$.ajax({
			type		:'POST',
			url			: 'home1.php',
			data 		: formData,
			dataType	: 'json',
						encode			: true
		})

		.done(function(data) {
			console.log(data);
		});

		data_collect.preventDefault();

	});

});
