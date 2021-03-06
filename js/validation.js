"use strict";
function validateemail(id)
{
	let field = id.value;
	let good = false;
	let msg = document.getElementById("emailmsg");
	if(field == "")
	{
		msg.innerHTML = "Please enter a valid email.";
		msg.className = "text-danger";
	}
	else
		if(!(/^(.+)@(.+)$/.test(field)))
		{
			msg.innerHTML = "Please enter a valid email.";
			msg.className = "text-danger";
		}
		else
		{
			good = true;
			msg.innerHTML = "";
		}
	return good;
}
function validatename(id)
{
	let field = id.value;
	let good = false;
	let msg = document.getElementById("namemsg");
	if(field == "")
	{
		msg.innerHTML = "Please enter your name.";
		msg.className = "text-danger";
	}
	else
	{
		good = true;
		msg.innerHTML = "";
	}
	return good;
}
function validateuser(id)
{
	let field = id.value;
	let good = false;
	let msg = document.getElementById("usermsg");
	if(field == "")
	{
		msg.innerHTML = "Please enter in your username.";
		msg.className = "text-danger";
	}
	else
	{
		good = true;
		msg.innerHTML = "";
	}
	return good;
}
function validatepwd(id)
{
	let field = id.value;
	let good = false;
	let msg = document.getElementById("pwdmsg");
	if(field == "")
	{
		msg.innerHTML = "Use 6 or more characters with a mix of letters, numbers, and symbols.";
		msg.className = "text-danger";
	}
	else
		if(!/^(?=.*\d)(?=.*[a-z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,20}$/.test(field))
		{
			msg.innerHTML = "Use 6 or more characters with a mix of letters, numbers, and symbols.";
			msg.className = "text-danger";
		}
		else
		{
			good = true;
			msg.innerHTML = "";
		}
	return good;
}
function validatepwd2(id)
{
	let field = id.value;
	let good = false;
	let msg = document.getElementById("pwdmsg");
	if(field == "")
	{
		msg.innerHTML = "Please enter your password.";
		msg.className = "text-danger";
	}
	else
		if(!/^(?=.*\d)(?=.*[a-z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,20}$/.test(field))
		{
			msg.innerHTML = "Please enter your password.";
			msg.className = "text-danger";
		}
		else
		{
			good = true;
			msg.innerHTML = "";
		}
	return good;
}
function validateregister(id)
{
	let nameId = document.getElementById("name");
	let emailId = document.getElementById("email");
	let userId = document.getElementById("uname");
	let pwdId = document.getElementById("pwd");
	if(validatename(nameId) && validateemail(emailId) && validateuser(userId) && validatepwd(pwdId))
	{
		return true;
	}
	else
		return false;
}

function validatelogin(id)
{
	let emailId = document.getElementById("email");
	let pwdId = document.getElementById("pwd");
	if(validateemail(emailId) && validatepwd2(pwdId))
	{
		return true;
	}
	else
		return false;
}
function validatephone(id)
{
	let field = id.value;
	let good = false;
	let msg = document.getElementById("phonemsg");
	if(field == "")
	{
		msg.innerHTML = "Phone Number required!";
		msg.className = "text-danger";
	}
	else
		if(!(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(field)))
		{
			msg.innerHTML = "Invalid Phone Number!";
			msg.className = "text-danger";
		}
		else
		{
			good = true;
			msg.innerHTML = "";
		}
	return good;
}

function validatecheckout(id)
{
	let emailId = document.getElementById("email");
	let phoneId = document.getElementById("phone");
	if(validateemail(emailId) && validatephone(phoneId))
	{
		return true;
	}
	else
		return false;
}