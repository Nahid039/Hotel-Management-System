<?php
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

if(isset($_COOKIE["type"])){
	header("Location:adminpage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="page1">
	<div id="header">
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="Reg.php">Book My Stay</a></li>
					<li><a href="admin.php">Admin Login</a></li>
				</ul>
			</div>
			<div id="logo">
				<h1>Welcome to</h1>
				<h2>Hotel Management</h2>
			</div>
		</div>
		<div id="form">
			<form action="admin.php" method="post">
			<table style="color: blue;">
				<tr>
					<td>User Name: </td>
					<td><input type="text" name="username" placeholder="Enter username"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="Password" name="pass" placeholder="Enter user password"></td>
				</tr>
				<tr>
				<td><input style="width: 120px; height: 30px; border-radius: 20px; color: blue; opacity: 0.4; " type="submit" value="Login" name="sub"></td>
				</tr>

			</table>
		</form>
		
		<?php
		$conn = new mysqli("127.0.0.1","root","","hotel_data");
		if(isset($_POST['sub'])){
			$un=$_POST['username'];
			$ps=$_POST['pass'];
			$q1="select*from admin";
			$run=mysqli_query($conn,$q1);
			$row=mysqli_fetch_array($run);
			$u=$row['un'];
			$p=$row['ps'];
			echo "$un"."$ps";
			echo "$u";
			echo "$p";
			if($un==$u && $ps==$p)
			{
				//echo "match";
				setcookie('type', $u, time()+3600);
				header("Location:adminpage.php");
			}
}
		?>

		</div>
	 </div>
	</div>
</body>
</html>