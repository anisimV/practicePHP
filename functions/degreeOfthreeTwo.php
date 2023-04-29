<?php

function degreeOfthree($a) {
    for ($i=1, $p=3; $p <= $a; ++$i, $p*=3) {
        if ($p == $a)
            return $i;
    }
    return false;
}

$output = '';
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);// усекает числа до тех что вмещается в int... 
// как-бы просто проверка is_numeric() как-то ближе... если вообще не притянуть GMP или BCMath
    if ($num <= 0 || $num != $_GET['num']) // '3.0000000000000001' пролезет .)
        $output = '<p>Введите целое положительное число.</p>';
    else
        $output = ''
        .(($output = degreeOfthree($num)) ? "$num это 3 в степени $output."
            : "$num не является степенью числа 3."
        ).'</span></p>';
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
    <title>degreeOfthreeTwo</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.html"><button class="sub" type="submit">Главная</button></a>
                <a href="/functions/degreeOfthree.php"><button class="option" type="submit">назад </button></a>
            </div>

                <div class="decision">
                        <div class="content">
                        
                            <form class="form">
                                <p>Проверить число</p>
                                <input class="input" type="number" name="num" autocomplete="off">
                                <button class="sub" type="submit">Вычислить</button> </br>
                                <p>Результат: <span><?=$output?></span></p>
                            </form>
                        </div>
                </div>
    
                <div class="decision">
                    <div class="content">
<pre>
    <code class="php">
&lt;?php

function degreeOfthree($a) {
    for ($i=1, $p=3; $p <= $a; ++$i, $p*=3) {
        if ($p == $a)
            return $i;
    }
    return false;
}

$output = '';
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
// усекает числа до тех что вмещается в int 
// если вообще не притянуть GMP или BCMath
    if ($num <= 0 || $num != $_GET['num'])
 // '3.0000000000000001' пролезет
        $output = '<p>Введите целое положительное число.</p>';
    else
        $output = '<p>Результат: <span>'
        .(($output = degreeOfthree($num)) 
        ? "$num это 3 в степени $output."
            : "$num не является степенью числа 3."
        ).'</span></p>';
}
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
