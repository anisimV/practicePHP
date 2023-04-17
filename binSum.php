<?php
function binSum($binNum1, $binNum2) {
    $decNum1 = bindec($binNum1);
    $decNum2 = bindec($binNum2);
    return decbin($decNum1 + $decNum2);
}
function is_binary($num) {
    return preg_match('~^[01]+$~', $num);
}
$x = (isset($_POST['x']) and is_binary($_POST['x'])) ? $_POST['x'] : '';
$y = (isset($_POST['y']) and is_binary($_POST['y'])) ? $_POST['y'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Binary sum</title>
</head>
<body>
    <div class="example">
        <div class="decision">
            <div class="content">
                <form method="post">
                    <fieldset style="display: inline-block;">
                        <legend>Сумма двоичных чисел</legend>
                            Введите двоичные числа:<br>
                                x = <input type="text" name="x" value="<?php echo $x; ?>">
</br>
                                y = <input type="text" name="y" value="<?php echo $y; ?>">
</br>
                                <input type="submit" value="Вычислить сумму">
<hr>
                <div class="result">
                    <?php echo "Binary: $x + $y = ", binSum($x, $y), "<br>"; ?>
                    <?php echo "Decimal: ", bindec($x), " + ", bindec($y), " = ", bindec($x) + bindec($y); ?>
                </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="decision">
            <div class="content">
                <form method="post">
                    <fieldset style="display: inline-block;">
                        <legend>Решение</legend>
                        <img src="img/binSum.PNG" alt="binSum">
                        

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
