<?php
$servername="localhost";
$username="root";
$password="";
$database="drashti";
$conn=mysqli_connect($servername,$username,$password,$database );
if(!$conn){
	die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
	echo "connection was succesfull<br>";
}
$sql="DELETE FROM `user_login` WHERE `password` = '12345' LIMIT 7";
$result=mysqli_query($conn,$sql);
$aff=mysqli_affected_rows($conn);
echo "<br>number of affected rows: $aff <br>";
?>
