<?php
	
	if(isset($_POST['submit'])){

		$name =$_POST['name'];
		echo $_POST['name'];
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Post Super Global</title>
</head>
<body>

	<form action="post.php" method="post">
		<input type="text" name="name">
		<input type="submit" name="submit">


	</form>


</body>
</html>