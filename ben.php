<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>web</title>
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



		}
	</style>
</head>
<body style="background-image: url(lo.jpg);">
	<center>
		<fieldset style="  height: 50VH;width: 40vw; background-color: aqua; border-radius: 30px green;">
			<form method="POST" action="insert.php">
				<h1 style="text-shadow: 2px 2px 2px blue;">this is plactice iam still benit</h1>
				cid<input type="hidden" name="cid" ><br><br>
				cname<input type="text" name="cname" placeholder="write your cname here"><br><br>
				cpassword<input type="password" name="cpassword" placeholder="write your cpassword here"><br><br>
				caddress<input type="text" name="caddress" placeholder="write youl full address here"><br><br>
				<input type="submit" name="send" value="send">
				
			</form>
		</fieldset>
	</center>

</body>
</html>