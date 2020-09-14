<?php
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
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
					<li><a href="#">Room & Services</a></li>
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
			<form action="Reg.php" method="post">
			<table style="color: blue;">
				<tr>
					<td>Name </td>
					<td><input type="text" name="name" placeholder="Enter your name"></td>
				</tr>
				<tr>
					<td>Id No.: </td>
					<td><input type="text" name="id" placeholder="Enter your id number"></td>
				</tr>
				<tr>
					<td>Address </td>
					<td><input type="text" name="adress" placeholder="Enter your address"></td>
				</tr>
				<tr>
					<td>E-mail </td>
					<td><input type="text" name="email" placeholder="Enter your email"></td>
				</tr>
				<tr>
				<td><input style="width: 120px; height: 30px; border-radius: 20px; color: blue; opacity: 0.4; " type="submit" value="Submit" name="submit"></td>
				</tr>

			</table>
		</form>
		
		<?php
		$conn = new mysqli("127.0.0.1","root","","hotel_data");
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$id=$_POST['id'];
			$sql="INSERT INTO details(Id,Name) VALUES('$id','$name')";
			if (mysqli_query($conn, $sql)) {
    			echo "New record created successfully";
    		} 
    		else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   			}
}
		?>

		</div>
	 </div>
	</div>
</body>
</html>