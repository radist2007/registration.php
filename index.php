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
        <title>bylo4na</title>
        <meta name="description" content="Навчальний сайт, для перевірки реєстрації. PHP, MySql" />
        <meta name="keywords" content="тест, логін, пароль" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jsTimer.js"></script>
    </head>
    <body onload="time()">


        <div class="container">
            <div class="wrap">
                <div class="login">
                    <form action="sources/checkIn.php" method="post">
                        <label>login:</label>
                            <input type="text" name="login" placeholder="вкажіть логін" required>
                        <label>password:</label> 
                            <input type="password" name="password" >
                        <input id="loginSubmit" type="submit" value="ОК">
                    </form>
                    <br />
                </div>
                    <a href="sources/registration.php">registration</a>
            </div>
        </div>


<?php
    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }
?>

    </body>
</html>
