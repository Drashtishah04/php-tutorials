<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-1">
	<form action="hjexample.php" method="POST">
		<input type="text" name="txtfnm" placeholder="enter firstname" class="form-control mt-1" required>
		<input type="text" name="txtlnm" placeholder="enter lastname" class="form-control mt-1" required>
		<input type="text" name="email" placeholder="enter email" class="form-control mt-1" required>
		<input type="number" name="ctn" placeholder="contact no:" class="form-control mt-1" required>
		<textarea name="ads" placeholder="enter address" class="form-control mt-1"></textarea>
		<select class="form-control mt-1" name="txtst" >
			<option>Select state: </option>
			<option>bihar</option>
			<option>tamilnadu</option>
			<option>kashmir</option>
			<option>hariyana</option>
		</select>
		<select class="form-control mt-1" name="txtcn" >
			<option>Select country: </option>
			<option>usa</option>
			<option>las vegas</option>
			<option>india</option>
			<option>korea</option>
		</select>
		<select class="form-control mt-1" name="txtct">
			<option>Select city: </option>
			<option>surat</option>
			<option>ahemdabad</option>
			<option>rajkot</option>
			<option>patan</option>
		</select>
		select gender:-
		male:
		<input type="radio" value="male" name="gen" placeholder="male">
		female:
		<input type="radio" value="female" name="gen">
		other:
		<input type="radio" value="other" name="gen">
		<input type="submit" value="SUBMIT" class="btn btn-success w-100 mt-1">
		<input type="button" value="CLEAR" class="btn btn-warning w-100 mt-1">
	</form>
</div>
<?php	
	$con=mysqli_connect("localhost","root","","hjex");
	if(isset($_POST['txtfnm']))
	{
		$fnm=$_POST['txtfnm'];
		$lnm=$_POST['txtlnm'];
		$email=$_POST['email'];
		$ctn=$_POST['ctn'];
		$ads=$_POST['ads'];
		$st=$_POST['txtst'];
		$cn=$_POST['txtcn'];
		$ct=$_POST['txtct'];
		$gen=$_POST['gen'];
		$sql="INSERT INTO `hjex`(`first name`, `last name`, `email`, `contact no.`, `address`, `country`, `state`, `city`, `gender`) VALUES ('[$fnm]','[$lnm]','[$email]','[$ctn]','[$ads]','[$st]','[$cn]','[$ct]','[$gen]')";
		$res=mysqli_query($con,$sql);
		$count=mysqli_num_rows($res);
	}
?>