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

        <div class="about_me">

            <h1> <?php echo $p ?> </h1>

            <div class="data">

                <div class="myImg">
                    <?php echo '<img src="img/3.jpg">'; ?>
                </div>

                <div class="fullname">

                    <h3> Вас приветствует
                        <?php echo $name, ' ', $surname; ?>
                         из города
                        <?php echo ' ', $city; ?>
                         , мне уже
                        <?php echo $age; ?>
                        годика(ов)!
                    </h3>
                </div>
            </div>

            <div class="knowledge">
                <hr>
                <h3>Ниже продемонстрирована работа с переменными из страницы 'knowledge.inc.php':</h3>
                <?php include 'knowledge.inc.php'; ?>
                <p>Пример 1: "склеивание" значений переменных 'a', 'b', 'c':</p>
                <?php
                echo $a, ' ', $b, ' ', $c;
                ?> <br>
                <hr>
                <h3>Пример 2: результат работы оператора 'if' (код см. в странице 'knowledge.inc.php'):</h3>
                <?php
                echo $d
                ?> <br>

            </div>

        </div>

            <?php include 'footer.inc.php' ?>

    </div>

</body>
</html>
