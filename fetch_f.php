<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "register";
	$conn = mysqli_connect($server, $user, $pass, $database);
	if(mysqli_connect_error())
	{
		echo "<p>Some error occurred during database connection.</p>";
		echo "<p>Try after some time...exiting...</p>";
		exit();
	}
?>


<html>
<head>

<link href="index.css" rel="stylesheet" type="text/css">

	<title>PHP and MySQLi Fetching and Displaying Record from Table Example</title>
	<style>
		table th{
			text-align:left;
			padding:5px;
			border:2px solid black;
			background-color:black;
			color:white;
			}
		table td
		{
			padding:5px;
			border:1px solid green;
		}
	</style>
</head>
<body>

&nbsp 
<header>

<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>
</ul>

</header>

&nbsp


<?php
$table = "record";

$sqlQ = "SELECT * FROM aids_rgst";
	
$res = $conn->query($sqlQ);


if($res)
{
	
	echo "<center> <table>";
		
		echo "<tr>";
			echo "<th>Id</th>";
			echo "<th>username</th>";
			echo "<th>password</th>";
			echo "<th>phone_no</th>";
			echo "<th>address</th>";
		echo "</tr>";
		
		
		while($row = mysqli_fetch_row($res))
		{
			echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";
			echo "</tr>";
		}
		
		echo "</table> </center>";
	}
	else 
	{
		echo "<p>Error occurred...exiting...</p>";
		exit();
	}
		
?>


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
