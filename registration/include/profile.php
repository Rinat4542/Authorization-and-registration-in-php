<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/auto.css">
</head>
<body>
    <!--Профиль-->
    <form>
        <img src="<?= $_SESSION['user']['image'] ?>" width="300px" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a><br><br>
        <a href="#" class="logout">Выход</a>
    </form>

</body>
</html>