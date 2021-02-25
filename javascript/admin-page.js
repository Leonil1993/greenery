class AdminPage
{
	constructor()
	{
		this.ev = new ErrorValidator();
		this.td = new TransferData();
		this.menus = document.querySelectorAll(".menu");
		this.items = document.querySelectorAll(".item");
		this.items = document.querySelectorAll(".item");
		this.editButton = document.querySelectorAll(".edit-button");
	}
	allEditButton(name){
		for(let button of Array.from(this.editButton))
		{
			if (button.name == name)return button;
		}
	}
	allMenu(idName)
	{
		for(let menu of Array.from(this.menus))
		{
			if (menu.id == idName)return menu;
		}
	}

	removeAllExcept(idName)
	{
		for(let menu of Array.from(this.menus))
		{
			if (menu.id == idName)
			{
				this.ev.classList(this.allMenu(menu.id), "add", "active");
				for(let item of Array.from(this.items))
				{
					if (item.getAttribute("data-item") == idName)
					{
						this.ev.classList(item, "remove", "d-none");
					}
					else
					{
						this.ev.classList(item, "add", "d-none");
					}
				}
			}
			else
			{
				this.ev.classList(this.allMenu(menu.id), "remove", "active");
			}
		}
	}

	eventListener()
	{
		this.allMenu("logout").addEventListener("click", () =>
		{
			this.td.ajax(this.logoutCB, "logout", "logout");
		})
		this.allMenu("profile").addEventListener("click", () =>
		{
			this.removeAllExcept("profile");
		});
		this.allEditButton("update-info").addEventListener("click", () =>
		{
			event.preventDefault();
			this.updateInfo();
		});
		this.allEditButton("update-email").addEventListener("click", () =>
		{
			event.preventDefault();
			this.updateEmail();
		});
	}

	displayUserData(methodName, responseText)
	{	
		const tBody = document.querySelector("tbody");
		let html = "";
		for(let x = 0; x < responseText.length; x++)
		{	
			html += `<tr>`;
			html += `<td>${responseText[x].id}</td>`;
			html += `<td>${responseText[x].firstname}</td>`;
			html += `<td>${responseText[x].lastname}</td>`;
			html += `<td>${responseText[x].email}</td>`;
			html += `<td>`;
			html += `<button onclick='const adminPage = new AdminPage(); adminPage.edit(${responseText[x].id});' data-input='edit-button' id='update-details' class='menu input' type='submit' name='edit'>Edit</button>`;
			html += `<button onclick='const adminPage = new AdminPage(); adminPage.delete(${responseText[x].id});' data-input='delete-button' class='input' type='submit' name='delete' onclick='return false;'>Delete</button>`;
			html += `</td>`;
			html += `</tr>`;
		}
		tBody.innerHTML += html;
	}
	//callback sa edit
	displayEditData(id, responseText)
	{
		const ev = new ErrorValidator();
		ev.allInput("id").value = responseText[0].id; 
		ev.allInput("firstname").value = responseText[0].firstname; 
		ev.allInput("lastname").value = responseText[0].lastname; 
		ev.allInput("email").value = responseText[0].email;
	}

	edit(id)
	{
		event.preventDefault();
		this.removeAllExcept("update-details");
		const data = {"id":id};
		const url = `user-edit=${JSON.stringify(data)}`;
		this.td.ajax(this.displayEditData, id, url);
	}
	//callback function para sa mga update
	updateCB(methodName, responseText)
	{
		if (responseText === true)
		{
			if(methodName == "update-info")
			{
				alert("Firstname and Lastname Successfully Updated.");
				window.location.href = "admin-page.php";
			}
			else if(methodName == "update-email")
			{
				alert("Email Successfully Updated.");
				window.location.href = "admin-page.php";
			}
		}
		else
		{
			alert("Failed to Updated!");
		}	
	}
	//logout callback
	logoutCB(methodName, responseText)
	{	
		window.location.href = "home.php";
	}
	//method para sa mag update of info
	updateInfo()
	{	
		const firstname = this.ev.firstnameAndLastname("firstname");
		const lastname = this.ev.firstnameAndLastname("lastname");
		if (firstname == true && lastname == true)
		{
			const data = {
				"id":this.ev.allInput("id").value,
				"firstname":this.ev.allInput("firstname").value,
				"lastname":this.ev.allInput("lastname").value,
			}
			const url = `update-info=${JSON.stringify(data)}`;
			this.td.ajax(this.updateCB, "update-info", url);
		}
		
	}
	//method para sa mag update of info
	updateEmail()
	{	
		const email = this.ev.email("email");
		if (email == true)
		{
			const data = {
				"id":this.ev.allInput("id").value,
				"email":this.ev.allInput("email").value,
			}
			const url = `update-email=${JSON.stringify(data)}`;
			this.td.ajax(this.updateCB, "update-email", url);
		}
		
	}
	//callbac sa delete
	deleteAction(id, responseText)
	{
		//console.log(responseText);
		alert(`Account id of ${id} was Successfully Deleted`)
		window.location.href = "admin-page.php";
	}

	delete(id)
	{
		event.preventDefault();
		const data = {"id":id};
		const url = `user-delete=${JSON.stringify(data)}`;
		this.td.ajax(this.deleteAction, id, url);
	}
	//e disable ang enter key
	preventEnter()
	{
		document.addEventListener('keypress', (e) =>
		{
            if (e.keyCode === 13 || e.which === 13)
            {
                e.preventDefault();
                return false;
            } 
        });
	}
	start()
	{	
		this.td.ajax(this.displayUserData, "user-data", "user-data");
		this.eventListener();
		this.preventEnter();					    						
	}
}