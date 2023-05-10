<?php
function cutText($text, $number)
{
    $resutl = mb_substr($text, 0, $number) . "...";
    return $resutl;
}
$output = cutText($_GET['text']??'', (int) ($_GET['number']??0));

//$output = cutText($_GET['text']??'', (int) $_GET['number']??0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/libs/highlight/styles/atom-one-dark-reasonable.min.css">
    <title>cutText</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.php"><button class="sub" type="submit">Главная</button></a>
                <p>Функция обрезает строку до указанного числа символов и добовляет "..."</p>
            </div>
            
            <div class="decision">
                <div class="content">

                    <form class="form">
                        <p>Строка:</p>
                        <input class="input" type="text" name="text" autocomplete="off">
                        <p>Кол-во символов:</p>
                        <input class="input" type="number" name="number" autocomplete="off"> </br>
                        <button class="sub" type="submit">Обрезать</button> </br>
                        <p>Результат: <span><?=@$output?></span></p>
                    </form>
                </div>
            </div>

            <div class="decision">
                <div class="content">
<pre class="code">
    <code class="php">
&lt;?php

function cutText($text, $number)
{
    $resutl = mb_substr($text, 0, $number) . "...";
    return $resutl;
}
$output = cutText($_GET['text']??'', (int) ($_GET['number']??0));

?&gt;
    </code>
</pre>

                </div>
            </div>  
        </div>
        
        <script src="/libs/highlight/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
