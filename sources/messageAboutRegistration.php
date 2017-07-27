<?php
    session_start();                                //Старт сесії
        if ((isset ($_SESSION['mess_about_reg']) == true) {
            $mess_reg_nike = $_POST['nick'];
            $mess_reg_email = $_POST['email'];
            $message = "Нова реєстрація:\r\n nick: $mess_reg_nike\r\n email: $mess_reg_email"; //Тіло повідомлення
            $to = "izofatov2007@gmail.com";           //Кому
            $from = "registration.php";               //Від кого
            $subject = "New registration";            //Тема повідомлення
            $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
            mail($to, $subject, $message, $headers);
            // if (mail($to, $subject, $message, $headers)) {
            //     echo "&lt;h3&gt;Сообщение отправлено&lt;/h3&gt;";
            // }
            // else {
            //     echo "&lt;h3&gt;При отправке сообщения возникла ошибка&lt;/h3&gt;";
            // }
        }
    exit();                                         //Кінець сесії
?>