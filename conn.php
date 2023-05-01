<?php
$conn=mysqli_connect("localhost","root","","ben");
if(!$conn){
	die("connection fail");
}
else
{
	echo ' well connection';
}
?>