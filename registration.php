<?php

    session_start();

    if(isset($_POST['email']))
    {
        //Вдала валідація? Уявимо що так.
        $all_OK=true;

        //Перевірка правельності ніка
        $nick = $_POST['nick'];


        //Перевірка довжини ніка
        if ((strlen($nick)<3 || (strlen($nick)>20))) //Перевірка довжини пароля
        {
            $all_OK=false;
            $_SESSION['e_nick']="Nicname повинен бути від 3 до 20 знаків!";
        }

        if (ctype_alnum($nick)==false) //Перевірка чи в паролі тільки літири і цифри ctype_alnum-чек тайп альфа нумерик
        {
            $all_OK=false;
            $_SESSION['e_nick']="Nicname може складатись лише з літер і цифр";
        }

        //Перевірити правельність адреси email
        $email = $_POST['email'];
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL); // санітарний фільтр   emailB->безпечний(без недозволених у emaili знаків)

        // echo $emailB; exit();

        if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) ||($emailB!=$email))  //Перевірка на правельність напису email
        {
            $all_OK=false;
            $_SESSION['e_email']="Напишіть правельну адресу e-mail!";
        }

        //Перевірка правельності пароля
        $password1 = $_POST['passwordReg1'];
        $password2 = $_POST['passwordReg2'];

        if((strlen($password1)<8) || (strlen($password2)>20)) // strlen - довжина 
        {
            $all_OK=false;
            $_SESSION['e_password']="Пароль повинен мати від 8 до 20 знаків";
        }

        if($password1!=$password2)  //Перевіряємо введені паролі на співпадіння
        {
            $all_OK=false;
            $_SESSION['e_password']="Паролі не співпадають";
        }

        // Хешування пароля 
        $password_hash = password_hash($password1, PASSWORD_DEFAULT); //Хешуємо пароль

        //Перевірка на існування користувача
        require_once "dbconnect.php";   //Підключаємо одноразове зєднання з файлом зєднання з базою;
        mysqli_report(MYSQLI_REPORT_STRICT);   //????????????????????????????????

        try
        {
            $connect = new mysqli($db_host, $db_user, $db_password, $db_database);   // Open connect!
            if ($connect->connect_errno!=0)           //Якщо у connect  --  connect error nomber != 0
            {
                throw new Exception(mysqli_connect_errno()); //Кинь новий вийняток
            }
            else
            {
                //Чи nick вже зарезервований?
                $rezultat = $connect->query("SELECT id FROM users WHERE name='$nick'");

                if(!$rezultat) throw new Exception($connect->error);   //Викидаємо помилку

                $ile_takich_nickow = $rezultat->num_rows;              //Визначаємо кількість рядків повернутого запиту з бази
                if($ile_takich_nickow>0)                               //Якщо рядків більше 1, одже nick зайнятий
                {
                    $all_OK=false;
                    $_SESSION['e_nick']="Вже існує акаунт з таким ніком, вибери інший";
                }

                //Чи email вже існує в базі?
                $rezultat = $connect->query("SELECT id FROM users WHERE email='$email'");    //Достаємо з бази email реєстранта

                if(!$rezultat) throw new Exception($connect->error);   //Викидаємо помилку

                $ile_takich_maili = $rezultat->num_rows;              //Визначаємо кількість рядків повернутого запиту з бази
                if($ile_takich_maili>0)                               //Якщо рядків більше 1, одже маіл зайнятий
                {
                    $all_OK=false;
                    $_SESSION['e_email']="Вже існує акаунт приписаний до цього e-mail";
                }

                $connect->close();        //Закриваємо зєднання з базою
            }

        }
        catch(Exception $e) //Злови вийнятки, якщо якісь були кинуті
        {
            echo '<span style="color:red;">Помилка на сервері! Вибачте за незручності та просимо про реєстрацію іншим разом!</span>';
            echo '<br />Інформація для розробника: '.$e; 
        }

        if($all_OK==true)
        {
            //Додаэмо реестаранта до бази
            echo "Вдала реєстарація";
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">                     <!--    -->
        <title>bylo4na registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <header>
            <h1>registration</h1>
        </header>

        <div class="wrap">
            <div id="formReg"> 
                <form method="post">

                    Nickname: <br /> <input type="text" name="nick" /><br />
                    <?php
                        if(isset($_SESSION['e_nick']))      //Якщо помилка e_nick існує
                        {
                            echo '<div class="error">'.$_SESSION['e_nick'].'</div>';  //Виводимо помилку e_nick
                            unset($_SESSION['e_nick']);                               //Очищуємо змінну e_nick
                        }
                    ?>
                    E-mail: <br /> <input type="text" name="email" /><br />
                    <?php
                        if(isset($_SESSION['e_email']))      //Якщо помилка e_email існує
                        {
                            echo '<div class="error">'.$_SESSION['e_email'].'</div>';  //Виводимо помилку e_email
                            unset($_SESSION['e_email']);                               //Очищуємо змінну e_email
                        }
                    ?>
                    Your password: <br /> <input type="password" name="passwordReg1" /><br />
                    <?php
                        if(isset($_SESSION['e_password']))      //Якщо помилка e_password існує
                        {
                            echo '<div class="error">'.$_SESSION['e_password'].'</div>';  //Виводимо помилку e_password
                            unset($_SESSION['e_password']);                               //Очищуємо змінну e_password
                        }
                    ?>
                    Repid password: <br /> <input type="password" name="passwordReg2" /><br />
                    <label>
                        <input type="checkbox" name="regulamin" /> ПIДТВЕРДИТИ
                    </label> <br />
                    <input type="submit" value="ЗАРЕЄСТРУВАТИСЬ" />
                </form>
            </div>
        </div>

    </body>
</html>
