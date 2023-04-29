<?php

function degreeOfthree($a)
{
    for ($i = 0; $i <= $a; $i++) {
        if (pow(3, $i) == $a) {
            return $i;
        }
    }
    return $a .' не является степенью числа 3';
}

$output = '';
if (array_key_exists('num', $_GET)){
    $output = degreeOfthree($_GET['num']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/libs/highlight/styles/atom-one-dark-reasonable.min.css">
    <title>degreeOfthree</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.html"><button class="sub" type="submit">Главная</button></a>
                <a href="/functions/degreeOfthreeTwo.php"><button class="option" type="submit">Решение 2 </button></a>
            </div>

                <div class="decision">
                        <div class="content">
                        
                            <form class="form">
                                <p>Проверить число</p>
                                <input class="input" type="number" name="num" autocomplete="off">
                                <button class="sub" type="submit">Вычислить</button> </br>
                                <p>Результат: <span><?=@$output?></span></p>
                            </form>

                        </div>
                </div>
    
                <div class="decision">
                    <div class="content">
<pre>
    <code class="php">
&lt;?php

function degreeOfthree($a)
{
    for ($i = 0; $i &lt;= $a; $i++) {
        if (pow(3, $i) == $a) {
            return $i;
        }
    }
    return $a .' не является степенью числа 3';
}

$output = degreeOfthree($_GET['num']??'')

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
