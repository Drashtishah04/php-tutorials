<?php
	$con=mysqli_connect("localhost","root","","drashti");
	$sql="insert into `test`(`s_name`,`result`)values('NM','ATKT')";
	$res=mysqli_query($con,$sql);
	$count=mysqli_affected_rows($con);
	if($count==1)
	{
		echo "INSERTED!";
	}
?>