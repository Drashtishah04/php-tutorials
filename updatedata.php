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
$sql="SELECT * FROM `user_login` WHERE `password`='12345'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
if($num>0){
	while($row=mysqli_fetch_assoc($result)){
		echo var_dump($row);
		echo "<br>";
	}
}
$sql="UPDATE `user_login` SET `password` = '26420' WHERE `user_login`.`id` = 3";
$result=mysqli_query($conn,$sql);
if($result){
	echo "we updated the record successfully!";
}
else{
	echo "we could not updated the record successfully!";
}
?>