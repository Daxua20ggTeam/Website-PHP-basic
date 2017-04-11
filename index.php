

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Website-PHP-Basic</title>
</head>
<body>
top
<div id="top">
	<?php
		include 'model.Show/top/top.php';
	?>	
</div>
<!-- left -->
<div id="left_content">
	<?php
		include 'model.Show/left/left.php';
	?>	
</div>
<!-- center -->
<div id="center_content">
	<?php
		include 'model.Show/center/center.php';
	?>		
</div>
<!-- right -->
<div id="right_content">
	<?php
		include 'model.Show/right/right.php';
	?>
</div>

</body>
</html>