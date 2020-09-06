<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
		<table   width="200px">
			<form action="http://localhost/ci/index.php/baby_form/loginpage" method="POST" >
				<b >LOGIN FORM</b>
				<tr>
					<td><center>USERNAME</center></td>
					<td><input type="text" name="name" ></td>
				</tr>
				<tr>
					<td><center>EMAIL</center></td>
					<td><input type="email" name="email" ></td>
				</tr>
				<tr><td><center></center></td>
					<td><input type="submit" name="submit" value="login"></td></tr>
				
			</form>
		</table>
	</center>

</body>
</html>
