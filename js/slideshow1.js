//on load this function is called
function RUN(){
	SlideShow();
	ShowCurrentSlide(0);
	}

var SlideShowIndexNum = 0;
var IndexNum = 0;

function SlideShow() {
    var SlideShowNodes = document.getElementsByClassName("mySlides");
	//loop to hide all slideshow images on the page
    for (var i = 0; i < SlideShowNodes.length; i++) {
		SlideShowNodes[i].style.display = "none";  
		}
	
	//sets index number back to 0 if index greater than or equals to the number of slides
    if (SlideShowIndexNum >= SlideShowNodes.length) {
		SlideShowIndexNum = 0;
		}  

	//set slideshow image at current index to display block
    SlideShowNodes[SlideShowIndexNum].style.display = "block"; 
	
	//increment index number before this function runs again to show next slide at next index
	SlideShowIndexNum++;
	
	//setTimeout code from: https://www.w3schools.com/jsref/met_win_settimeout.asp
	//this is a one time window object delay code. It calls for the SlideShow function to wait 7 seconds then run
	//it is placed at the end of this function creating an infinite loop.
    setTimeout(SlideShow, 7000); // Change slideshow image every 7 seconds
	}

//function to run when next or previous arrows are clicked
function NavSlides(IndexAt) {
	IndexNum += IndexAt;
	ShowCurrentSlide(IndexNum);
	}
//function to run when coresponding nav dots are clicked
function NavDots(IndexAt) {
	IndexNum = IndexAt;
	ShowCurrentSlide(IndexNum);
	}

//funtion to run to show the current slide at the index specified by the previous IndexNum initialization
function ShowCurrentSlide(IndexAt) {
  var SlideNodes = document.getElementsByClassName("mySlides1");
  var DotNodes = document.getElementsByClassName("dot1");
  
  //current slide index is greater than or equal to the number of slides, set index back to 0 to display first slide
  if(IndexAt >= SlideNodes.length) {
	  IndexNum = 0;
	}    
  
  //if current slide index is less than 0 make number of indexes equal to number of slides.
  if (IndexAt < 0) {
	  IndexNum = SlideNodes.length
	}
  
  //hide all slides
  for (var i = 0; i < SlideNodes.length; i++) {
      SlideNodes[i].style.display = "none";
	}
  
  //runs to remove classname active
  for (var i = 0; i < DotNodes.length; i++) {
	  //className.replace learned from https://www.w3schools.com/howto/howto_js_remove_class.asp
	  //This removes the class active from the list of classes assigned to each dot
      DotNodes[i].className = DotNodes[i].className.replace(" active", "");
	}
  
  //sets style back to diplay as block to the current indexed slideshow image
  SlideNodes[IndexNum].style.display = "block"; 

  //adds back the active class for the current indexed dot
  DotNodes[IndexNum].className += " active";
  
  }

//displays login form
function loginform(){
	var login = document.getElementById('login-form-container');
	event.stopPropagation(); //stopPropagation learned from https://www.wikitechy.com/tutorials/javascript/how-to-detect-a-click-outside-an-element
	login.style.opacity = ".7";
	login.style.display = "block";
	
	var search = document.getElementById('search-container');
	search.style.display = "none";
	
	}

//displays search form
function search_form(){
	var search = document.getElementById('search-container');
	event.stopPropagation(); //stopPropagation learned from https://www.wikitechy.com/tutorials/javascript/how-to-detect-a-click-outside-an-element
	search.style.opacity = ".7";
	search.style.display = "block";
	
	var login = document.getElementById('login-form-container');
	login.style.display = "none";
	
}

//changes opacity to 100% on mouse over
function opacityplus(){
	var login = document.getElementById('login-form-container');
	var search = document.getElementById('search-container');
	login.style.opacity = "1";
	search.style.opacity = "1";
}

//hides forms on window click
function hideme(){
	var login = document.getElementById('login-form-container');
	var search = document.getElementById('search-container');
	var modal = document.getElementById('myModal');
	
	login.style.display = "none";
	search.style.display = "none";
	modal.style.display = "none";
}


function formfocus(){
	event.stopPropagation();
}

//Validate registration form
function validateReg(){
	
	//decare variables in js with the keyword var
	var fn = document.getElementById('fname').value;
	var ln = document.getElementById('lname').value;
	var em = document.getElementById('email').value;
	var ph = document.getElementById('phone').value;
	var us = document.getElementById('uname').value; 
	var pw = document.getElementById('pwd').value;
	var cpw = document.getElementById('cpwd').value;
	var err = document.getElementById('err');
	err.innerHTML = "";
	err.style.color = "red";
	
	var fn_regex = /^[a-zA-Z'!-]{2,35}$/; //^ no content before this pattern; $ no content after this pattern
	var ln_regex = /^[a-zA-Z'!-]{2,35}$/;
	var em_regex = /^[a-zA-Z0-9._]{2,32}@[a-zA-Z0-9.]{3,20}.[a-zA-Z]{2,3}$/;
	var ph_regex = /^[0123456789]{7,14}$/;
	var us_regex = /^[a-zA-Z0-9_-]{2,35}$/;
	var pw_regex = /^[a-zA-Z0-9!#%()_-]{6,15}$/;
	
	
	
	if(fn.trim().length<1){
		err.innerHTML = "First Name is required";
		return false;
	}
	if(!fn_regex.test(fn)){
		//innerHTML any element tag that is not self closing
		//can modify the content of the tag
		err.innerHTML = "Please ensure your First Name only contains the following characters: A-z!'-";
		return false;
		
	}
	
	if(ln.trim().length<1){
		err.innerHTML = "Last Name is required";
		return false;
	}
	if(!ln_regex.test(ln)){
		err.innerHTML = "Please ensure your Last Name only contains the following characters: A-z!'-";
		return false;
	}
	if(em.trim().length<1){
		err.innerHTML = "Email is required";
		return false;
	}
	if(!em_regex.test(em)){
		err.innerHTML = "Please ensure your email is in the format: name@yourdomain.com";
		return false;
	}
	
	if(ph.trim().length<1){
		err.innerHTML = "Phone number is required";
		return false;
	}
	if(!ph_regex.test(ph)){
		err.innerHTML = "Please ensure your phone number is in the format: xxxxxxxxxx";
		return false;
	}
	
	if(us.trim().length<1){
		err.innerHTML = "Username is required";
		return false;
	}
	if(!us_regex.test(us)){
		err.innerHTML = "Please ensure your Username only contains the following characters: A-z0-9_-";
		return false;
	}
	if(pw.trim().length<1){
		err.innerHTML = "Password is required";
		return false;
	}
	if(!pw_regex.test(pw)){
		err.innerHTML = "Please ensure your Password is at least 6 characters long and only contains the following characters: A-z0-9!#%()_-";
		return false;
	}
	if(cpw.trim().length<1){
		err.innerHTML = "Please confirm password";
		return false;
	}
	if(!(pw == cpw)){
		err.innerHTML = "The password you entered does not match.";
		return false;
	}
	
	
	return true;
	
	
}

//validates password as user is typing
function check_pwd(){
	var pw = document.getElementById('pwd').value;
	var cpw = document.getElementById('cpwd').value;
	var err = document.getElementById('err');
	var pw_regex = /^[a-zA-Z0-9!#%()_-]{6,15}$/;
	err.innerHTML = "";
	err.style.color = "red";
	
	if(!pw_regex.test(pw)){
		err.innerHTML = "Please ensure your Password is at least 6 characters long and only contains the following characters: A-z0-9!#%()_-";
		
	}
	
	if(!(pw == cpw)){
		err.innerHTML = "The password you entered does not match.";
		
	}else{
		err.innerHTML = "Password matches.";
		err.style.color = "green";
		
	}
	
}

//Validates loin form
function validateLogin(){
	
	//decare variables in js with the keyword var
	
	var us = document.getElementById('username').value; 
	var pw = document.getElementById('password').value;
	var modal = document.getElementById('myModal');//Modal code learned from https://www.w3schools.com/howto/howto_css_modals.asp
	var span = document.getElementsByClassName("close")[0];
	var loginerr = document.getElementById('login_err');
	loginerr.innerHTML = "";
	loginerr.style.color = "red";
		
	var us_regex = /^[a-zA-Z0-9_-]{2,35}$/;
	var pw_regex = /^[a-zA-Z0-9!#%()_-]{6,15}$/;
	
	
	if(!us_regex.test(us)){
		modal.style.display = "block";
		loginerr.innerHTML = "Incorrect username or password entered.";
		loginerr.style.color = "red";
		
		return false;
	}
	
	if(!pw_regex.test(pw)){
		modal.style.display = "block";
		loginerr.innerHTML = "Incorrect username or password entered.";
		loginerr.style.color = "red";
		return false;
	}
	
		
	return true;
}

//closes the modal on close click
function closemodal(){
	var modal = document.getElementById('myModal');
	modal.style.display = "none";
}


//this function changes the main photo on gallery page depending on photo clicked
function changephoto(){
	var photo = document.getElementById('tochange');
	photo.src = event.target.src;
}

//validates contact us page
function validateContactus(){
	
	var fn = document.getElementById('fullname').value;
	var em = document.getElementById('email').value;
	var cm = document.getElementById('comments').value;
	var cerr = document.getElementById('con_err');
	cerr.innerHTML = "";
	cerr.style.color = "red";
	
	var fn_regex = /^[a-zA-Z'! -]{2,75}$/; //^ no content before this pattern; $ no content after this pattern
	var em_regex = /^[a-zA-Z0-9._]{2,32}@[a-zA-Z0-9.]{3,20}.[a-zA-Z]{2,3}$/;
	var cm_regex = /^[a-zA-Z0-9!#%()._ -]{2,1000}$/;
	
	if(!fn_regex.test(fn)){
		cerr.innerHTML = "* Please ensure your name only contains the following characters: A-z'!-";
		return false;
		
	}
	if(!em_regex.test(em)){
		cerr.innerHTML = "* Please ensure your email is in the format: name@yourdomain.com";
		return false;
		
	}
	
	
	if(!cm_regex.test(cm)){
		cerr.innerHTML = "* Please ensure your comment max is 400 of the following characters: a-zA-Z0-9!#%()._ -";
		return false;
		
	}
	
	return true;
}


