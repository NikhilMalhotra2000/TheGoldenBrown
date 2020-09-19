var userName;
var a;

function login(){
	  a=document.getElementById("user").value;
	userName=a;
	
	
}




function checkUserName(){
if(userName==undefined)
{}
else
document.getElementById("userInfo").innerHTML=userName;
}

function adfunction(){
	alert("These ads are based on your interest or the websites you might have visited. ");
	
}