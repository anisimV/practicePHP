<?php 

session_start();

if (isset($_GET['do']) && $_GET['do'] == 'logout') {
    unset($_SESSION['auth']);
    $_SESSION['res'] = 'Вы вышли';
    header("Location: index.php");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>admin</title>
</head>
    <body>
        <div>
            <ul>
                <li class="li"><a href="/forms/formSession/index.php">user</a></li>
            </ul>

<?php
        
if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
    }

?>

<?php if (!empty($_SESSION['auth'])): ?>
    <h4>Вы авторизованы!</h4>
    <a href="?do=logout">Выйти</a>
<?php else: ?>
    <h4>Авторизируйтесь!</h4>
<?php endif; ?>
        </div>
    </body>
</html>