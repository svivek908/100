<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
</head>
<body><form action="http://localhost/ci/index.php/index/upload_file" method="post">
	<h3>file has been uploaded</h3>
	<ul>
		<?php foreach ($upload_data as $item=>$value)?>
		<li><?php echo $item; ?>:<?php echo $value; ?></li>
	<?php endforeach; ?>
	
<p><?php echo anchor('upload/upload','upload Another file!'); ?></p>
</form></body>
</html>