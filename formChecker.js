function resetButton()
{
	document.getElementById("username").value = "";
	document.getElementById("password").value = "";
	document.getElementById("7 Day").checked = false;
	document.getElementById("Three Day").checked = false;
	document.getElementById("Over Night").checked = false;
	document.getElementById("item1").value = "";
	document.getElementById("item2").value = "";
	document.getElementById("item3").value = "";
}

function submitButton()
{
	let username = checkUsername();
	let password = checkPassword();
	let shipping = checkShipping();
	let items = checkItems();
	
	let errorMessage = "";

	if(!username)
	{
		errorMessage += "Username must be an email address\n";
	}
	
	if(!password)
	{
		errorMessage += "Please input a password\n";
	}
	
	if(!shipping)
	{
		errorMessage += "Please choose a shipping option\n";
	}
	
	if(!items)
	{
		errorMessage += "Please make sure that item quantities are zero or greater\n";
	}
	
	if(username && password && shipping && items)
	{
		return(true);
	}
	else
	{
		window.alert(errorMessage);
		return(false);
	}
}

function checkUsername()
{
	let username = document.getElementById("username").value;
	
	let atIndex = username.indexOf("@");
	let com = username.slice(-4);
	
	return((com == ".com") && (atIndex != -1));
}

function checkPassword()
{
	let password = document.getElementById("password").value;
	
	return(password != "");
}

function checkShipping()
{
	let shipping1 = document.getElementById("7 Day").checked;
	let shipping2 = document.getElementById("Three Day").checked;
	let shipping3 = document.getElementById("Over Night").checked;
	
	return(shipping1 || shipping2 || shipping3);
}

function checkItems()
{
	let item1 = document.getElementById("item1").value;
	let item2 = document.getElementById("item2").value;
	let item3 = document.getElementById("item3").value;
	
	if((item1 == "") || (item2 == "") || (item3 == ""))
	{
		return(false);
	}
	
	return((item1>=0) && (item2>=0) && (item3>=0));
}
