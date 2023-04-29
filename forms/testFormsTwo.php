<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>testFormsTwo</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.html"><button class="sub" type="submit">Главная</button></a>
            </div>
        <?php 
        /*if (isset($_POST)['name']) {
            #name = $_POST['name'];
        } else {
            $name = '';
        }*/
        $name = $_POST['name'] ?? '';
        $emeil = $_POST['emeil'] ?? '';
        ?>


        <?php if ((!trim($name)) || (!trim($emeil))): ?>

                <?php if (!empty($_POST)): ?>
                    <p>Заполните поля</p>
                <?php endif; ?>
                

        <form action="testFormsTwo.php" method="post" class="forms">
            <p>Name: <input type="text" name="name" class="input"></p>
            <p>Emeil: <input type="text" name="emeil" class="input"></p>

            <p>
                <button type="submit" name="send-form">Send</button>
            </p>

            <?php else: ?>

<p>Name: <?= $_POST['name'] ?> </p>
<p>Emeil: <?= $_POST['emeil'] ?> </p>

<?php endif; ?>
        </form>


        </div>
    </body>
</html>
