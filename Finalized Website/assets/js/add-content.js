// JavaScript Document
var today = new Date();
var hourNow = today.getHours();
var greeting;
var eltag=document.getElementById("greetingDiv");

if (hourNow > 18) {
	greeting = 'good evening!';
} else if (hourNow > 12) {
	greeting = 'good afternoon!';
} else if (hourNow > 0) {
	greeting = 'good morning!';
} else {
	greeting = 'Welcome!';
}
eltag.innerHTML= '<h3>' + greeting + '</h3';