<?php 

function sumNumbers($num)
{
    if($num >= 10) {
        $num = array_sum(str_split($num));
    }
    
    return $num;
}
$output = sumNumbers($_GET['num']??'')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/libs/highlight/styles/atom-one-dark-reasonable.min.css">
    <title>sumNumbers</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.php"><button class="sub" type="submit">Главная</button></a>
                <p>Функция принимает число и возвращает сумму чисел полученное из числа</p>
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

function sumNumbers($num)
{
    if($num >= 10) {
        $num = array_sum(str_split($num));
    }
    
    return $num;
}
$output = sumNumbers($_GET['num']??'')

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