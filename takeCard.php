<?php 

function takeCard($credit, $rep)
{
    return str_repeat("*", $rep) . substr($credit, -4);
}
$output = takeCard($_POST['credit']??'', (int) ($_POST['rep']??0))

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>getCard</title>
</head>
<body>
    <div class="example">
            <div class="decision">
                    <div class="content">
                        <form  method="post" class="form">
                                    <p>Строка:</p>
                                <input class="input" type="text" name="credit">
                                    <p>Кол-во *:</p>
                                <input class="input" type="text" name="rep"> </br>
                                    <button class="sub" type="submit">Скрыть</button> </br>
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