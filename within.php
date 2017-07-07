<?php

    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>bylo4na</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <h1>Авторизовано</h1>
        </div>
<?php
    echo "<p>Witaj ".$_SESSION['user'].'![<a href="logout.php"> Logout</a>]</p>';
    
?>

    </body>
</html>

