<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
    <title>PHP MVC Calculator</title>
</head>

<body>
    <div class="content">
        <?php
        include_once "header.php";
        $this->load($view, $viewData);
        include_once "footer.php";
        ?>
    </div>
</body>

</html>
<?php
