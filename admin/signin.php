<?php session_start();
if(isset($_REQUEST["signin"]))
{
	$username = $_REQUEST["name"];
	$password = $_REQUEST["password"];
	include 'db.php';
	$qry = "SELECT * FROM admin WHERE email = '$username' AND password = '$password'";
	// echo $qry;

	$result = mysqli_query($con, $qry);
	if (mysqli_num_rows($result) >= 1) 
	{
		$row = mysqli_fetch_array($result);
			$_SESSION["admin"]=$row["name"];
	    	$_SESSION["id"]=$row["id"];
	    	echo $_SESSION["admin"];
    		echo $_SESSION["id"];
    		header('location:index.php');
	}

	else
	{
		echo"<p class='bg-warning text-white'>Invalid Username or Password</p>";
	}
}

?>

<?php
include('headertop.php');
?> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username">Email Id:</span>
				<input type="text" name="name" class="name" placeholder="" autocomplete="off" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" autocomplete="off" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br>
				<!-- <a href="#">Forgot Password</a><br> -->
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Sign In" name="signin">
			</div>
			<div class="clearfix"></div>
		</form>
				<!-- <div class="back" style="padding-bottom: 30px;">
					<a href="index.php">Back to home</a>
				</div> -->
				
	</div>
	</div>
	</div>
</body>
</html>