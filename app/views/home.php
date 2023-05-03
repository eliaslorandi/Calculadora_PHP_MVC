<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
		
	</style>
</head>
<body>
    <?php include_once "header.php"?>
	<div class="container">
		<form action="">
			<label for="num1">Number 1:</label>
			<input type="number" id="num1" name="num1">
			<label for="num2">Number 2:</label>
			<input type="number" id="num2" name="num2">

			<label for="operation">Operation:</label>
			<select id="operation" name="operation">
				<option value="addition">Addition</option>
				<option value="subtraction">Subtraction</option>
				<option value="multiplication">Multiplication</option>
				<option value="division">Division</option>
			</select>

			<input type="submit" value="submit">
		</form>
	</div>
    <?php include_once "footer.php"?>
</body>
</html>
