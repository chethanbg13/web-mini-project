<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/icon-font.css" type="text/css" />
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript">
function logout() {
    var r = confirm("Do you really want to log out?");
    if (r) {
       window.location.href="http://localhost/musicplayer/index.php";
    }
}
</script>
</head> 
    	 
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="home.php">Musi<span>c</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="home.php">M </a>
			</div>

			<!--logo and iconic logo end-->
					<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="home.php"><i class="lnr lnr-home"></i><span>Home</span></a></li>
						<li><a href="radio.php"><i class="camera"></i> <span>Radio</span></a></li>

						<li><a href="albums.php"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>						
						<li class="menu-list"><a href="contact.php"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
							<ul class="sub-menu-list">
								<li><a href="contact.php">Location</a> </li>
							</ul>
						</li>     
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form action="#" method="post">
										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( "sb-search" ) );
										</script>
									<!-- //search-scripts -->
											 <!---->
											  <div class="col-md-4 player">
													<div class="audio-player">
														<audio id="audio-player"  controls="controls">
														<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
																<source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
																<source src="media/Georgia.ogg" type="audio/ogg"></source>
																<source src="media/Georgia.mp3" type="audio/mpeg"></source></audio>
														</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $("#audio-player").mediaelementplayer({
														alwaysShowControls: true,
														features: ["playpause","progress","volume"],
														audioVolume: "horizontal",
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
													<!---->
 	 

												<!--//-->
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"><a id="loginButton"><span>Profile <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"></a>
														<div id="loginBox"> 
													<form method="post" onClick="logout()" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<input type="submit" id="login" value="Logout" onClick="logout()">
																	</fieldset>
																<span><a href="#"></a></span>
														 </form>
													</div>
												</div>

											</div>
										<div class="clearfix"> </div>
								</div>
							<!-------->
							 	 
						</div>
					<div class="clearfix"></div>
				</div>
				<!--notification menu end -->
				<!-- //header-ends -->
				
							<div id="page-wrapper">
							
								<div class="inner-content">
								<div class="tittle-head">
											<h3 class="tittle">Find Us </h3>
											<div class="clearfix"> </div>
										</div>
									<!-- /contact-->
									<div class="contact">
									 <div class="contact-left">
										<iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1944.652251723826!2d77.54885886030034!3d12.888131039754974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3fef8f5f12f5%3A0xa7543252fdd317c3!2sCity%20Engineering%20colloge%20ground!5e0!3m2!1sen!2sin!4v1606367712180!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

									</div>
									<div class="contact-right">
										<p class="phn">+916361336452</p>
										<p class="phn">+918618010414</p>
										<p class="phn-bottom">CITY Engineering College
												<span>Kanakapura Road</span></p>
										
									</div>
									<div class="clearfix"> </div>
									<div class="contact-left1">
										<h3>Contact Us With <span>Any questions</span></h3>
										<div class="in-left">
										<form action="#" method="post">
												<p class="your-para">Your Name :</p>
														<input type="text" value="" onfocus="this.value = "";" onblur="if (this.value == "") {this.value = "";}" required="">
											
														<p class="your-para">Your Mail :</p>
														<input type="text" value="" onfocus="this.value = "";" onblur="if (this.value == "") {this.value = "";}" required="">
														<p class="your-para">Phone Number:</p>
														<input type="text" value="" onfocus="this.value = "";" onblur="if (this.value == "") {this.value = "";}" required="">

											</form>
										</div>
										<div class="in-right">
											<form>
												<textarea placeholder="" onfocus="this.value="";" onblur="if (this.value == "") {this.value = "";}" required=""></textarea>
												<input type="submit" value="Submit">
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>
													<div class="clearfix"> </div>
											<!-- //contact -->
											 	 <!-- /wthree-agile -->
														</div>
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->

					</div>
			  <!--body wrapper end-->
   <div class="footer two">
				<div class="footer-grid">
					<h3>Navigation</h3>
					<ul class="list1">
					  <li><a href="home.php">Home</a></li>
					  <li><a href="radio.php">All Songs</a></li>
					  <li><a href="albums.php">Albums</a></li>
					  <li><a href="radio.php">New Collections</a></li>
					  <li><a href="blog.php">Blog</a></li>
					  <li><a href="contact.php">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="contact.php">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
					 <div class="footer-grid">
						<h3>Newsletter</h3>
						<p class="footer_desc">AllMusic New Releases. Sign up for our free weekly email newsletter and get new featured albums delivered to your inbox.</p>
						<div class="search_footer">
						 <form>
						   <input type="text" placeholder="Email...." required="">
						  <input type="submit" value="Submit">
						  </form>
						</div>
					 </div>
					 <div class="footer-grid footer-grid_last">
						<h3>About Us</h3>
						<p class="footer_desc">Our mission is to maximise the opportunities for people to create and enjoy new music.</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp; +91-8618010414</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp; +91-6361336452</p>
						<p class="email">Email : &nbsp;<span><a href="mailto:chethanbg7795@gmail.com">chethanbg7795@gmail.com</a></span></p>
						
					 <div class="clearfix"> </div>
				</div>
			</div>
      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>