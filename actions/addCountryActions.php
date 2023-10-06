<?php
include_once "../database.php";
if (empty($_GET["name"])) {
    header('Location: ../pages/countries.php');
}
addCountry($_GET["country"]);
print_r($_GET["country"]);
header('Location: ../pages/countries.php');
