function validate(){
		var firstname = document.getElementById("firstname").value;
		var lastname = document.getElementById("lastname").value;
		var email = document.getElementById("email").value;
		var Firstregex = /^[a-zA-Z\s]{2,20}$/;
		var Lastregex = /^[a-zA-Z\s]{2,20}$/;
		var Emailregex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var firstResult = Firstregex.test(firstname);
		var lastResult = Lastregex.test(lastname);
		var emailResult = Emailregex.test(email);
		
		if(firstResult == false){
		alert('Please enter a correct Firstname');
		return false;
		}
		if(lastResult == false){
		alert('Please enter a correct Lastname');
		return false;
		}
		
		if(emailResult == false){
		alert('Please enter a correct email');
		return false;
		}
		return true;
	
	}
	
	
	
	
	function validateForm2(){
		var firstName = document.getElementById("firstName").value;
		var lastName = document.getElementById("lastName").value;
		var Email = document.getElementById("Email").value;
		var firstRegex = /^[a-zA-Z\s]{2,20}$/;
		var lastRegex = /^[a-zA-Z\s]{2,20}$/;
		var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var FirstResult = firstRegex.test(firstName);
		var LastResult = lastRegex.test(lastName);
		var EmailResult = emailRegex.test(Email);
		
		if(FirstResult == false){
		alert('Please enter a correct Firstname');
		return false;
		}
		if(LastResult == false){
		alert('Please enter a correct Lastname');
		return false;
		}
		
		if(EmailResult == false){
		alert('Please enter a correct email');
		return false;
		}
		return true;
	
	}
	
	
	
