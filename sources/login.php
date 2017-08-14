<?php
    session_start();                                                       //Стартуємо сесію
    if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))  //Перевіряємо чи існує сесійна змінна залоговани і чи вона це правда
    {
        header('Location: sources/within.php');                                    //Переходимо на сторінку within.php
        exit();                                                            //Не загружаємо наступну частину сторінки
    }
    $title = "Залогуватись";           //Змінна для тітл в хедері
    require "../blocks/head/head.php";   //Підключаємо хедер
?>

    <body onload="time()">

        <section class="container">
            <div class="back">
                <a href="../index.php">
                    <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                </a>
            </div>
            <div id="time" class="back"></div>
            <div class="wrap animated bounceInUp">
                <div class="login ">
                    <form class="form" action="sources/checkIn.php" method="post">
                        <label >login:</label>
                            <input id="inpLogin" class="inp" type="text" name="login" placeholder="Вкажіть Ваш логін" required autofocus />
                        <label>password:</label>
                            <input id="inpPassword" class="inp" type="password" placeholder="Вкажіть Ваш пароль" name="password" required >
                        <button class="loginSubmit" id="loginSubmit" type="submit" >ОК</button>
                    </form>
                    <br />
                </div>
                    <a href="../sources/registration.php">registration</a>
            </div>
        </section>

<?php
    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }

    require "../blocks/footer/footer.php";   //Підключаємо футер
?>
    </body>
</html>
