<?php

	$name = "somename";
	$value = 100;
	$expiration = time() + (60*60*24*7);
	setcookie($name,$value,$expiration);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
<?php

	if (isset($_COOKIE['somename'])) {
		
		$someone = $_COOKIE['somename'];

		echo $someone;
	}
	else{

			$someone = "";

	}

?>
</body>
</html>