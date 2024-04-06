<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-3">
	<form action="login page.php" method="POST">
		<input type="text" name="txtunm" placeholder="Enter username" class="form-control mt-3" required>
		<input type="password" name="txtpwd" placeholder="Enter password" class="form-control mt-1"required>
		<input type="submit" value="Log-In" class="btn btn-primary w-100">
		<center><a href="register page.php"> new User? Click Here To Register</a></center>
	</form>
</div>
<?php 
	$con=mysqli_connect("localhost","root","","email1");
	if(isset($_POST['txtunm']))
	{
			$fnm=$_POST['txtunm'];
			$pwd=$_POST['txtpwd'];
			$sql="INSERT INTO `student`( `user name`, `password`) VALUES ('$fnm','$pwd')";
			$res=mysqli_query($con,$sql);
	}
?>