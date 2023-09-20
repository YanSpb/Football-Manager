<?php
include_once "../views/menu.php";
include_once "../database.php";
$countries = getCountries();
?>
<!--<p>-->
<br>
<!--     <a href="../forms/addCountry.php">Добавить страну</a>.-->
<form action="../forms/addCountry.php" method="GET">
    <button>Добавление страны</button>
<br>
<br>
<table>
<tr>
<th> id </th>
<th> name </th>
</tr>
<?php
foreach($countries as $id => $name) {
   echo '<tr><td>' . $id . '</td><td>' . $name .'</td></tr>';
}
?>
</table>
