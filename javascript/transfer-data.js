class TransferData
{
	constructor()
	{	
		this.path = "../php/api/request.php?";
		this.xhr = new XMLHttpRequest();
	}

	ajax(calllback, methodName, url)
	{
		this.xhr.onreadystatechange = function()
		{
		    if (this.readyState == 4 && this.status == 200)
		    {
		        try
		        {	
		        	console.log(JSON.parse(this.responseText));
		        	calllback(methodName, JSON.parse(this.responseText));
		        }
		        catch(e)
		        { 
		        	console.log(`Error ni: ${e}`);
		        }
    	    }
    	}
    	this.xhr.open("POST", this.path, true);
    	this.xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	this.xhr.send(`${url}`);
    }
    // calllback function
	serverResponse(methodName, responseText)
	{
		const evt = new ErrorValidator();
		const thisEmailExist = "*this email is already Subscribe";
		const emailAndPasswordDntMAtch = "*email and password didn't match";

		if (methodName == "signup" || methodName == "login")
		{
			if (methodName == "signup") {
				if (responseText == true)
				{
					document.location.href = "thankyou.php";
				}
				else if(responseText == "emailExisted"){
					evt.showError("email", thisEmailExist);	
				}
				else
				{
					alert(`Failed ${methodName}.`);
				
				}
			}
			else if(methodName == "login")
			{
				if (responseText == true)
				{
					document.location.href = "admin-page.php";
				}
				else
				{
					evt.showError("email", emailAndPasswordDntMAtch);	
					evt.showError("password", emailAndPasswordDntMAtch);
				}

			}	
		}
		else if (methodName == "validate-email")
		{
			if(responseText == true)
			{
				evt.showError("email", thisEmailExist);	
			}
		}
	}
	// callback function
	validateEmail(url)
	{	
		//validate-email=json ang url
		this.ajax(this.serverResponse, "validate-email", url);
	}
	signupData(url)
	{	
		//signup-data=json ang url
		this.ajax(this.serverResponse, "signup", url);
	}
	loginData(url)
	{	
		//login=json ang url
		this.ajax(this.serverResponse, "login", url);
	}
}