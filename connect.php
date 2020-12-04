<?php
$username = $_POST['username'];

$email = $_POST['email'];

$phone = $_POST['phone'];
$message=$_POST['msg'];
$dbconnect=mysqli_connect("127.0.0.1","root","","pcmrdb");
if(mysqli_connect_errno($dbconnect))
{
    echo "failed to connect";
}
else{
	echo"connection successful";
	$sql="INSERT INTO `cust_reg`(`username`, `email`, `phone`, `cust_msg`) VALUES ('$username','$email','$phone','$message')";
	$query_run=mysqli_query($dbconnect,$sql);
	
}

?>