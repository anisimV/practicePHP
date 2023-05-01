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
                <p>Тест работы формы (Отправка формы / результат отправки формы) </p>
            </div>

<?php
$name = $_POST['name'] ?? '';
$emeil = $_POST['emeil'] ?? '';
?>

                <div class="upkeep">
                    <form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post" class="forms"">
                        
                    <p>Name: <input type="text" name="name" class="input"></p>
                        <p>Emeil: <input type="text" name="emeil" class="input"></p>
                        <p>
                            <button type="submit" class="sub" name="send-form">Отправить</button>
                        </p>

    
            </form>

<?php if ((!trim($name)) || (!trim($emeil))): ?>

    <?php if (!empty($_POST)): ?>
        <p style="color: red" class="error"">Заполните поля</p>
    <?php endif; ?>

    <?php else: ?>
            <div class="forms">
                <p>Name: <?= $_POST['name'] ?> </p>
                <p>Emeil: <?= $_POST['emeil'] ?> </p>
            </div>
    <?php endif; ?>

            </div>
        </div>
    </body>
</html>
