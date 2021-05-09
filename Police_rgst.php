<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	    $server = "localhost";
		$user = "root";
		$pass = "";
		$database = "register";
		$conn = mysqli_connect($server, $user, $pass, $database);
		
		if(mysqli_connect_error())
		{
			echo "<p>Error occurred..while database connecting</p>";
			echo "<p>Exiting...</p>";
			exit();
		}
		



	$username = $password = $number = $address="";

	$usernameErr =$passwordErr = $numberErr = $addressErr = "";

	if(empty($_POST["username"]))
	{
		$usernameErr = "unique username is required";
	}
	else
	{
		$username = $_POST["username"];
			
		$username=test_input($username);
	}
		
		

	
	if(empty($_POST["password"]))
	{
		$passwordErr = "Password is required";
	}
	
	else
	{
		$password=$_POST["password"];
		
		$password=test_input($password);
		
	}
		
		
	if(empty($_POST["number"]))		
	{
		$numberErr="enter number";
	}
	else
	{
		$number=$_POST["number"];
		
		$number=test_input($number);
		
	}

	if(empty($_POST["address"]))		
	{
		$addressErr="Address is required";
	}
	else
	{
		$address=$_POST["address"];
		
		$address = test_input($address);
	}
}		


function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>



<html>

<head>

<link href="rgs.css" rel="stylesheet" type="text/css">

<link href="index.css" rel="stylesheet" type="text/css">

<style>
.error {color: #FF0000;}
</style>


<script>

function checkBeforeSubmit()
{
	if(document.registerForm.username.value=="")
	{
		alert("create your user name.");
		
		document.registerForm.username.focus();
		return false;
	}
	
	if(document.registerForm.password.value=="")
	{
		alert("create password");
		
		document.registerForm.password.focus();
		return false;
	}

	if(document.registerForm.number.value=="")
	{
		alert("Enter number");
		
		document.registerForm.number.focus();
		return false;
	}
	
	if(document.registerForm.address.value=="")
	{
		alert("Enter address");
		
		document.registerForm.address.focus();
		return false;
	}
	return true;
}
</script>



</head>

<body background="images/b5.jpg">

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!empty($usernameErr) || !empty($passwordErr) || !empty($numberErr) || !empty($addressErr) )
	{
		if(!empty($usernameErr))
		{
            echo "<b>Username Error Message: </b>";
			echo $usernameErr;
			echo "<br/>";
		}
		
		
		
		if(!empty($passwordErr))
		{
			echo "<b>Passowrd Error Message: </b>";
			echo $passwordErr;
			echo "<br/>";
		}
		
		if(!empty($numberErr))
		{
			echo "<b>number Error Message: </b>";
			echo $numberErr;
			echo "<br/>";
		}
		
		if(!empty($addressErr))
		{
			echo "<b>address Error Message: </b>";
			echo $addressErr;
			echo "<br/>";
		}
		
		echo "<p>Kindly try again</p>";

	}
	
	
	 else
	{

		$qry = "select * from police_rgst where Username='$username'";
		$rsl = $conn->query($qry);
		
		if(mysqli_num_rows($rsl)>0)
		{
			echo "<p>Username already existed in the database.</p>";
			echo "<p>Kindly try with different one.</p>";
			exit();
		}
		
		else 
		{
			$qry = "insert into police_rgst(Username,Password,Phone_number,Address)
					values('$username', '$password', '$number', '$address');";
			$res = $conn->query($qry);
			
			header('location: Police.php');
			
			/*if($res)
			{
				echo "<p>You are successfully registered to </p>";
				echo "<p>Your Username: <b>".$username."</b></p>";
				echo "<p>Your Password: <b>".$password."</b></p>";
				exit();
			}*/
		}
	}
}
?>


<center><h1><b><i>Registration  Form For Police Service</i></b></h1></center>

<header>

<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>
</ul>

</header>


<form class="mr" name="registerForm" method="post" onsubmit="return checkBeforeSubmit()">

<div class="container">
<center><label for="name">Username</label></center>
<input type="text" id="name" name="username" >
<br><br>


<center><label for="pass">Password</label></center>
<input type="password" id="pass" name="password">
<br><br>

<center><label for="number">Phone number</label></center>
<input type="text" id="number" name="number" >
<br><br>

<center><label for="add">Address</label></center>
<input type="text" id="add" name="address" >
<br><br>

</div>

<div>
<center><button class="btn">SUBMIT</button></center>
</div>

</form>


</body>


<footer>
<h2><a href="Admin.php">Contact Us</a></h2>
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
</footer>


</html>
