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
        <link href="../css/media.css" rel="stylesheet">
        <script src="../js/jsTimer.js"></script>
    </head>
    <body>
        <header class="header">
            <h1>registration</h1>
            <p>in</p>
        </header>


            <section class="container">
                <div class="wrap">
                    <div class="login">
                        <h2>Вітаю, тепер Ви знаходитесь на сайті як зареєстрований користувач!</h2>
                    </div>
                </div>
<?php
    echo "<p>Вітаю ".$_SESSION['user'].'![<a href="logout.php"> Logout</a>]</p>';
    
?>
            </section>

    </body>
</html>

