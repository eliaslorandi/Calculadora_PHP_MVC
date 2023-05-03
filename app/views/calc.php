<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC CALCULATOR SYSTEM</title>
</head>
<body>
    <h1>PHP MVC CALCULATOR SYSTEM</h1>
    <form method="POST" action="<?php echo URL_BASE ."calc/multi"?>">
        A value: <input type="text" name="a">
        <br>
        B value: <input type="text" name="b">
        <br>
        <input type="submit" value="Send">
    </form>
    <p>Result: </p>
</body>
</html>