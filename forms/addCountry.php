<?php
include_once "../file.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="../">Главная</a>.
<br>
<br>
<form action="../actions/addCountryActions.php" method="GET">
    <button>Добавление страны</button>
    <p>
        Добавление страны: <input type="string" name="country" value=""> <br>
        <!--        Добавление страны: <input type="string" name="country" value=""> <br>-->
<!--        <input type="submit">-->
    </p>
</form>
</body>
</html>
