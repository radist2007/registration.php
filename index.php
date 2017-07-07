<?php
    session_start();
    if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
    {
        header('Location: within.php');
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
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <header class="header">
            <h1>bylo4na</h1>
        </header>

        <div class="login">
            <form action="checkIn.php" method="post">
                login: <input type="text" name="login">
                password: <input type="password" name="password">
                <input id="loginSubmit" type="submit" value="ОК">
            </form>
            <a href="registration.php">registration</a>
        </div>

<?php
    if(isset($_SESSION['mistake']))
    {
        echo $_SESSION['mistake'];
    }
?>

    </body>
</html>
