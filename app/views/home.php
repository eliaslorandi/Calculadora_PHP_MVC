<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
			width: 400px;
			margin: auto;
			margin-top: 50px;
		}
		input[type=number], select {
			padding: 10px;
			margin: 5px;
			width: 100%;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
		}
		input[type=submit] {
			padding: 10px;
			margin: 5px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			cursor: pointer;
			width: 100%;
			font-size: 16px;
			font-weight: bold;
			text-transform: uppercase;
		}
	</style>
</head>
<body>
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

			<input type="submit" value="Send">
		</form>
	</div>
</body>
</html>
