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
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL); // санітарний фільтр - безпечний

        // echo $emailB; exit();

        if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) ||($emailB!=$email))
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

        if($password1!=$password2)
        {
            $all_OK=false;
            $_SESSION['e_password']="Паролі не співпадають";
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
        <meta charset="UTF-8">
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
                        if(isset($_SESSION['e_nick']))
                        {
                            echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                            unset($_SESSION['e_nick']);
                        }
                    ?>
                    E-mail: <br /> <input type="text" name="email" /><br />
                    <?php
                        if(isset($_SESSION['e_email']))
                        {
                            echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                            unset($_SESSION['e_email']);
                        }
                    ?>
                    Your password: <br /> <input type="password" name="passwordReg1" /><br />
                    <?php
                        if(isset($_SESSION['e_password']))
                        {
                            echo '<div class="error">'.$_SESSION['e_password'].'</div>';
                            unset($_SESSION['e_password']);
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
