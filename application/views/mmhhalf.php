<!DOCTYPE html>
<html>
<head>
	<title></title>
	   
</head>
<body><center><form action="http://localhost/100/index.php/admin/select" method="POST">
	<table border="2px">
	<tr>
		<th>id</th>
				<th>image</th>
		<th>title</th>
		<th>detail</th>
		<th>action</th>
		<th>operation</th>
	</tr>
	<?php
	
foreach ($select_data as $row) 
{
?>
<tr>
	<td><?php echo $row->id?></td>
	<td><img src="<?php echo base_url('images/'. $row->resume);?>" width="200px"> </td>
	<td><?php echo $row->name?></td>
	<td><?php echo $row->detail?></td>
	<td><?php echo $row->action?></td>
	<td><a href="http://localhost/100/index.php/admin/edit/<?php echo $row->id?>">edit</a><a href="http://localhost/100/index.php/admin/delete/<?php echo $row->id?>">Delete</a></td>

</tr>
<?php	
}
?>
		</table>

</form>
</center>
</body>
</html>