<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
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
       window.location.href="http://localhost/musicplayer-master/index.php";
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
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
						
						<div class="col-md-7 app-image">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
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
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"><a id="loginButton"><span>Profile <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" data-toggle="modal" data-target="#myModal5"></a>
														<div id="loginBox"> 
													<form method="post" onClick="logout()" id="loginForm">
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
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				
				      <div class="music-left">
					      <!--banner-section-->
							<div class="banner-section">
								<div class="banner">
									 <div class="callbacks_container">
										<ul class="rslides callbacks callbacks1" id="slider4">
											   	<li>
														<div class="banner-img">
															 <img src="images/p4.jpg" class="img-responsive" alt="">>
														 </div>
														<div class="banner-info">
														              <a class="trend" href="single.php">TRENDING</a>
																	  <h3>Let Your Home</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>

												</li>
												<li>
													<div class="banner-img">
															 <img src="images/p3.jpg" class="img-responsive" alt="">>
														 </div>
														<div class="banner-info">
																	  <a class="trend" href="single.php">TRENDING</a>
																	  <h3>Divine Mirchi</h3>
																	  <p>Album by <span>Divine</span></p>
														 </div>


												</li>
												<li>
												 <div class="banner-img">
															 <img src="images/p2.jpg" class="img-responsive" alt="">
														 </div>
														<div class="banner-info"> 
														             <a class="trend" href="single.php">TRENDING</a>
																	  <h3>Naach Meri Rani</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>
												</li>
											</ul>
										</div>
										<!--banner-->
									<script src="js/responsiveslides.min.js"></script>
								 <script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $(".events").append("<li>before event fired.</li>");
										},
										after: function () {
										  $(".events").append("<li>after event fired.</li>");
										}
									  });
								
									});
								  </script>
								<div class="clearfix"> </div>
							</div>
						</div>	
				<!--//End-banner-->
					<!--albums-->
					<!-- pop-up-box --> 
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
					<!--//pop-up-box -->
						<div class="albums">
								<div class="tittle-head">
									<h3 class="tittle">New Releases <span class="new">New</span></h3>
									<div class="clearfix"> </div>
								</div>
							
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog1"><img src="images/d2.jpg"style="width:175px;height:175px" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog1">listen now</a>
							</div>
							<div id="small-dialog1" class="mfp-hide">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/a0TkeUhcVrM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/d3.jpg" style="width:175px;height:175px"title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">listen now</a>
							</div>
							<div id="small-dialog" class="mfp-hide">
								<iframe width="560" height="315"  src="https://www.youtube.com/embed/mrqgz4_a4PU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog2"><img src="images/b11.jpg" style="width:175px;height:175px"title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog2">listen now</a>
							</div>
							<div id="small-dialog2" class="mfp-hide">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/2mDCVzruYzQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog3"><img src="images/p1.jpg"style="width:175px;height:175px" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog3">Listen now</a>
							</div>
							<div id="small-dialog3" class="mfp-hide">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/bdesdebUFLE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog4"><img src="images/p5.jpg" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog4">Listen now</a>
							</div>
							<div id="small-dialog4" class="mfp-hide">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/GtanRpjxAl4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog5"><img src="images/p6.jpg" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog5">Listen now</a>
							</div>
							<div id="small-dialog5" class="mfp-hide">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/cC8AmhPUJPA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog6"><img src="images/p7.jpg"style="width:175px;height:175px" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog6">Listen now</a>
							</div>
							<div id="small-dialog6" class="mfp-hide">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/dPmhZ8l7zfA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog7"><img src="images/p8.jpg" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog7">Listen now</a>
							</div>
							<div id="small-dialog7" class="mfp-hide">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/NtyrdMgSRKY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							
											<div class="clearfix"> </div>
										</div>
					<!--//End-albums-->
						<!--//discover-view-->
						</div>
						
							<!--/div-->
							<!--//music-left-->
						    <!--/music-right-->
						   <div class="music-right">
								<!--/video-main-->
								 <div class="video-main">
									<div class="video-record-list">
										<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" src="video/play1.png" style="width: 480px; height: 270px; display: inline;">
												<video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;"></video></div>
												<div class="jp-gui">
													<div class="jp-video-play" style="display: block;">
														<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
													</div>
													<div class="jp-interface">
														<div class="jp-progress">
															<div class="jp-seek-bar" style="width: 100%;">
																<div class="jp-play-bar" style="width: 0%;"></div>
															</div>
														</div>
														<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
														<div class="jp-duration" role="timer" aria-label="duration">00:18</div>
														<div class="jp-controls-holder">
															<div class="jp-controls">
																<button class="jp-previous" role="button" tabindex="0">previous</button>
																<button class="jp-play" role="button" tabindex="0">play</button>
															</div>
															<div class="jp-volume-controls">
																<button class="jp-mute" role="button" tabindex="0">mute</button>
																<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value" style="width: 100%;"></div>
																</div>
															</div>
															<div class="jp-toggles">
															
																<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
															</div>
														</div>
														<div class="jp-details" style="display: none;">
															<div class="jp-title" aria-label="title">1. Ellie-Goulding</div>
														</div>
													</div>
												</div>
												<div class="jp-playlist">
													<ul style="display: block;"><li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">4. Maroon-Sugar <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li></ul>
												</div>
												<div class="jp-no-solution" style="display: none;">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- script for play-list -->
				<link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
				<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
				<script type="text/javascript">
				//<![CDATA[
				$(document).ready(function(){

					new jPlayerPlaylist({
						jPlayer: "#jquery_jplayer_1",
						cssSelectorAncestor: "#jp_container_1"
					}, [
						
						{
							title:"1. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"2. Mark-Ronson-Uptown",
							artist:"",
							mp4: "video/Mark-Ronson-Uptown.mp4",
							ogv: "video/Mark-Ronson-Uptown.ogv",
							webmv: "video/Mark-Ronson-Uptown.webm",
							poster:"video/play2.png"
						},
						{
							title:"3. Maroon-Sugar",
							artist:"",
							mp4: "video/Maroon-Sugar.mp4",
							ogv: "video/Maroon-Sugar.ogv",
							webmv: "video/Maroon-Sugar.webm",
							poster:"video/play4.png"
						},
						{
							title:"4. Pharrell-Williams",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
					], {
						swfPath: "../../dist/jplayer",
						supplied: "webmv,ogv,mp4",
						useStateClassSkin: true,
						autoBlur: false,
						smoothPlayBar: true,
						keyEnabled: true
					});

				});
				//]]>
					</script>
			<!-- //script for play-list -->

								
											
													 <!--//music-right-->
											<div class="clearfix"></div>
										</div>
						<!--body wrapper start-->
						
						<div class="albums second">
										<div class="tittle-head">
											
											<div class="clearfix"> </div>
										</div>
											<div class="clearfix"> </div>
									</div>
								<!--//discover-view-->
							
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
						<!--body wrapper end-->
 	 
					</div>
			  <!--body wrapper end-->
			     <div class="footer">
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
       
 	 
      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>