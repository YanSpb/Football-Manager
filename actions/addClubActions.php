<?php
include_once "../database.php";
if ($_GET["name"] === null) {
    header('Location: ../pages/clubs.php');
}
addClub($_GET["name"], $_GET["country"] ?? 1);
print_r($_GET["name"]);
print_r($_GET["country"]);
header('Location: ../pages/clubs.php');


