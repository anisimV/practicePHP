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
    <link rel="stylesheet" href="style.css">
    <title>cutText</title>
</head>
<body>
    <div class="example">
            <div class="decision">
                    <div class="content">
                        <form class="form">
                                    <p>Строка:</p>
                                <input class="input" type="text" name="text">
                                    <p>Кол-во символов:</p>
                                <input class="input" type="number" name="number"> </br>
                                    <button class="sub" type="submit">Обрезать</button> </br>
                        <p>Результат: <span><?=@$output?></span></p>
                        </form>
                    </div>
            </div>
    
    <div class="decision">
            <div class="content">
<pre class="code">
//код php:
function cutText($text, $number)
{
$resutl = mb_substr($text, 0, $number) . "...";
return $resutl;
}
$output = cutText($_GET['text']??'', (int) ($_GET['number']??0));
</pre>

        </div>
    </div>  
    </div>         
</body>
</html>