<?php
        if ((isset ($_SESSION['mess_about_reg']) == true)) {
            $mess_reg_nike = $_POST['nick'];
            $mess_reg_email = $_POST['email'];
            $message = "Нова реєстрація:\r\n nick: $mess_reg_nike\r\n email: $mess_reg_email"; //Тіло повідомлення
            $to = "izofatov2007@gmail.com";           //Кому
            $from = "registration.php";               //Від кого
            $subject = "New registration";            //Тема повідомлення
            $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
            mail($to, $subject, $message, $headers);
        }
?>