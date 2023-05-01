
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
session_start();
$id = $_GET['cid'];
$_SESSION['cid'] = $id;
$conn=mysqli_connect("localhost","root","","ben");
$sql="SELECT * FROM client where cid = '$id'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
	{
		?>
<style type="text/css">
		fieldset{
			-webkit-animation-name: example;
			-webkit-animation-duration: 4s  ;
			 animation-iteration-count: infinite;

		}
		@keyframes example {
   0%   {
   	background-color: red;
   }
    25%  {
    	background-color: yellow;
    }
    50%  {
    	background-color: pink;
    }
    100% {
    	background-color: cyan;
    }
}
</style>
<center>
<fieldset style="  height: 50VH;width: 40vw; background-color: aqua; border-radius: 30px green;">
			<form method="POST" action="edit.php">
				<h1 style="text-shadow: 2px 2px 2px blue;">this is plactice iam still benit</h1>
				cname<input type="text" name="cname" value="<?php echo $row['cname'];?>"><br><br>
				cpassword<input type="password" name="cpassword" value="<?php echo $row['cpassword'];?>"><br><br>
				caddress<input type="text" name="caddress" value="<?php echo $row['caddress'];?>"><br><br>
				<input type="submit" name="update" value="update">
      <?php
      }  
      ?>
  </center>
</fieldset>
</form>
</body>
</html>