<?php
include_once "../file.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<a href="../">Главная</a>.
<br>
<br>
<p>
Добавление страны: <input type="string" name="country" value="">
</p>
<br>
<br>
<form action="../actions/addCountryActions.php" method="GET">
    <button class="btn">Добавить страну</button>
<!--    <p>-->
<!--        Добавление страны: <input type="string" name="country" value=""> <br>-->
        <!--        Добавление страны: <input type="string" name="country" value=""> <br>-->
<!--        <input type="submit">-->
<!--    </p>-->
</form>
</body>
</html>
