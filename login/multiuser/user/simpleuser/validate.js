function validateForm(){
		var firstname = document.getElementById("firstname").value;
		var lastname = document.getElementById("lastname").value;
		var email = document.getElementById("email").value;
		var phone = document.getElementById("phone").value;
		var amount = document.getElementById("amount").value;
		var state = document.getElementById("state").value;
		
		var Firstregex = /^[a-zA-Z\s]{2,20}$/;
		var Lastregex = /^[a-zA-Z\s]{2,20}$/;
		var Emailregex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var Phoneregex = /^\d{3}-(\d{3})-\d{3}$/;
		var Amountregex = /^\d+(?:[.,]\d+)*$/;
		var Stateregex = /^[a-zA-Z\s]{2,5}$/;
		
		var firstResult = Firstregex.test(firstname);
		var lastResult = Lastregex.test(lastname);
		var emailResult = Emailregex.test(email);
		var phoneResult = Phoneregex.test(phone);
		var amountResult = Amountregex.test(amount);
		var stateResult = Stateregex.test(state);
		
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
		
		if(phoneResult == false){
			alert('Please enter a correct phone number');
			return false;
		}
		if(amountResult == false){
			alert('Please enter a correct amount format');
			return false;
		}
		if(stateResult == false){
			alert('Please enter a correct state');
			return false;
		}
		return true;
	
	}
		