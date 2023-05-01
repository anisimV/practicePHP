<?php 

function fibonacci($num)
{
    if ($num < 2) {
        return $num;
    } else {
        return fibonacci($num - 1) + fibonacci($num - 2);
    }
}
$output = fibonacci($_GET['num']??'')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/libs/highlight/styles/atom-one-dark-reasonable.min.css">
    <title>fibonacci</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.html"><button class="sub" type="submit">Главная</button></a>
                <p>Функция показывает число фибоначи, нужно указать порядковый номер</p>
            </div>
            
                <div class="decision">
                        <div class="content">
                        
                            <form class="form">
                                <p>Введите число</p>
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

function fibonacci($num)
{
    if ($num &lt; 2) {
        return $num;
    } else {
        return fibonacci($num - 1) + fib($num - 2);
    }
}
$output = fibonacci($_POST['num']??'')

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
