<?php

    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: ../index.php');
        exit();
    }
    $title = "Зареєстровано";           //Змінна для тітл в хедері
    require "../blocks/head/head.php";   //Підключаємо хедер
?>

    <body>

            <section class="container">
                <div class="wrap">

                <div class="wrap">
<?php
    echo "<div><h3>Вітаю ".$_SESSION['user'].'!</h3></div>';
?>
                        <br />
                    <hr />
                        <br />
                    <div class="text"><p>Тепер Ви можете входити на сайт як зареєстрований користувач,
                            для цього Вам необхідно ввести свій логін та пароль на головній сторінці.</p>
                        <p> Щоб це зробити натисніть LOGOUT</p></div>
                        <br /><hr />
                        <br />
                    <div><a href="logout.php"> Logout</a></div>
                </div>
                </div>
            </section>
<?php
    require "../blocks/footer/footer.php";   //Підключаємо футер
?>

    </body>
</html>

