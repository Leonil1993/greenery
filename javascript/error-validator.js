class ErrorValidator
{
	constructor()
	{	this.transferData = new TransferData();
		this.borders = document.querySelectorAll(".l-i");
		this.inputs = document.querySelectorAll(".input");
		this.spans = document.querySelectorAll(".span");
		this.subscribeButton = document.querySelector("#subscribe-button");
		this.loginButton = document.querySelector("#login-button");
		this.thisFieldIsRequired = "*invalid! this field is required";
		this.invalidformat = "*invalid format of ";
		this.allSpace = "*invalid! all characters are space";
		this.passwordLength = "*Password length is below 8 characters";
		this.passwordDntMatch = "*Password Didn't Match";
		this.emailExist = "*email Exist";
	}
	classList(element, method, value)
	{
		if (method == "add")
		{
			element.classList.add(value);
		}
		else
		{
			element.classList.remove(value);
		}
	}
	allBorders(name){
		for(let border of Array.from(this.borders))
		{
			if (border.getAttribute("data-border") == name)return border;
		}
	}
	allInput(name){
		for(let input of Array.from(this.inputs))
		{
			if (input.getAttribute("data-input") == name)return input;
		}
	}
	allSpan(name){
		for(let span of Array.from(this.spans))
		{
			if (span.getAttribute("data-span") == name)return span;
		}
	}
	checkValueIfAllSpace(input)
	{
		let spaceCount = 0;
		for(let letter of Array.from(input.value))
		{
			if (letter == " ")spaceCount += 1;
		}
		return input.value.length == spaceCount;
	}
	checkIfNotLetters(input)
	{
		let letters = /^[a-zA-Z ]+$/;
		if(letters.test(input.value) == false)return true;
	}
	checkEmailFormat(input)
	{
		let emailValid = /^[a-zA-Z0-9._]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		if(emailValid.test(input.value) == false)return true;
	}
	showError(name, message)
	{
		for(let span of Array.from(this.spans))
		{
			if (span.getAttribute("data-span") == name)
			{
				span.innerText = message;
				this.classList(this.allBorders(name), "remove", "border-white");
				this.classList(this.allBorders(name), "remove", "border-green");
				this.classList(this.allBorders(name), "add", "border-red");
			}
		}
	}
	hideError(name)
	{
		for(let span of Array.from(this.spans))
		{
			if (span.getAttribute("data-span") == name)
			{
				span.innerText = "";
				this.classList(this.allBorders(name), "remove", "border-white");
				this.classList(this.allBorders(name), "add", "border-green");
				
			}
		}
	}
	firstnameAndLastname(name)
	{
		if (this.allInput(name).value == "")
		{
			this.showError(name, this.thisFieldIsRequired);
		}
		else if(this.checkValueIfAllSpace(this.allInput(name)))
		{
			this.showError(name, this.allSpace);
		}
		else if(this.checkIfNotLetters(this.allInput(name)))
		{	
			this.showError(name, this.invalidformat+name);
		}
		else
		{
			this.hideError(name);
			return true;
		}
	}
	password(password, confirmPassword)
	{
		const pwd = this.allInput(password).value;
		const confirmPwd = this.allInput(confirmPassword).value;
		if (pwd == "")
		{
			this.showError(password, this.thisFieldIsRequired);
			return false;
		}
		else if(pwd != "")
		{
			if (pwd.length < 8)
			{
				this.showError(password, this.passwordLength);
				return false;
			}
			else if (pwd != confirmPwd)
			{
				if (confirmPwd == "")
				{
					this.hideError(password);
					return false;
				}
				else if (confirmPwd != "")
				{
					this.showError(password, this.passwordDntMatch);
					this.showError(confirmPassword, this.passwordDntMatch);
					return false;
				}
				else
				{
					this.hideError(password);
					return false;
				}
			}
			else
			{
				this.hideError(password);
				return true;
			}
		}
		else
		{
			return true;
		}
	}
	confirmPassword(password, confirmPassword)
	{
		const pwd = this.allInput(password).value;
		const confirmPwd = this.allInput(confirmPassword).value;
		if (confirmPwd == "")
		{
			this.showError(confirmPassword, this.thisFieldIsRequired);
			return false;
		}
		else if(confirmPwd != "")
		{
			if (confirmPwd.length < 8)
			{
				this.showError(confirmPassword, this.passwordLength);
				return false;
			}
			else if (confirmPwd != pwd)
			{
				if (pwd == "")
				{
					this.hideError(confirmPassword);
					return false;
				}
				else if (pwd != "") {
					this.showError(password, this.passwordDntMatch);
					this.showError(confirmPassword, this.passwordDntMatch);
					return false;
				}
				else{
					this.hideError(confirmPassword);
					return false;
				}
			}
			else
			{
				this.hideError(confirmPassword);
				return true;
			}
		}
		else
		{
			return true;
		}
	}
	validatePassword(password, confirmPassword)
	{	
		let pwd = this.allInput(password).value;
		let confirmPwd = this.allInput(confirmPassword).value;
		if (pwd != "" && confirmPwd != "")
		{
			if (pwd.length >= 8 && confirmPwd.length >= 8)
			{
				if (pwd == confirmPwd)
				{
					this.hideError(password);
					this.hideError(confirmPassword);
					return true;
				}
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	email(name)
	{	
		if (this.allInput(name).value == "")
		{
			this.showError(name, this.thisFieldIsRequired);
		}
		else if(this.checkValueIfAllSpace(this.allInput(name)))
		{
			this.showError(name, this.allSpace);
		}
		else if(this.checkEmailFormat(this.allInput(name)))
		{	
			this.showError(name, this.invalidformat+name);
		}
		else if(this.validateEmail())
		{
			this.showError(name, this.emailExist);
		}
		else
		{
			this.hideError(name);
			return true;
		}
	}
	validateEmail()
	{
		const data = {
			"email": this.allInput("email").value,
		}
		const url = `validate-email-subs=${JSON.stringify(data)}`;
		this.transferData.validateEmail(url);
	}
	subscribeProcess()
	{
		this.allInput("firstname").addEventListener("keyup", () => 
		{
			this.firstnameAndLastname("firstname");
		});
		this.allInput("lastname").addEventListener("keyup", () => 
		{
			this.firstnameAndLastname("lastname");
		});
		/*this.allInput("password").addEventListener("keyup", () => 
		{
			this.password("password", "confirm-password");
			this.validatePassword("password", "confirm-password");
		});
		this.allInput("confirm-password").addEventListener("keyup", () => 
		{
			this.confirmPassword("password", "confirm-password");
			this.validatePassword("password", "confirm-password");
		});*/
		this.allInput("email").addEventListener("keyup", () => 
		{
			this.email("email");
		});	
	}
	subscribe()
	{
		this.subscribeButton.addEventListener("click", () => 
		{
			event.preventDefault();
			const firstname = this.firstnameAndLastname("firstname");
			const lastname = this.firstnameAndLastname("lastname");
			/*const validatePassword = this.validatePassword("password", "confirm-password");
			const password = this.password("password", "confirm-password");
			const confirmPassword = this.confirmPassword("password", "confirm-password");*/
			const email = this.email("email");
				
			if(firstname == true && lastname ==  true && email == true)
			{	
				
				const data = {
					"firstname": this.allInput("firstname").value,
					"lastname": this.allInput("lastname").value,
					/*"password": this.allInput("password").value,*/
					"email": this.allInput("email").value,
				}
				const url = `signup=${JSON.stringify(data)}`;
				this.transferData.signupData(url);
				return true;	
			}
			else
			{
				return false;
			}
		});
		
	}
	login()
	{	
		this.loginButton.addEventListener("click", () => 
		{	
			event.preventDefault();
			const email = this.allInput("email").value;
			const password = this.allInput("password").value;
			const data = {
					"email": this.allInput("email").value,
					"password": this.allInput("password").value	
				}
				const url = `login=${JSON.stringify(data)}`;
				this.transferData.loginData(url);
		});

	}
	start()
	{
		return this.subscribeProcess();
	}
}