<?php
include_once "../views/menu.php";
include_once "../database.php";
$clubs = getClubs();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <title>Клубы</title>
</head>
<body>
<form action="../forms/addClub.php" method="GET">
    <button class="btn">Добавление клуба</button>
    <br>
    <br>
    <table>
        <tr>
            <th> id </th>
            <th> name </th>
        </tr>
        <?php
        foreach($clubs as $id => $name) {
            echo '<tr><td>' . $id . '</td><td>' . $name .'</td></tr>';
        }
        ?>
    </table>
</body>
</html>
