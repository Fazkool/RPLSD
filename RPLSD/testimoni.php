<html>
<head>
</head>
<body>

	<form action="rate.php" method="POST">
		<input type="hidden" name="id" id="id" value="<?php echo $_GET["id"] ?>"></input>
		<label> Testi </label><input type="text" name="testi" id="testi"></input>
		<label> Rate </label><input type=number min="0" max="10" name="rate" id="rate"></input>
		<input type="submit"></input>
	</form>
</body>
</html>