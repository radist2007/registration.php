<?php

    session_start();                       //Відкриваємо сесію

    if((!isset($_POST['login'])) || (!isset($_POST['password'])))   // Перевіряємо чи пароль та логін встановлені для цієї сесії
    {
        header('Location: ../index.php'); // ../index.php');     //Повернаємо на стартову сторінку
        exit();                            //Закриваємо сесію
    }

    require_once "dbconnect.php";          //Одноразово підєднуемось до файлу dbconnect.php


    $connect = @new mysqli($db_host, $db_user, $db_password, $db_database);   // Open connect!  @ - не пускає опис помилки старший аналог try..catch

    if ($connect->connect_errno!=0)           //Якщо у connect  --  connect error nomber != 0
    {
        echo "Error: ".$connect->connect_errno."Ops..".$connect->connect_errno;    //Повідомляємо про помилку
    }
    else
    {

        $login = $_POST['login'];                                        //Вводимо до змінної login значення з форми логування
        $password = $_POST['password'];                                  //Вводимо до змінної password значення з форми логування

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");              // від sql інєкції???????????????

        if ($rezultat = @$connect->query(                                  // від sql інєкції???????????
        sprintf("SELECT * FROM users WHERE name='%s' ",                    // від sql інєкції???????????
        mysqli_real_escape_string($connect,$login))))                      // від sql інєкції???????????
        {
            $ilu_userow = $rezultat->num_rows;           //Перевірений результат на інєкції, кількість його рядків, 
            if($ilu_userow>0)                            //Перевіряємо чи є такий користувач
            {
                $wiersz = $rezultat->fetch_assoc();     //fetch принеси  APORT

                if(password_verify($password,$wiersz['password']))    //Перевіряємо чи співпадають введений пароль на хаш парольв базі
                {

                    $_SESSION['zalogowany'] = true;             //Створюємо сесійну змінну залогований 

                    $_SESSION['id'] = $wiersz['id'];            //Вводимо до сесійно змінної id значення id з бази 
                    $_SESSION['user']= $wiersz['name'];         //Вводимо до сесійно змінної user значення name з бази 

                    unset($_SESSION['mistake']);               //Очищуємо змінну mistake
                    $rezultat->free_result();                  //Звільняемо память звязану з результуючим набором
                    header('Location: within.php'); //Переходимо на сторінку withi.php
                }
                else                               //Хаш паролі не співпали
                {
                    $_SESSION['mistake'] = '<span style="color:red">Не правильний логін або пароль!</span>';//Повідомляємо про помилку
                    header('Location: ../index.php');           //Повертаємо на головну сторінку
                }
            }
            else
            {
                $_SESSION['mistake'] = '<span style="color:red">Не правильний логін або пароль!</span>';//Повідомляємо про помилку
                header('Location: ../index.php'); //Повертаємо на головну сторінку
            }
        }
        $connect->close();  // Close connect.
    }
?>