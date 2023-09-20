<?php
include_once "../database.php";
addCountry($_GET["country"]);
print_r($_GET["country"]);
header('Location: ../pages/countries.php');
