<!DOCTYPE HTML>
<html>
<head>
<title>Radio</title>
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
      
		<div class="left-side sticky-left-side">

		
			<div class="logo">
				<h1><a href="home.php">Musi<span>c</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="home.php">M </a>
			</div>

		
				<div class="left-side-inner">

				
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
				
			</div>
		</div>
		 	 
			
		<div class="main-content">
			<div class="header-section">
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
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
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( "sb-search" ) );
										</script>
											  <div class="col-md-4 player">
													<div class="audio-player">
														<audio id="audio-player"  controls="controls">
														<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
																<source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
																<source src="media/Georgia.ogg" type="audio/ogg"></source>
																<source src="media/Georgia.mp3" type="audio/mpeg"></source></audio>
														</div>
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
			
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
			
 	 

	
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"><a id="loginButton"><span>Profile <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="logout()" data-toggle="modal" data-target="#myModal5"></a>
														<div id="loginBox"> 
													<form method="post" id="loginForm" onClick="logout()">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<input type="submit" id="login" value="Logout" onClick="logout()">
																	</fieldset>
																<span><a href="logout()"></a></span>
														 </form>
													</div>
												</div>

											</div>
										<div class="clearfix"> </div>
								</div>
	
						</div>
					<div class="clearfix"></div>
				</div>
			<div id="page-wrapper">
				<div class="inner-content">
				      <div class="music-browse">
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$(".popup-with-zoom-anim").magnificPopup({
										type: "inline",
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: "auto",
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: "my-mfp-zoom-in"
									});
									});
							</script>		
					
						<div class="browse">
								<div class="tittle-head two">
									<h3 class="tittle">New Releses <span class="new">New</span></h3>
									 <a href="albums.php"><h4 class="tittle third">See all</h4></a>
									<div class="clearfix"> </div>
								</div>
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								  <ul id="myTab" class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Telugu</a></li>
								   <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Hindi</a></li>
								   <li role="presentation" class="dropdown">
									 <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">English <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
										  <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Melody</a></li>
										  <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Classic</a></li>
										</ul>
								   </li>
								   <li role="presentation"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tamil</a></li>
								    <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Malayalam</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									<div class="browse-inner">
								 	 <!-- /agileits -->
								
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sukhwinder singh</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Shekhar Ravjiani</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Shalmali</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sajid-Wajid</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Atif Aslam</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">A R Rahman</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Shreya Ghoshal</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Lata Mangeshkar</a>
										</div>
											<div class="col-md-3 artist-grid">
													<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
													 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.php">Arijit Sing</a>
												</div>
											<div class="col-md-3 artist-grid">
													<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
													 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.php">Sunidhi Chauhan</a>
												</div>
												<div class="col-md-3 artist-grid">
													<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
													 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.php">Yo Yo Honey Singh</a>
												</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Neeti Mohan</a>
											</div>
											<div class="clearfix"> </div>
										</div>
								  </div>
								  
								  <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
									  <div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">A R Rahman</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shreya Ghoshal</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
								 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sukhwinder singh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shekhar Ravjiani</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shalmali</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sajid-Wajid</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Atif Aslam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">Lata Mangeshkar</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Arijit Sing</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sunidhi Chauhan</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Yo Yo Honey Singh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Neeti Mohan</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
									<div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">A R Rahman</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shreya Ghoshal</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
								 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sukhwinder singh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shekhar Ravjiani</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shalmali</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sajid-Wajid</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Atif Aslam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">Lata Mangeshkar</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Arijit Sing</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sunidhi Chauhan</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Yo Yo Honey Singh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Neeti Mohan</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									 <div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shreya Ghoshal</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Lata Mangeshkar</a>
													</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Arijit Sing</a>
															</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Sunidhi Chauhan</a>
															</div>
															<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Yo Yo Honey Singh</a>
															</div>
														<div class="col-md-3 artist-grid">
															<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
															 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																<a class="art" href="single.php">Neeti Mohan</a>
														</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sukhwinder singh</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shekhar Ravjiani</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shalmali</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sajid-Wajid</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Atif Aslam</a>
											</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">A R Rahman</a>
											</div>
										
														<div class="clearfix"> </div>
													</div>
								  </div>
								   <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									  <div class="browse-inner">
								
								
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sukhwinder singh</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shekhar Ravjiani</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shalmali</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sajid-Wajid</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Atif Aslam</a>
											</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">A R Rahman</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shreya Ghoshal</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Lata Mangeshkar</a>
													</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Arijit Sing</a>
															</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Sunidhi Chauhan</a>
															</div>
															<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Yo Yo Honey Singh</a>
															</div>
														<div class="col-md-3 artist-grid">
															<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
															 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																<a class="art" href="single.php">Neeti Mohan</a>
														</div>
														<div class="clearfix"> </div>
													</div>
											</div>
								</div>
							</div>

						</div>
								<div class="albums fourth">
										<div class="tittle-head two">
											<h3 class="tittle">Discover <span class="new">View</span></h3>
											<a href="albums.php"><h4 class="tittle third">See all</h4></a>
											<div class="clearfix"> </div>
										</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v11.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v22.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v33.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.php"><img src="images/v44.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v55.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v66.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v77.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.php"><img src="images/v88.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v99.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
												<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v9.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v21.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v5.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
							</div>
						
						<div class="review-slider">
						
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="single.php"><img src="images/v1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Nov-29-2010</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/Rolling_in_the_Deep">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v2.jpg" alt=""/></a>
									<div class="slide-title"><h4>Enrique Iglesias</h4></div>
									<div class="date-city">
										<h5>Feb-24-2017</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/S%C3%BAbeme_la_Radio">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v3.jpg" alt=""/></a>
									<div class="slide-title"><h4>Shomlock</h4></div>
									<div class="date-city">
										<h5>Aug-25-2017</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/Shonlock">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v4.jpg" alt=""/></a>
									<div class="slide-title"><h4>Stuck on a feeling</h4></div>
									<div class="date-city">
										<h5>Dec-10-2014</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/Prince_Royce">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v5.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Mar-11-2015</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/Ricky_Martin">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v8.jpg" alt=""/></a>
									<div class="slide-title"><h4>Bethany Dillon </h4></div>
									<div class="date-city">
										<h5>Apr-20-2004</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/Bethany_Dillon">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v7.jpg" alt=""/></a>
									<div class="slide-title"><h4>Yoan </h4></div>
									<div class="date-city">
										<h5>Mar-20-2015</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/Yoan_Garneau">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v6.jpg" alt=""/></a>
									<div class="slide-title"><h4>Fifty Shades </h4></div>
									<div class="date-city">
										<h5>Feb-10-2015</h5>
										<div class="buy-tickets">
											<a href="https://en.wikipedia.org/wiki/Fifty_Shades_of_Grey_(soundtrack)">READ MORE</a>
										</div>
									</div>
								</li>
							</ul>
							<script type="text/javascript">
						$(window).load(function() {
							
						  $("#flexiselDemo1").flexisel({
								visibleItems: 5,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: false,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 2
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 3
									},
									tablet: { 
										changePoint:800,
										visibleItems: 4
									}
								}
							});
							});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
						</div>
								</div>
							<div class="clearfix"></div>
					</div>

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
						<p class="email">Email : &nbsp;<span><a href="mailto:souju387@gmail.com">souju387@gmail.com</a></span></p>
						<p class="email">Email : &nbsp;<span><a href="mailto:pushkalvaidya1@gmail.com">pushkalvaidya1@gmail.com</a></span></p>
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>

   </section>

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script src="js/bootstrap.js"></script>
</body>
</html>