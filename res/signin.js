
function check_val()
{
	//alert("Hello World!");
	var form = document.signin;

	console.log(isNaN(form.fname.value));
	console.log(isNaN(form.sname.value));

	if(form.Bdate.value == "Date")
	{
		alert("Please enter the birth date.");
	}
	if(form.Bmonth.value == "Month")
	{
		alert("Please enter the birth month.");
	}
	if(form.Byear.value == "Year")
	{
		alert("Please enter the birth year.");
	}

	if(isNaN(form.mnum.value))
	{
		alert("Please enter a correct phone number.");
		form.mnum.focus();
	}

	if(form.email.value == "" || form.email.value == null)
	{
		alert("Please enter your email.");
		form.email.focus();
	}

	if(isNaN(form.fname.value) == false)
	{
		alert("First Name must be letters");
		form.fname.focus();
		return false;
	}
	else if(isNaN(form.sname.value) == false)
	{
		alert("Surname must be letters");
		form.sname.focus();
		return false;
	}
	else if(form.password.value == "" || form.password.value == null)
	{
		alert("Please enter your password.");
		form.password.focus();
	}
	else if(form.password.value !=  form.passwordCom.value)
	{
		alert("Comformation password and password must be the same.");
		form.passwordCom.focus();
	}
	else
	{
		alert("[SINGIN SUCESSFUL]")
		document.getElementById("signin").submit();
	}
}

function check_log_val()
{
	var form = document.signin;

	if(form.email.value == "" || form.email.value == null)
	{
		alert("Please enter your email.");
		form.email.focus();
	}
	else if(form.password.value == "" || form.password.value == null)
	{
		alert("Please enter your password.");
		form.password.focus();
	}
	else
	{
		alert("[LOGIN SUCESSFUL]");
		document.getElementById("login").submit();
	}
}

function check_dest_val() {
	var form = document.destSel;

	if(form.dest.value == "" || form.dest.value == null)
	{
		alert("Please enter your destination.");
		form.dest.focus();
	}
	else{
		document.getElementById("desti").submit();
	}
}

function checkout_val(){
	var form = document.checkout;

	if(form.firstname.value == "" || form.firstname.value == null)
	{
		alert("Please enter your first name.");
		form.firstname.focus();
	}
	else{
		alert("[CHECKOUT SUCCESSFUL]")
		document.getElementById("chkout").submit();
	}
}