<?php

    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: ../index.php');
        exit();
    }
    $title = "admin page";           //Змінна для тітл в хедері
    require "../blocks/head/head.php";   //Підключаємо хедер

    if(isset($_GET['gender'])) 
    {
        $gender = $_GET['gender'];
    } else {
        $gender = "test";
    }

    if(isset($_GET['q'])) {
        header("Content-type: text/txt; charset=UTF-8");
        if($_GET['q']=='1') {
            $gender = "123";
        }
        else {
            echo 'карявый GET запрос';
        }
    }

    if(isset($_POST['z'])) {
        header("Content-type: text/txt; charset=UTF-8");
        if($_POST['z']=='1') {
            echo 'запрос POST успешно обработан, z = 1';
        }
        else {
            echo 'карявый POST запрос';
        }
    }

?>



<script type="text/javascript">

    function SendGet() {
        //отправляю GET запрос и получаю ответ
        $$a({
            type:'get',//тип запроса: get,post либо head
            url:'admin.php',//url адрес файла обработчика
            data:{'q':'1'},//параметры запроса
            // response:'text',//тип возвращаемого ответа text либо xml
            // success:function (data) {//возвращаемый результат от сервера
            //     $$('result',$$('result').innerHTML+'<br />'+data);
            // }
        });
    }
    
    function SendPost() {
        //отправляю POST запрос и получаю ответ
        $$a({
            type:'post',//тип запроса: get,post либо head
            url:'ajax.php',//url адрес файла обработчика
            data:{'z':'1'},//параметры запроса
            response:'text',//тип возвращаемого ответа text либо xml
            success:function (data) {//возвращаемый результат от сервера
                $$('result',$$('result').innerHTML+'<br />'+data);
            }
        });
    }
    
    function SendHead() {
        //отправляю HEAD запрос и получаю заголовок
        $$a({
            type:'head',//тип запроса: get,post либо head
            url:'ajax.php',//url адрес файла обработчика
            response:'text',//тип возвращаемого ответа text либо xml
            success:function (data) {//возвращаемый результат от сервера
                $$('result',$$('result').innerHTML+'<br />'+data);
            }
        });
    }
</script>

    <body onload="time()">

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
?>
                          <p onclick="SendGet()"> Щиро вітаю на сайті! </p></div>
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
        <script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
</html>

