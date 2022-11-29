<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/auto.css">
</head>
<body>
    <!--Форма авторизации-->
    <form action="include/signin.php" method="POST">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин"><br>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"><br><br>
        <button type="submit">Войти</button>
        <p>У вас нет аккаунта? - <a href="http://localhost/registration/register.php">Пожалуйста зарегистрируйтесь!</a></p>

        <?php 
            if(isset($_SESSION['message'])){
                echo '<p class="message">' .$_SESSION['message']. '</p>';

            }
            unset($_SESSION['message']);
            
        ?>


    </form>

    
</body>
</html>