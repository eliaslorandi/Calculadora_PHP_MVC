<div class="container">
	<h1>Multiplication</h1>
	<form method="POST" action="<?php echo URL_BASE ."calc/calculateMultiplication"?>">
		<div class="calc">
			<div class="box 1">
				<label for="num1">Number 1:</label>
				<input type="number" value="<?php echo isset($a) ? $a : "" ?>" name="a" placeholder="0">
				<label for="num2">Number 2:</label>
				<input type="number" value="<?php echo isset($b) ? $b : "" ?>" name="b" placeholder="0">
			</div>
			<div class="box 2">
				<input type="submit" value="submit">
			</div>
		</div>
		<label>
			<span>Result: </span>
			<?php if (isset($result)) { ?>
				<h1 class="result"><?php echo $result ?></h1>
			<?php } ?>
		</label>
	</form>
</div>