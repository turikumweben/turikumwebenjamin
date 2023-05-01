 <?php
 session_start();
include'conn.php';
if(isset($_POST['update']))
{
	$cname=$_POST['cname'];
	$cpassword=$_POST['cpassword'];
	$caddress=$_POST['caddress'];
$update="UPDATE client SET cname='$cname',cpassword='$cpassword',caddress='$caddress' WHERE cid='$_SESSION[cid]' ";
$result=mysqli_query($conn,$update);
if($result)
{
	echo "update well";
}
 else
 {
 	echo'failed to update';
 }
}
?> 