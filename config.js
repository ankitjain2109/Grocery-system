// JavaScript Document

function valid()
{
	if(document.f.email1.value=="")
	{
		alert("Re-enter Your mail id");
		document.f.email1.focus();
		return false;
	}
	
	if(document.f.first_name.value==""|| (/^([A-Za-z ])*$/.test(document.f.first_name.value)==false))
	{
		alert("Re-enter Your first name");
		document.f.first_name.focus();
		return false;
	}	
	if(document.f.last_name.value=="" || (/^([A-Za-z ])*$/.test(document.f.last_name.value)==false) )
	{
		alert("Re-enter Your last name");
		document.f.last_name.focus();
		return false;
	}
	if(document.f.house.value=="" )
	{
		alert("Enter Your house no and details");
		document.f.house.focus();
		return false;
	}
	if(document.f.address.value=="")
	{
		alert("Enter Your address details ");
		document.f.address.focus();
		return false;
	}
	
	if(document.f.place.value=="" || (/^([A-Za-z])*$/.test(document.f.place.value)==false))
	{
		alert("Enter Your place where you live");
		document.f.place.focus();
		return false;
	}
	if(document.f.pincode.value=="" || (/^([0-9])*$/.test(document.f.pincode.value)==false))
	{
		alert("Enter Your pincode");
		document.f.pincode.focus();
		return false;
	}
	
	if(document.f.pwd.value=="" )
	{
		alert("Enter Your Password");
		document.f.pwd.focus();
		return false;
	}	
	
	if(document.f.dob.value=="")
	{
		alert("Enter Your date of birth");
		document.f.dob.focus();
		return false;
	}
	
	if(document.f.n.value=="")
	{
		alert("Enter the confirmation text below");
		document.f.n.focus();
		return false;
	}
	
	if(document.f.conf.value=="")
	{
		alert("Enter Your confirm password");
		document.f.conf.focus();
		return false;
	}
	
	if(document.f.secret_ques.value=="")
	{
		alert("Enter Your secret answer");
		document.f.secret_ques.focus();
		return false;
	}

	if(document.f.mob.value=="" || (/^([0-9]{10})*$/.test(document.f.mob.value)==false))
	{
		alert("Enter Your mobile no");
		document.f.mob.focus();
		return false;
	}
	if(document.f.n1.value!=document.f.n.value)
	{
		alert("Captcha Does not Match");
		document.f.n.focus();
		return false;
	}
	
}
