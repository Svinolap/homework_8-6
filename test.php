<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=980px, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

<h2 style="text-align: center"> Здесь могла быть новая страница с чем-то важным и интересным, но программист поленился подумать :( </h2>
    <div class="myImg" id="test" style="text-align: center"> <br>
        <?php echo '<img src="img/5.jpg" width="850" height="550">'; ?>
    </div>
    <br>
    <br>
    <?php include 'footer.inc.php' ?>

</div>

</body>
</html>
