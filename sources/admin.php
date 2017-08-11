<?php

    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: ../index.php');
        exit();
    }
    $title = "admin page";           //Змінна для тітл в хедері
    require "../blocks/head/head.php";   //Підключаємо хедер

    $gender;
    if(isset($_GET['gender'])) 
    {
        $gender = $_GET['gender'];
    } 
    else {
        $gender = "test";
    }

?>

    <body>


            <section class="container">
            <div class="back">
                <a href="../index.php">
                    <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                </a>
            </div>
            <div id="time" class="back"></div>
              <div class="wrapReg animated bounceInUp">  
                <div id="img">
                    <img id="female" src="../img/female-720.png" alt="famale" ></img>
                    <img id="male" src="../img/male-720.png" alt="male"></img>
                </div>
<?php
    echo "<div><h3>Вітаю ".$_SESSION['user'].'!</h3></div>';
?>
                            <br />
                        <hr />
                            <br />
                        <div class="text"><p>Адмінка!</p>
<?php
    echo "<div><h3>Вітаю ".$gender.'!</h3></div>';
?>                          <p> Щиро вітаю на сайті! </p></div>
                            <br /><hr />
                            <br />
                        <div><a href="logout.php"> Logout</a></div>
             </div>  

            </section>
<?php
    require "../blocks/footer/footer.php";   //Підключаємо футер
?>

    </body>
        <script src="../js/admin.js"></script> 
        <script src="../js/Timer.js"></script>
</html>

