<!DOCTYPE html>
<html>
<head>
	<title>PhotoShare</title>
    <link rel="stylesheet" type="text/css" href="../css/Style.css" />
	<meta charset="UTF-8">
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
				<li class="t"><a class="navlinks" href="mhome.php" >Home</a></li>
				<li class="t"><a class="navlinks active" href="mhome.php" >Profile</a></li>
				<li class="t"><a class="navlinks" href="../xhtml/gallery.html">Gallery</a></li>
				<li class="t"><a class="navlinks" href="../xhtml/contactus.html">Contact Us</a></li>
			</ul>
			<div id="search-link" onclick="search_form()"></div>
		</div>
		<!--Ends navigation bar container-->
		
		<!--Banner container for login link-->		
		<div id="top-banner-right">
			<div id="banner-far-right" ></div>
			
			<ul id="nav-login">
				<li id="login" onclick="loginform()"><a class="navlinks" onclick="loginform()"><img src="../images/lock.png" alt="Login" class="nav-img" />&nbsp;Account</a></li>
			</ul>
		    
			
		</div>
        <!--Ends login container-->
        
					
		<!--Container for page content-->
        <div id="body">
			<!--Slideshow container-->
            <div id="profileinfo-container">
			
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
					
				<!--	
                <div class="mySlides">
                    <img class="slideImg" src="../images/topicbanner1.png" alt="Ad Banner" />
                </div>
    
				<div class="mySlides">
					<img class="slideImg" src="../images/topicbanner2.png" alt="Ad Banner" />
				</div>
				-->
				<div id="profilepic">
					<div id="profilepic-img">
					<img src="../profilepic/new.jpg" alt="Profile Pic" class="profilepic-img" />
					</div>
				</div>
				<div id="profileinfo">
					<div id="profileinfo-info">
						<div id="profile-username"><p>Username</p></div>
						<div id="profile-fullname"><p>Full Name</p></div>
						<div id="profile-bio"><p>My name is fullname. I am from Awesome Land because I am awesome like that.</p></div>
					</div>
				</div>
				
            </div>
			<!--Ends Slide Container-->
			<!--Modal code learned from https://www.w3schools.com/howto/howto_css_modals.asp*/-->
			<!-- The Modal -->
			<div id="myModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span class="close" onclick="closemodal()">&times;</span>
					<p id="login_err"></p>
				</div>
			</div>
			
			<!--Body text container-->
			<div id="body-text">
							
				<div class="topic-container">
				<!--
					<div class="left-topic"><img src="../images/lefttopic.png" alt="banner" class="topicimg" /></div>
					<div class="topic"><h1 class="topic-heading">Gallery</h1></div>
					<div class="right-topic"><img src="../images/righttopic.png" alt="banner" class="topicimg" /></div>
				-->
				</div>
				<!--Ends Gallery Topic-->
				
				<div class="gallery-photos">
					<!--First Row Begins-->
					<div class="profile-thumbnail">
						<img src="../images/uploads/gyuire.jpg" alt="Sea Shells on the Beach" class="profile-img" onclick="changephoto()"/>
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/lonetree.jpg" alt="A Lone Tree" class="profile-img" onclick="changephoto()"/>
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/maracaslookout.jpg" alt="Maracas Bay Lookout" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/nylonpool.jpg" alt="Nylon Pool" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/buda.jpg" alt="Buddha Status" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/dc.jpg" alt="Abraham Lincoln" class="profile-img" onclick="changephoto()" />
					</div>
					<!--First Row Ends-->
			<!--
					<!--Rows 2-5 - First Column Begins->
					<div id="gallery-thumbnail-col1">
						<div class="gallery-thumbnail">
							<img src="../images/uploads/kyoto1.jpg" alt="Kyoto Japan" class="gallery-img" onclick="changephoto()"/>
						</div>
						<div class="gallery-thumbnail">
							<img src="../images/uploads/japan1.jpg" alt="Japan" class="gallery-img" onclick="changephoto()" />
						</div>
						<div class="gallery-thumbnail">
							<img src="../images/uploads/japan2.jpg" alt="Japan" class="gallery-img" onclick="changephoto()" />
						</div>
						<div class="gallery-thumbnail">
							<img src="../images/uploads/japan3.jpg" alt="Japan" class="gallery-img" onclick="changephoto()" />
						</div>
					</div>
					<!--Rows 2-5 - First Column Ends->
					<!--Rows 2-5 - 2nd - 5th Column Begins->
					<div class="gallery-thumbnail-col2-5" >
						<img src="../images/uploads/nylonpool.jpg" alt="Nylon Pool" class="gallery-img-col2-5" id="tochange" />
					</div>
					<!--Rows 2-5 - 2nd - 5th Column Ends->
					<!--Rows 2-5 - Sixth Column Begins->
					<div class="gallery-thumbnail">
						<img src="../images/uploads/ninja.jpg" alt="Ninja Costumes" class="gallery-img" onclick="changephoto()" />
					</div>
					<div class="gallery-thumbnail">
						<img src="../images/uploads/japan4.jpg" alt="Japan" class="gallery-img" onclick="changephoto()" />
					</div>
					<div class="gallery-thumbnail">
						<img src="../images/uploads/london1.jpg" alt="Man Playing Tuba" class="gallery-img" onclick="changephoto()"/>
					</div>
					<div class="gallery-thumbnail">
						<img src="../images/uploads/hoover.jpg" alt="Hoover Dam" class="gallery-img" onclick="changephoto()" />
					</div>
					<!--Rows 2-5 - Sixth Column Ends->
			-->
					<!--Sixth Row Begins-->
					<div class="profile-thumbnail">
						<img src="../images/uploads/pigeonpoint1.jpg" alt="Pigeion Point Tobago" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/tokyo.jpg" alt="Tokyo Japan" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/tobago.jpg" alt="Store Bay Tobago" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/pigeonpoint2.jpg" alt="Pigeon Point Tobago" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/sando.jpg" alt="San Fernando" class="profile-img" onclick="changephoto()" />
					</div>
					<div class="profile-thumbnail">
						<img src="../images/uploads/jet.jpg" alt="Military Aircrafts" class="profile-img" onclick="changephoto()" />
					</div>
					<!--Sixth Row Ends-->
					
					
					<div id="body-footer"></div>
				</div>
				<!--Ends Gallery Text-->
				
			</div>
			<!--Ends Body Text Container-->
		</div>
		<!--Ends page content container-->             
         
    </div>
	<!--Ends Main Container-->
	
	<!--Footer Container-->
    <div id="footer">
		<span id="footer-text-left">Copyright &#169; 2018 PhotoShare Inc. All rights reserved.</span><span id="footer-text-right"><a href="../index.html">Home</a>&nbsp;|&nbsp;<a href="gallery.html">Gallery</a>&nbsp;|&nbsp;<a href="contactus.html">Contact Us</a>&nbsp;|&nbsp;<a href="registration.php">Register</a></span>
	</div>
	<!--Ends Footer Container-->
    	
    <!--script loaded after the page is loaded-->
    <script src="../js/slideshow1.js"></script>
	
</body>
</html>