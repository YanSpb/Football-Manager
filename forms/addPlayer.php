<?php
include_once "../database.php";
$clubs = getClubs();  //передаю в $countries массив(id страны, название страны) из функции
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
Клуб: <select name="club">
    <?php
    foreach ($clubs as $id => $name){
        echo '<option value="' .$id . '"> '.$name .' </option>';
    }
    ?>
</select>
Название:  <input required type="text" name="name" value="">
<br>
<br>
<form action="../actions/addPlayerActions.php" method="GET">
    <button class="btn">Добавить игрока</button>
<!--    <p>Добавление игрока:<br>-->
    <br>
    <br>
<!--        Клуб: <select name="club">-->
<!--            --><?php
//            foreach ($clubs as $id => $name){
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