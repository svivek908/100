<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body><center>
	<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
	<form action="http://localhost/100/index.php/admin/add" method="POST" enctype="multipart/form-data">
		<h1></h1>
	<table>
		<tr>
					<td><center>Image</center></td>
					
					<td><input type="file" name="resume"  >
					</td>
				</tr>
		
	<tr>
					<td><center>Product title</center></td>
					<td><input type="text" name="name"  ></td>
				</tr>
				<tr>
					<td><center>Detail</center></td>
					<td><textarea type="text" name="detail" reuired ></textarea></td>
				</tr>
				<tr>
					<td><center>select</center></td>
					<td><select name="action">
      <option value="activate">activate</option>
      <option value="deactivate">deactivate</option></select></td>
				</tr>
</table>
<tr>
					<td><center></center></td>
					<td><input type="submit" name="submit" value="Add" ></td>
				</tr>
	
</form>

</center>
</body>
</html>