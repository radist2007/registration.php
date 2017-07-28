<?php
    session_start();                                                       //Стартуємо сесію
    if(!isset($_SESSION['udanarejestracja']))  //Перевіряємо чи існує сесійна змінна залоговани і чи вона це правда
    {
        header('Location: ../index.php');                                    //Переходимо на сторінку within.php
        exit();                                                            //Не загружаємо наступну частину сторінки
    }
    else
    {
        unset($_SESSION['udanarejestracja']);
    }
?>


<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="UTF-8">
        <title>Registration completed</title>
        <meta name="description" content="Тестовий сайт, для перевірки реєстрації. PHP && MySql" />
        <meta name="keywords" content="тест, логін, пароль" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/jsTimer.js"></script>
    </head>
    <body onload="time()">


        <header class="header">

            <section>
                <h1>registration completed</h1>
                <p>in</p>
            </section>
                <h3><span ><a href="index.php">logout</a></span></h3>
        </header>

            <a href="../index.php">Увійти на свій акаунт</a>



<?php
    require "../blocks/footer/footer.php";   //Підключаємо футер

    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }
?>

    </body>
</html>
