<?php
include_once "../database.php";
$countries = getCountries();  //передаю в $countries массив(id страны, название страны) из функции
//var_dump($countries.php);
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
Страна: <select name="country">
    <?php
    foreach ($countries as $id => $name){
        echo '<option value="' .$id . '"> '.$name .' </option>';
    }
    ?>
</select>
Название:  <input required type="text" name="name" value=""><br>
<br>
<form action="../actions/addClubActions.php" method="GET">
    <button class="btn">Добавить клуб</button>
<!--    <p>Добавление клуба:<br>-->
    <br>
    <br>
<!--        Страна: <select name="country">-->
<!--            --><?php
//            foreach ($countries as $id => $name){
//                echo '<option value="' .$id . '"> '.$name .' </option>';
//            }
//            ?>
<!--        </select>-->
<!--        Название:  <input required type="text" name="name" value=""><br>-->
<!--        <input type="submit">-->
<!--    </p>-->
</form>
</body>
</html>
