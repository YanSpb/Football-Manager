<?php
include_once "../views/menu.php";
include_once "../database.php";
$clubs = getClubs();
?>

<br>
<!--<a href="../forms/addClub.php">Добавить клуб</a>.-->
<form action="../forms/addClub.php" method="GET">
    <button>Добавление клуба</button>
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
