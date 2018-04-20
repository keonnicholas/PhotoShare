

<!DOCTYPE html>
<html>
<head>
	<title>PhotoShare</title>
    <link rel="stylesheet" type="text/css" href="../css/Style.css" />
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="10; URL=../index.html" /><!--learned from https://www.w3schools.com/tags/att_meta_http_equiv.asp-->
</head>
    
<body onload="RUN()" onclick="hideme()">
    
	<div id="main-container">
		
		<!--Banner container for logo-->
		<div id="top-banner-left">
			<div id="banner-left">
				<a href="../index.html"><img id="logoImg" src="../images/logo2.png" alt="logo"/></a>
			</div>
		</div>
		<!--Ends logo container-->
		
		<!--Banner contains red double horizontal lines-->
		<div id="top-banner-left2"></div>
		<!--Ends red horizontal lines container-->
		
		<!--Banner container for navigation bar-->
		<div id="top-banner-middle">
			<div id="banner-right"></div>
			<ul id="nav-options">
				<li class="t"><a class="navlinks" href="../index.html" >Home</a></li>
				<li class="t"><a class="navlinks " href="gallery.html">Gallery</a></li>
				<li class="t"><a class="navlinks active" href="contactus.html">Contact Us</a></li>
			</ul>
			<div id="search-link" onclick="search_form()"></div>
		</div>
		<!--Ends navigation bar container-->
		
		<!--Banner container for login link-->		
		<div id="top-banner-right">
			<div id="banner-far-right" ></div>
			<ul id="nav-login">
				<li id="login" onclick="loginform()"><a class="navlinks" onclick="loginform()"><img src="../images/lock.png" alt="Login" class="nav-img" />&nbsp;Login</a></li>
			</ul>
		</div>
		<!--Ends login container-->
        
					
		<!--Container for page content-->
		<div id="body">
			<!--Slideshow container-->
            <div>
			
				<div id="login-form-container" onmouseenter="opacityplus()" onclick="formfocus()">
					<form method="POST" id="Logon" name="Logon" onsubmit="return validateLogin()">
						<input type="text" placeholder="Username" name="username" id="username" size="25" maxlength="20" class="username"/><br />
						<input type="password" placeholder="Password" name="password" id="password" size="25" maxlength="12" class="password" /><br />
						<button class="login_button" type="submit" title=" " id="loginbtn">Log On</button><br />
						<a href="registration.php" id="reglink"><span class="login_button" id="registerbtn">Register</span></a>
					</form>
					<p class="forgot-sign-in"> <a href="#" class="forgot-id">Forgot ID&nbsp;|&nbsp;Password</a></p>
              	</div>
				
				<div id="search-container" onmouseenter="opacityplus()" onclick="formfocus()">
					<form method="POST" id="searchform" name="searchform">
						<input type="text" placeholder="How can we help you?" name="search" id="search" size="25" maxlength="20" class="username"/>&nbsp;
						<button type="button" title=" " id="searchbtn">Search</button>
					</form>
				</div>
					
			</div>
			<!--Ends Slide Container-->
			
			<!--Body text container-->
			<div id="body-text">
				<h3 id="welcome">Welcome <?php echo "$_GET[fname] $_GET[lname]"?>, </h3>
				<p class="para">
	                Thank you for choosing PhotoShare. <br />Please check your email for verification. 
	            </p>
	            <p  class="para">
	                Your page will be redirected shortly. If your page does not redirect, click <a href="../index.html">here</a>
	            </p>
				<div id="reg-body-footer"></div>  
			</div>
				<!--Ends Contact Us Text-->
				
		</div>
		<!--Ends Body Text Container-->
	</div>
	<!--Ends page content container-->             
        
		
    <!--Footer Container-->
    <div id="footer">
		<span id="footer-text-left">Copyright &#169; 2018 PhotoShare Inc. All rights reserved.</span><span id="footer-text-right"><a href="../index.html">Home</a>&nbsp;|&nbsp;<a href="gallery.html">Gallery</a>&nbsp;|&nbsp;<a href="contactus.html">Contact Us</a>&nbsp;|&nbsp;<a href="registration.php">Register</a></span>
	</div>
    <!--Ends Footer Container-->
        
	
    	
    <!--script loaded after the page is loaded-->
    <script src="../js/slideshow1.js"></script>
	
</body>
</html>