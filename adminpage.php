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
					<li><a href="#">Update Informtion</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="logo">
				<h1>Welcome to</h1>
				<h2>Hotel Management</h2>
			</div>
		</div>
	<div id="people">
		<h1 style="color: white">Welcome to admin Page</h1>
		<h2 style="color: white">Hotel booking information</h2>
		<table>
			<tr>
				<td>Name </td>
				<td>Id Number</td>
				<td>Address</td>
				<td>Email</td>
			</tr>

			<?php
			$conn = new mysqli("127.0.0.1","root","","hotel_data");
			$p1="select*from details";
			$run=mysqli_query($conn,$p1);
			while ($row=mysqli_fetch_array($run))
			{
				$name=$row['Name'];
				$id=$row['Id'];
				//echo "$name";

			?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $id; ?></td>
			</tr>
<?php
}
?>
		</table>
	</div>
</body>
</html>