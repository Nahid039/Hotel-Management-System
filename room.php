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
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/rom.jpg'); height: 700px">
		<div id="header">
			<div id="logo">
				<h3>Welcome to</h2>
				<h2>Ting Tong Hotel</h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</li>
					<li><a href="#">Contact Us</li>
					<li><a href="#">Book My Stay</li>
					<li><a href="#">Help</li>
				</ul>
			</div>
		</div>
		<div id="form">
			<form action="room.php" method="post">
			<table style="color: blue;">
				<tr>
					<td>Room No.: </td>
					<td><input type="text" name="rno" placeholder="Enter room number"></td>
				</tr>
				<tr>
					<td>Room type: </td>
					<td><input type="text" name="type" placeholder="Enter room type"></td>
				</tr>
				<tr>
					<td>Room Price: </td>
					<td><input type="text" name="rprice" placeholder="Enter price"></td>
				</tr>
				<tr>
				<td><input style="width: 120px; height: 30px; border-radius: 20px; color: blue; opacity: 0.4; " type="submit" value="Submit" name="submit"></td>
				</tr>

			</table>
		</form>
		
		<?php
		$conn = new mysqli("127.0.0.1","root","","hotel_data");
		if(isset($_POST['submit'])){
			$rno=$_POST['rno'];
			$type=$_POST['type'];
			$rprice=$_POST['rprice'];
			$sql="INSERT INTO room(rno,type,price,status) VALUES('$rno','$type','$rprice','unbooked')";
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