<?php
include'conn.php';
$id = $_GET['cid'];
$sql = "DELETE FROM client WHERE cid ='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "delete well";
}
else
{
	echo "failed to delete";
}
?>