<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/reg.css">
</head>
<body>
    <form action="include/signup.php" method="POST" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите ФИО"><br>

        <label>Изображение профиля</label>
        <input type="file" name = "image"><br>

        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин"><br><br>

        <label>Электронная почта</label>
        <input type="text" name="email" placeholder="Введите почту"><br><br>

        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"><br><br>

        <label>Подтверждение пароля</label>
        <input type="password" name="confirm" placeholder="Подтвердите пароль"><br><br>

        <button type="submit">Зарегистрироваться</button>
        
        <p>У вас уже есть аккаунт? - <a href="http://localhost/registration/?login=&password=">Нажмите, чтобы войти</a></p><br>
        <?php 
            if(isset($_SESSION['message'])){
                echo '<p class="message">' .$_SESSION['message']. '</p>';

            }
            unset($_SESSION['message']);
            
        ?>
        



    </form>

    
</body>
</html>