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

$sql="SELECT * FROM `user_login`";
$result=mysqli_query($conn,$sql);
$num=mysql_num_rows($result);
echo mysql_num_rows($result);
?>