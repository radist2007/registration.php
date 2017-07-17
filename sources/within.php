<?php

    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="UTF-8">
        <title>bylo4na</title>
        <meta name="description" content="Тестовий сайт, для перевірки реєстрації. PHP && MySql" />
        <meta name="keywords" content="тест, логін, пароль" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/jsTimer.js"></script>
    </head>
    <body>
        <header class="header">
            <h1>registration</h1>
            <p>in</p>
        </header>
        <conteiner class="conteiner">
            <div class="wrap">
                <h2>wrap</h2>
<?php
    echo "<p>Вітаю ".$_SESSION['user'].'![<a href="logout.php"> Logout</a>]</p>';
    
?>
            </div>
        </conteiner>

    </body>
</html>

