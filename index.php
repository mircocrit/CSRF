<?php 
require 'app/bootstrap.php';
?>

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>
		<form action ="delete.php" method = "post">
			<input type="submit" value= "Delete my account">
			<input type="hidden" name= "_token" value ="<?php echo $_SESSION['_token'] ?>">
		</form>
	</body>

</html>