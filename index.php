<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
<?php
        require_once 'forms/dateTime.php';
?>
    <div class="example">
            <div class="test">
                <p><?=dateTimes();?>  <a href="https://github.com/anisimV?tab=repositories" target="_blank">git</a> </p>
            <a href="/test.php">Тестовый файл</a> 
            </div>
        <div class="contents">
            <div class="functions">
                <ul>
                    <b><span>Решение функций:</span></b>
                    <li><a href="functions/binSum.php">Функция binSum</a></li>
                    <li><a href="functions/cutText.php">Функция cutText</a></li>
                    <li><a href="functions/takeCard.php">Функция takeCard</a></li>
                    <li><a href="functions/fibonacci.php">Функция fibonacci</a></li>
                    <li><a href="functions/sumNumbers.php">Функция sumNumbers</a></li>
                    <li><a href="functions/degreeOfthree.php">Функция degreeOfthree</a></li></a></li>
                </ul>
                <div class="vertical"></div>
            </div>
        </div>
        <div class="contents">
            <div class="functions">
                <ul>
                    <b><span>Работа с формами:</span></b>
                    <li><a href="/forms/testFormsTwo.php">testFormsTwo</a></li>
                    <li><a href="/forms//formSession/index.php">Тест работы сессий</a></li>
                </ul>
                <div class="vertical"></div>
            </div>
        </div>
    </div>
</body>
</html>