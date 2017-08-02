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
    $title = "Вітаємо!";           //Змінна для тітл в хедері
    require "../blocks/head/head.php";   //Підключаємо хедер
?>

    <body onload="time()">
            <section class="container">
                <div class="wrap">
                    <div class="wrap">
                        <br />
                    <hr />
                        <br />
                    <div class="text">
                        <p>Тепер Ви можете входити на сайт як зареєстрований користувач,
                            для цього Вам необхідно ввести свій логін та пароль на головній сторінці.</p>
                        <p> Щоб це зробити натисніть LOGOUT</p>
                    </div>
                        <br />
                    <hr />
                        <br />
                    <div><a href="logout.php"> Logout</a></div>
                    </div>
                </div>
            </section>

<?php
    require "../blocks/footer/footer.php";   //Підключаємо футер

    if(isset($_SESSION['mistake']))            //Перевіряємо чи існує сесійна змінна помилки
    {
        echo $_SESSION['mistake'];             //Показуємо сесійну змінну помилки
    }
?>

    </body>
</html>
