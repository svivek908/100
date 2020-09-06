<!DOCTYPE html>
<html>
<head>
	<title>singup</title>
</head>
<body>
	<center><form action="http://localhost/100/index.php/admin/login" method="post" >
		<table border="2px">
	<b>Regitrtion Form</b>
		<tr>
					<td><center>NAME</center></td>
					<td><input type="name" name="userid" required ></td>
				</tr>
	<tr>
					<td><center>EMAIL</center></td>
					<td><input type="email"name="email" value="" ></td>
				</tr>
				<tr>
					<td><center>PASSWORD</center></td>
					<td><input type="PASSWORD" name="pass"></td>

				</tr>													
				<tr>
					<td><center>CONFIRM PASSWORD</center></td>
					<td><input type="PASSWORD" name="cp"></td>
				</tr>
				<tr>
					<td><center></center></td>
					<td><input type="submit" name="submit" value="submit">
					<button><a href="http://localhost/100/index.php/admin/login">login</a></button>
				</tr>
</table>
	</form>
</center>
</body>
</html>