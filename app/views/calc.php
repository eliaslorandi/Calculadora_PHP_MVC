<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        A value: <input type="text" name="a" value="<?php echo isset($a) ? $a : "" ?>">
        <br>
        B value: <input type="text" name="b" value="<?php echo isset($b) ? $b : "" ?>">
        <br>
        <input type="submit" value="Send">
    </form>
    <?php
        if(isset($result)){
            echo "<p> Result: $result <p/>";
        }
    ?>
</body>
</html>