var inputs = document.getElementsByClassName('adduserinput'),
	errorSpan = document.getElementById('error'),
	rules = {
		first_name : /.+/,
		last_name : /.+/,
		username : /.+/,
		password : /^(?=.*[0-9])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/
	};

	errors = {
		first_name : 'First Name cannot be empty!',
		last_name : 'Last Name cannot be empty!',
		username : 'Username cannot be empty!',
		password : 'A valid password has at least one number, one letter, one capital letter, and is at least 8 characters!'
	}

function validateForm(){
	for (var i = 0; i < inputs.length; i++) {
		if (!isValidInput(inputs[i])){
			inputs[i].focus();
			showErrorMessage(inputs[i]);
			return false;
		}
	};
	return true;
}

// return whether or not the input passes its validation
function isValidInput(input){
	rule = rules[input.name];
	return rule.test(input.value);		
}	

// display corresponding error messages 
function showErrorMessage(input){
	error = errors[input.name];
	errorSpan.innerHTML = error;
}