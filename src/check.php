<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
<?php
    $username = filter_var(trim($_POST['username']), 
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['email']), 
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), 
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($password) < 2)
    {
        echo "Недопустимая длина пароля (от 3 символов)";
        exit();
    }

    $password = md5($password."dhfyuregds23");

    $mysql = mysqli_connect("localhost", "root", "", "register-bd");
    $mysql->query("INSERT INTO `users` (`username`, `login`, `password`) 
    VALUES('$username', '$login', '$password')");

    $mysql->close();

    header('Location: /');
?>
</body>
</html>