<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><form action="http://localhost/100/index.php/admin/update/<?php echo $this->uri->segment(3) ?>" method="POST">
	<table>
	
		<tr>
					<td><center>Image</center></td>
					<td><input type="file" name="resume" required ></td>
				</tr>
	<tr>
					<td><center>Product title</center></td>
					<td><input name="name" value="<?php echo $select_data[0]->name;?>" ></td>
				</tr>
				<tr>
					<td><center>Detail</center></td>
					<td><textarea row="4" cols="20" name="detail"><?php echo $select_data[0]->detail;?></textarea></td>
				</tr>													
				<tr>
					<td><center>select</center></td>
					<td><select name="action" value="<?php echo $select_data[0]->action;?>">
      <option value="activate">activate</option>
      <option value="deactivate">deactivate</option></select></td>
				</tr>
				<tr>
					<td><center></center></td>
					<td><input type="submit" name="submit" value="submit"> </td>
				</tr>
</table>

</form>
</center>
</body>
</html>