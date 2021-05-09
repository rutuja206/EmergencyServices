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
		
	if(password=="diamond")
		{
			header("location: Index.php");
		}
		else 
		{
			$loginCheck = "No";
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
     <body>
       <form>
<input name="username" type="text" placeholder="enter username" maxlength="40" >
<br><br>
<input name="password" type="password" placeholder="enter password" maxlength="40" >
<br><br>

<input class="btn" type="submit" name="login" value="LogIn">
	<br><br>
	
<input class="btn" type="submit" name="logout" value="LogOut">
	<br><br>
	
		<?php
		if(isset($loginCheck))
		{
			echo "Invalid data<br/>";
		}