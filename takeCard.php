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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/libs/highlight/styles/atom-one-dark-reasonable.min.css">
    <title>takeCard</title>
</head>
    <body>
        <div class="example">
            <div class="back">
                <a href="/index.html"><button class="sub" type="submit">Главная</button></a>
            </div>

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
    <code class="php">
&lt;?php 

function takeCard($credit, $rep)
{
    return str_repeat("*", $rep) . substr($credit, -4);
}
$output = takeCard($_POST['credit']??'', (int) ($_POST['rep']??0))

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
