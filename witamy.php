<?php
    session_start();                                                       //Стартуємо сесію
    if(!isset($_SESSION['udanarejestracja']))  //Перевіряємо чи існує сесійна змінна залоговани і чи вона це правда
    {
        header('Location: index.php');                                    //Переходимо на сторінку within.php
        exit();                                                            //Не загружаємо наступну частину сторінки
    }
    else
    {
        unset($_SESSION['udanarejestracja']);
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>bylo4na</title>
        <meta name="description" content="Тестовий сайт, для перевірки реєстрації. PHP && MySql" />
        <meta name="keywords" content="тест, логін, пароль" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jsTimer.js"></script>
    </head>
    <body onload="time()">

        <header class="header">
            <h1>bylo4na</h1>
            <h2>Дякуємо за реєстрацію</h2>
            <!--<h4 id="time"></h4>-->

        </header>


            <a href="index.php">Увійти на свій акаунт</a>



<?php
    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }
?>

    </body>
</html>
