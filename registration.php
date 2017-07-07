<?php

    session_start();

    if(isset($_POST['email']))
    {
        //Вдала валідація
        $all_OK=true;

        //Перевірка правельності ніка
        $nick = $_POST['nick'];

        //Перевірка довжини ніка
        if ((strlen($nick)<3 || (strlen($nick)>20)))
        {
            $all_OK=false;
            $_SESSION['e_nick']="NICKNAME повинен бути від 3 до 20 знаків!";
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

                    Nickname: <br /> <input type="text" name="nick"><br />
                    <?php
                        if(isset($_SESSION['e_nick']))
                        {
                            echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                            unset($_SESSION['e_nick']);
                        }
                    ?>
                    E-mail: <br /> <input type="text" name="email"><br />
                    Your password: <br /> <input type="password" name="passwordReg1"><br />
                    Repid password: <br /> <input type="password" name="passwordReg2"><br />
                    <label>
                        <input type="checkbox" name="regulamin"> ПIДТВЕРДИТИ
                    </label> <br />
                    <input type="submit" value="ЗАРЕЄСТРУВАТИСЬ">
                </form>
            </div>
        </div>

    </body>
</html>
