<?php
if(isset($_POST['send']))
{
	include'conn.php';
	$cname = $_POST['cname'];
	$cpassword = $_POST['cpassword'];
	$caddress = $_POST['caddress'];
	$sql ="INSERT INTO client (cname,cpassword,caddress) VALUES ('$cname','$cpassword','$caddress')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
      	echo "well insereted";
        header("location:index.php");
      }
      else
      {
      	echo" failed registration";
      }}
     ?>