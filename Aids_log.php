<?php

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

	// you have already learned about session
	session_start();
	
	    $server = "localhost";
		$user = "root";
		$pass = "";
		$database = "register";
		
		$conn = mysqli_connect($server, $user, $pass, $database);

	
	if(mysqli_connect_error())
	{
		echo "<p>Error in connection to database.</p>";
		exit();
	}
	
		// checks whether logout button is clicked or not
		if(isset($_POST["logout"]))
		{
			// below code is used to destroy all the session
			session_destroy();
			// below code is used to redirect users to CompleteLoginPage.php page
			header("location: Index.php");
			// below code is used to skip executing the remaining code
			// after this
			exit();
		}
		$username = $password = "";
		
		$username = $_POST["username"];
		$username = filter_login_input($username);
		
		$password = $_POST["password"];
		$password = filter_login_input($password);
		
		$qry = "select * from aids_rgst where Username='$username' and Password='$password'";
		$res = $conn->query($qry);
		
		if(mysqli_num_rows($res)>0)
		{
			$_SESSION['login'] = $username;
		}
		else 
		{
			$loginCheck = "No";
		}
	}
	function filter_login_input($loginData)
	{
		$loginData = trim($loginData);
		$loginData = stripslashes($loginData);
		$loginData = htmlspecialchars($loginData);
		return $loginData;
	}
?>
<html>
<head>
	<title>PHP and MySQLi Login Page Example</title>
	
	<link href="login.css" rel="stylesheet" type="text/css">
	
	<link href="index.css" rel="stylesheet" type="text/css">
	
	<script>
	function checkBeforeLogin()
	{
		if(document.loginForm.username.value=="")
		{
			alert("Enter Username");
			document.loginForm.username.focus();
			return false;
		}
		if(document.loginForm.password.value=="")
		{
			alert("Enter Your Password");
			document.loginForm.password.focus();
			return false;
		} 
		return true;
	}
	</script>
</head>
<body> 

<?php
	if(isset($_SESSION['login']))
	{
		header('location: AIDS.php');
		/*echo "<p>You are successfully logged in.</p>";
		echo "<p>Now you can access the admin page.</p>";
		echo "<form method=\"post\">";
		echo "<input type=\"submit\" name=\"logout\" value=\"LogOut\">";
		echo "</form>";*/
		exit();
	}
?>
	<center><h2>LogIn For AIDS Service</h2></center>
	
	<header>

<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>
</ul>

</header>

	
	<form class="mr" name="loginForm" method="post" onSubmit="return checkBeforeLogin()">
	
	<div class="container">
	
	<label>Username :</label>
	<input name="username" type="text" placeholder="enter username" maxlength="40" >
	<br><br>
	
	<label>Password :</label>
	<input name="password" type="password" placeholder="enter password" maxlength="40" >
	<br><br>
	
	
	<?php
		if(isset($loginCheck))
		{
			echo "Invalid data<br/>";
		}
	?>
	<input class="btn" type="submit" name="login" value="LogIn">
	<br><br>
	
	<input class="btn" type="submit" name="logout" value="LogOut">
	<br><br>
	
	</div>
	
	
	</form>
	
	
<footer>
<h2><a href="Admin.php">Contact Us</a></h2>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
</footer>

	
	
</body>
</html>
