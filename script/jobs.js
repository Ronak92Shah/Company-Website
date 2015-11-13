/**
* Author: Ronak Shah
* Purpose: Java Script for Assignment-2
* Created: 03/10/2014
* Last updated: 05/10/2014
*/

/*get variables from form and check rules*/
function validate(){

var errMsg = "";  /* stores the error message */
var result = true;  /* assumes no errors */

/*get values from the form*/

var fName = document.getElementById("fname").value;
var lName = document.getElementById("lname").value;
var dob = document.getElementById("dob").value;
var streetAddr = document.getElementById("streetaddr").value;
var suburb = document.getElementById("suburb").value;
var postcode = document.getElementById("postcode").value;
var phoneNo = document.getElementById("phnno").value;
var state = document.getElementById("state").value;
var otherSkill = document.getElementById("skill").value;
var email = document.getElementById("emailid").value;
var skill = document.getElementById("skill").value;

/*get status from the form*/

var microsoftOffice = document.getElementById("microsoftoffice").checked;
var touchTyping = document.getElementById("touchtyping").checked;
var documentationSkill = document.getElementById("documentationskill").checked;
var web = document.getElementById("web").checked;
var dotNet = document.getElementById("dotnet").checked;
var java = document.getElementById("java").checked;
var otherSkills = document.getElementById("otherskills").checked;

/*store value in the variable*/
var letter = /^[A-Za-z]+$/;
var number = /^[0-9]+$/;
var date = dob.split("/");

/*Validate first name */

if(fName.match(letter)){ /*for alphabet*/
if((fName.length) <= 15){ /*for length*/
}else{
errMsg =errMsg.concat("First Name Should not contain more than 15 characters!\n");
result = false;
}
}else{
errMsg =errMsg.concat("First Name Should contain only alphabets!\n");
result = false;
}

/*Validate Second name*/

if(lName.match(letter)){ /*for alphabet*/
if((lName.length) <= 25){ /*for length*/
}else{
errMsg =errMsg.concat("Last Name Should not contain more than 25 characters!\n");
result = false;
}
}else{
errMsg =errMsg.concat("Last Name Should contain only alphabets!\n");
result = false;
}

/*Validate date*/

	if(date[0] <=31 && date[0] >= 1 && date[1] >= 1 && date[1] <= 12 && date[2] >= 1 && date[2] <= 2014 ){		
	}else{errMsg +="Wrong date.\n";
		result = false;}
		
/*Validate Adders*/

if((streetAddr.length) > 50){ /*for length*/
errMsg =errMsg.concat("Street Address should not contain for than 50 characters.\n");
result = false;
}

if((suburb.length) > 25){ /*for length*/
errMsg =errMsg.concat("Suburb/Town Address should not contain for than 25 characters.\n");
result = false;
}

if(postcode.match(letter)){ /*for letter*/
errMsg = errMsg.concat("postcode must be integer.\n");
result = false;

}

if((postcode.length) != 4){ /*for length*/
errMsg = errMsg.concat("postcode should contain exactly 4 characters .\n");
result = false;
}

/*Now validate state and postcode depending upon the first digit entered in postcode*/

if(state == "vic"){
if(postcode[0] == 3 || postcode[0] == 8){
}else
{errMsg = errMsg.concat("Wrong Postcode or state select the correct one\n");
result = false;}
}


if(state == "nsw"){
if(postcode[0] == 1 || postcode == 2){
}else{
errMsg = errMsg.concat("Wrong Postcode or state select the correct one\n");
result = false;
}
}


if(state == "qld"){
if(postcode[0] == 4 || postcode[0] == 9){
}else{
errMsg = errMsg.concat("Wrong Postcode or state select the correct one\n");
result = false;
}
}

if(state == "nt" || state == "act"){
if(postcode[0] != 0){
errMsg = errMsg.concat("Wrong Postcode or state select the correct one\n");
result = false;
}
}

if(state == "wa"){
if(postcode[0] != 6){
errMsg = errMsg.concat("Wrong Postcode or state select the correct one!\n");
result = false;
}
}

if(state == "sa"){
if(postcode[0] != 5){
errMsg = errMsg.concat("Wrong Postcode or state select the correct one!\n");
result = false;
}
}

if(state == "tas"){
if(postcode[0] != 7){
errMsg = errMsg.concat("Wrong Postcode or state select the correct one!\n");
result = false;
}
}

emailFormat = /^[A-Za-z]+@[A-Za-z]+.[A-Za-z]+$/;
if(email.match(!(emailFormat))){
errMsg = errMsg.concat("Wrong email!\n");
result = false;
}


if(phoneNo.match(number)){
if((phoneNo.length) == 10){
}else{
errMsg =errMsg.concat("Phone Number Should contain 10 digits!\n");
result = false;
}
}else{
errMsg =errMsg.concat("Phone No should not contain alphabets!\n");
result = false;
}

if(!microsoftOffice && !touchTyping && !documentationSkill && !web && !dotNet && !java && !otherSkills)
{
errMsg = errMsg.concat("At-least select 1 skill!\n");
result = false;
}

if(otherSkills == true){
if(skill.trim().length < 1 ){
errMsg = errMsg.concat("Please type other skills possessed by you in text area\n");
result = false;

}
}

/*if conditions not matched then execute this */

if (result == false){
alert(errMsg);
}

return result;
}

/*Store the reference number and job title in local storage from job description form*/
function store_user1 ()
{
localStorage.job1Ref = document.getElementById("job1ref").value;
//alert(localStorage.job1Ref);
localStorage.joblTitles = document.getElementById("job1title").value;
//alert(localStorage.job1Titles);
}

/*Store the reference number and job title from local storage to enquire.html */
function prefill_form(){
document.getElementById("ref").value = localStorage.job1Ref;
document.getElementById("jobtitle").value = localStorage.joblTitles;
//alert(localStorage.job1Ref);
}


/* link HTML elements to corresponding event function */
function init() {
/* Execute this depending upon with which job you applying for*/
if(document.getElementById("job1form")) {

	var job1Form = document.getElementById("job1form");
	job1Form.onsubmit = store_user1;
	}
	else if(document.getElementById("survey")) { 
	var surVey = document.getElementById("survey"); // link the variable to the HTML element
		surVey.onsubmit = prefill_form(); // pre-fill the form with reference no and job title
		surVey.onsubmit = validate; // assigns functions to corresponding events 
		
}

}


window.onload = init;
