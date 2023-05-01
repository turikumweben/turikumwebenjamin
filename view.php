<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>view</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>CID</td>
			<td>CNAME</td>
			<td>CPASSWORD</td>
			<td>CADDRESS</td>
			<td colspan="2"><center>ACTION</center></td>
		</tr>
		<?php
      include'conn.php';
      $select = "SELECT * FROM client";
      $result = mysqli_query($conn,$select);
  while($row = mysqli_fetch_array($result)){
      ?>

      		<tr>
  
  <td><?php echo $row['cid'];?></td>
  <td><?php echo $row['cname'];?></td>
  <td><?php echo $row['cpassword'];?></td>
  <td><?php echo $row['caddress'];?></td>
  <td><a href="delete.php ?cid=<?php echo $row['cid'];?>"><button>DELETE</button></a></td>
   <td><a href="update.php ?cid=<?php echo $row['cid'];?>"><button>UPDATE</button></a></td>
   	</tr>
   	<?php
   }
   ?>
	</table>
</body>
</html>