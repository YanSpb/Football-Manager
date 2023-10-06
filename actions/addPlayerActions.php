<?php
include_once "../database.php";
if (empty($_GET["name"])) {
    header('Location: ../pages/players.php');
}
addPlayer($_GET["name"], $_GET["club"] ?? 1);
print_r($_GET["name"]);
print_r($_GET["club"]);
header('Location: ../pages/players.php');
