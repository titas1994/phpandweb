<?php

	print_r($_GET);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Super GLobal</title>
</head>
<body>

<?php

$id = 10;
$button = "Click Here";

?>
	<a href="get.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>
</body>
</html>