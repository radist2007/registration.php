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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jsTimer.js"></script>
    </head>
    <body onload="time()">

        <header class="w3-bar w3-light-grey w3-border">
            <!--<a class="w3-bar-item w3-button w3-green">bylo4na</a>-->
            <a href="#" class="w3-bar-item w3-button w3-green"><i class="fa fa-home"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a>
            <!--<h4 id="time"></h4>-->

        </header>

        <div class="login">
            <form class="w3-container" action="checkIn.php" method="post">
                login: <input class="w3-input w3-border w3-light-grey" type="text" name="login">
                password: <input class="w3-input w3-border w3-light-grey" type="password" name="password"><br />
                <input class="w3-btn w3-light-green" id="loginSubmit" type="submit" value="ОК">
            </form>
            <a href="registration.php">registration</a>
        </div>


<?php
    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }
?>

    </body>
</html>
