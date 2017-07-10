<?php
    session_start();                                                       //Стартуємо сесію
    if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))  //Перевіряємо чи існує сесійна змінна залоговани і чи вона це правда
    {
        header('Location: within.php');                                    //Переходимо на сторінку within.php
        exit();                                                            //Не загружаємо наступну частину сторінки
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jsTimer.js"></script>
    </head>
    <body onload="time()">

        <header class="">
            <!--<a class="w3-bar-item w3-button w3-green">bylo4na</a>-->
            <a href="#" class=""><i class="fa fa-home"></i></a>
            <!--<a href="#" class=""><i class="fa fa-search"></i></a>
            <a href="#" class=""><i class="fa fa-envelope"></i></a>
            <a href="#" class=""><i class="fa fa-globe"></i></a>-->
            <a href="#" class=""><i class="fa fa-sign-in"></i></a>
            <!--<h4 id="time"></h4>-->
        </header>

        <div class="login">
            <form class="" action="checkIn.php" method="post">
                login: <input class="" type="text" name="login" placeholder="вкажіть логін" required>
                password: <input class="" type="password" name="password" required>
                <input class="" id="loginSubmit" type="submit" value="ОК">
            </form>
            <br />
        </div>
            <a href="registration.php">registration</a>


<?php
    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }
?>

    </body>
</html>
