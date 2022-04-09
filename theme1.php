<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $theme = $_POST["theme"];
        $_SESSION["theme"] = $theme;
        $_SESSION["name"] = $name;
        $_SERVER['HTPP_USER_AGENT'];
        header('Location: theme2.php');
    }
    ?>
    <form action="theme1.php" method="POST">
    <label for="name">Enter your name:</label>
    <br>
    <input type="text" name="name">
    <p>Select theme:</p>
    <input type="radio" name="theme" id="light" value="light" checked><label for="light">Light</label>
    <br>
    <input type="radio" name="theme" id="dark" value="dark"><label for="dark">Dark</label>
    <br>
    <br>
    <input type="submit" value="Save">

    </form>
</body>
</html>