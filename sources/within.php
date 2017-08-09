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
                    <div class="text"><p>Тепер Ви зайшли як зареєстрований користувач,
                            це дуже гарно то поважно!</p>
                        <p> Щиро вітаю на сайті! </p></div>
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

