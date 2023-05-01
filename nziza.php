
<html>
<head>
	<meta charset="utf-8">
	<title>post form</title>
</head>
<body  style=" background-color: whitesmoke;">
	<center>
		<form method="POST" action="insert.php">
			<h2 style="text-shadow: 5px 5px 5px pink;">POST REGISTRATION</h2>
			<fieldset style="width: 300px;height: 400px; background-color: lavender;border-color: 40px red;">
				
				NATIONAL ID<input type="text" name="nid" value=""><br><br>
				FIRSTNAME<input type="text" name="fname" value=""><br><br>
				LNAME<input type="text" name="lname" value=""><br><br>
				GENDER<input type="radio" name="gender" value="male">MALE
				<input type="radio" name="gender" value="female">FEMALE<br><br>
				DATE OF BIRTH<input type="date" name="date" value=""><br><br>
				EXAM DATE <input type="date" name="examd" value=""><br><br>
				PHONE NUMBER<input type="number" name="nbr" placeholder="+2507" value=""><br><br>
				MARKS<input type="number" name="mark" value=""><br><br>
				<input type="submit" name="save" value="SEND">
                <input type="submit" name="clear" value="clear">



			</fieldset>
		</form>
	</center>

</body>
</html>