<?php

    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: ../index.php');
        exit();
    }
    $title = "Регістрація";           //Змінна для тітл в хедері
    require "../blocks/head/head.php";   //Підключаємо хедер
?>

    <body>
        <header class="header">
            <h1>registration</h1>
            <p>in</p>
        </header>


            <section class="container">
                <div class="wrap">
                    <div class="login">
                        <h2>Вітаю, тепер Ви знаходитесь на сайті як зареєстрований користувач!</h2>
                    </div>
                </div>
<?php
    echo "<p>Вітаю ".$_SESSION['user'].'![<a href="logout.php"> Logout</a>]</p>';
    
?>
            </section>

    </body>
</html>

