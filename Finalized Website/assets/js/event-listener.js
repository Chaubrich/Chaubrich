//var elMsg = document.getElementById('feedback');
var elFirstname = document.getElementById('firstname');
var elLastname = document.getElementById('lastname');
var elPhone = document.getElementById('phone');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elEmail = document.getElementById('email');
var elComments = document.getElementById('comments');
let mainDiv = document.getElementById;

function checkData(minLength,input_div,feedback)
{
	var elMsg = document.getElementById(feedback);
	var el = document.getElementById(input_div);
	if (el.value.length < minLength)
{
	elMsg.innerHTML = input_div.toUpperCase()+' must be at least '+minLength+' characters';
	mainDiv.classList.add("has-error");
}
else
{
	elMsg.innerHTML = '';
	mainDiv.classList.remove("has-error");
}
}

function checkP(minLength,input_div,feedback)
{
	var elMsg = document.getElementById(feedback);
	var el = document.getElementById(input_div);
	if (el.value.length < minLength)
{
	elMsg.innerHTML = input_div.toUpperCase()+' must be '+minLength+' digits';
	mainDiv.classList.add("has-error");
}
else
{
	elMsg.innerHTML = '';
	mainDiv.classList.remove("has-error");
	
}
}
function checkC(minLength,input_div,feedback)
{
	var elMsg = document.getElementById(feedback);
	var el = document.getElementById(input_div);
	if (el.value.length < minLength)
{
	elMsg.innerHTML = 'Please leave '+input_div.toUpperCase()+' to help us better assist you.';
	mainDiv.classList.add("has-error");
}
else
{
	elMsg.innerHTML = '';
	mainDiv.classList.remove("has-error");
	
}
}
function validateEmail (email,feedback)
{
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var elMsg = document.getElementById(feedback);
	let mainDiv = document.getElementById;
	if (email.value.match(validRegex))
		{
			elMsg.innerHTML = '';
			mainDiv.classList.remove("has-error");
		}
	else
		{
			elMsg.innerHTML = 'Please enter a valid email';
			mainDiv.classList.add("has-error");
		}
}
elUsername.addEventListener('blur', function() {
	checkData(5, 'username','unFeedback');
	},false);
elPassword.addEventListener('blur', function() {
	checkData(8, 'password','pwFeedback');
	},false);
elFirstname.addEventListener('blur', function() {
	checkData(2, 'firstname','unFeedbackFN');
	},false);
elLastname.addEventListener('blur', function() {
	checkData(2, 'lastname','unFeedbackLN');
	},false);
elPhone.addEventListener('blur', function() {
	checkP(10, 'phone','unFeedbackP');
	},false);
elEmail.addEventListener('blur', function() {
	validateEmail ('email');
	},false);
elComments.addEventListener('blur', function() {
	checkC (1, 'comments','unFeedbackC');
	},false);