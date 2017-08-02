<?php
    session_start();                                                       //Стартуємо сесію
    if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))  //Перевіряємо чи існує сесійна змінна залоговани і чи вона це правда
    {
        header('Location: sources/within.php');                                    //Переходимо на сторінку within.php
        exit();                                                            //Не загружаємо наступну частину сторінки
    }
?>
<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="UTF-8">
        <title>login</title>            
        <meta name="description" content="Навчальний сайт, для перевірки реєстрації. PHP, MySql" />
        <meta name="keywords" content="реєстрація, логін, пароль" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/media.css" rel="stylesheet">
        <script src="js/jsTimer.js"></script>
    </head>
    <body onload="time()">

        <section class="container">
            <div id="time"></div>
            <div class="wrap">
                <div class="login">
                    <form class="form" action="sources/checkIn.php" method="post">
                        <label>login:</label>
                            <input class="inp" type="text" name="login" placeholder="Вкажіть Ваш логін" required >
                        <label>password:</label>
                            <input class="inp" type="password" placeholder="Вкажіть Ваш пароль" name="password" required >
                        <button class="loginSubmit" type="submit" >ОК</button>
                    </form>
                    <br />
                </div>
                    <a href="sources/registration.php">registration</a>
            </div>
        </section>

<?php
    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }

    require "blocks/footer/footer.php";   //Підключаємо футер
?>
    </body>
</html>
