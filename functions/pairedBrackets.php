<?php 

function pairedBrackets($str)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $count = $str[$i] === '(' ? $count + 1 : $count - 1;
        if ($count < 0) {
            return false;
        }
    }

    return $count === 0;
}
$output = pairedBrackets($_GET['str']??'')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/libs/highlight/styles/atom-one-dark-reasonable.min.css">
    <title>pairedBrackets</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.php"><button class="sub" type="submit">Главная</button></a>
                <p>Функция принимает строку из скобок и проверяется имеет ли каждая скобка пару
                </p>
            </div>

            <div class="decision">
                        <div class="content">
                        
                            <form class="form">
                                <p>Введите строку из "(", ")"</p>
                                <input class="input" type="text" name="str" autocomplete="off">
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

function pairedBrackets($str)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $count = $str[$i] === '(' ? $count + 1 : $count - 1;
        if ($count < 0) {
            return false;
        }
    }

    return $count === 0;
}
$output = pairedBrackets($_POST['str']??'')

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
