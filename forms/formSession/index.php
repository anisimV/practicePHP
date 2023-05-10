<?php 

session_start();

$login = 'admin';
$password = '$2y$10$HNG1IuCzk8nrmLc4.ptV9.zcv2I7cM4.JBS69FEm6xh7ZesNWelLO';
//echo password_hash("$2y$10$HNG1IuCzk8nrmLc4.ptV9.zcv2I7cM4.JBS69FEm6xh7ZesNWelLO", PASSWORD_DEFAULT);

if (!empty($_POST)) {
    if($_POST['login'] == $login && password_verify($_POST['password'], $password)) {
        //if ($_POST['login'] == $login && $_POST['password'] == $password) {
        $_SESSION['auth'] = $login;
        $_SESSION['res'] = 'Успешно!';
        header("Location: testFormSession.php");
        die;
    } else {
        $_SESSION['res'] = 'Не верный логин или пароль!';
    }
    header("Location: index.php");
    exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>user</title>
</head>
    <body>
            <div class="back">
                <a href="/index.php"><button class="sub" type="submit">Главная</button></a>
            </div>

            <div class="upkeep">
        <ul>
            <li class="li"> <a href="/forms/formSession/testFormSession.php">Админ</a></li>
            <li class="li">Ligin: admin</li>
            <li class="li">Password: 48156</li>
        </ul>

        

        <form class="form" method="post">
            login: <input type="text" name="login" class="input">
            password: <input type="password" name="password" class="input">
            <button type="submit" class="sub">Войти</button>
        </form>

    <div class="error">
<?php
        
if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
    }

?>
        </div>
    </div>    
    </body>
</html>