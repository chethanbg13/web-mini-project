<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		
	</script>

<?php
	if(isset($_POST['login'])){
		include "sql/connection.php";
		$email = $_POST["email"];
		$pass = $_POST["password"];
		$sql = "SELECT * FROM `user` WHERE email = '$email'";
		$res = mysqli_query($db, $sql);
		$count = mysqli_num_rows($res);
		if($count == 1){
			$r = mysqli_fetch_assoc($res);
			$passdb=$r['password'];
			if($pass==$passdb){
				echo "<script> window.location='http://localhost/musicplayer-master/home.php';</script>";
			}
			else{
				echo "<script> alert('Incorrect Password');
						window.location='http://localhost/musicplayer-master/index.php';
						</script>";
			}
		}
		else{
		echo "<script> alert('Invalid Details');
					window.location='http://localhost/musicplayer-master/index.php';
				</script>";
		}		
		exit;
		mysqli_close($db);
	}
	
	if(isset($_POST['reset'])){
		include "sql/connection.php";
		$email = $_POST["email"];
		$sql = "SELECT * FROM `user` WHERE email = '$email'";
		$res = mysqli_query($db, $sql);
		$count = mysqli_num_rows($res);
		if($count == 1){
			$r = mysqli_fetch_assoc($res);
			$passdb=$r['password'];
			echo "<script> alert('Your Password is $passdb');
					window.location='http://localhost/musicplayer-master/index.php';
					</script>";
		}
		exit;
		mysqli_close($db);
	}
	
	if(isset($_POST['register'])){
		include "sql/connection.php";
		$email = $_POST["email"];
		$pass = $_POST["password"];
		$uppercase = preg_match('@[A-Z]@', $pass);
		$lowercase = preg_match('@[a-z]@', $pass);
		$number    = preg_match('@[0-9]@', $pass);
		$specialChars = preg_match('@[^\w]@', $pass);

		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
			echo '<script> alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");</script>';
		}
		else{
			$query = "insert into user values('$email','$pass');";
			if(mysqli_query($db, $query) or die("Error querying database."))
			echo "<script> 
						alert('Registered Successfully');
						window.location='http://localhost/musicplayer-master/index.php';
				</script>";
		exit;
		mysqli_close($db);
		}
	}
	
?>

	<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext" rel="stylesheet">
</head>

<body>
	<div class="main-bg">
		<h1>Music Player</h1>
		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
					<article>
						<form id="form1" method="post">
						
						<h3 class="legend">Login Here</h3>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required  autocomplete="off"/>
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" required  autocomplete="off"/>
							</div>
							<button type="submit" class="btn submit" name="login">Login</button>
							<a href="#" class="bottom-text-w3ls">Forgot Password?</a>
						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>Register</label>
					<article>
						<form id="form2" method="post">
							<h3 class="legend">Register Here</h3>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required  autocomplete="off" value=""/>
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" required  autocomplete="off" value=""/>
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Confirm Password" name="password" required  autocomplete="off" value=""/>
							</div>
							<button type="submit" class="btn submit" name="register">Register</button>
						</form>
					</article>
				</div>
				<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3">
					<label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Forgot Password?</label>
					<article>
						<form id="form3" method="post">
							<h3 class="legend last">Forgot Password</h3>
							<p class="para-style">Enter your email address below to retrieve the forgotten password</p>
							<p class="para-style-2"><strong>Need Help?</strong> <br>Learn more about how to retrieve an existing
									account.</a></p>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required />
							</div>
							<button type="submit" class="btn submit last-btn" name="reset" >Retrieve</button>
						</form>
					</article>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

</body>

</html>