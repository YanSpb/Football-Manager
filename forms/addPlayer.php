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
</head>
<body>
<a href="../">Главная</a>.
<form action="../actions/addPlayerActions.php" method="GET">
    <p>Добавление игрока:<br>
        Клуб: <select name="club">
            <?php
            foreach ($clubs as $id => $name){
                echo '<option value="' .$id . '"> '.$name .' </option>';
            }
            ?>
        </select>
        Название:  <input required type="text" name="name" value=""><br>
        <input type="submit">
    </p>
</form>
</body>
</html>