<?php
function addClub(string $club, string $country) {
    $file = fopen(__DIR__ ."/data/clubs.csv", "a");
    fwrite($file, PHP_EOL . $club . "," . $country);
    fclose($file);
}
function addCountry(string $country) {
    $file = fopen(__DIR__ ."/data/countries.csv", "a");
    var_dump($file);
    $countries = ['country'];
//    $info = [explode(',' , '$string')];
//    $countries.php[] = ['country' => $info[0]];
    fwrite($file, PHP_EOL . $country);
    fclose($file);
}
function getCountries()
{
    $file = fopen(__DIR__ ."/data/countries.csv", "r");
    $countries = [];
    while(($string = fgets($file, 128)) !==false) {
        $info = explode(",", $string);
        $countries[] = ['name' => $info[0]];
    }
    fclose($file);
    return $countries;
}
function updateCountry()  //добавить параметры для обновления страны
{
    $file = fopen(__DIR__ ."/data/countries.csv", "w+");
    while(($string = fgets($file, 128)) !==false) {
        $info = explode(",", $string);
        $country = ['name' => $info[0]];
    }
    fclose($file);
}
function addPlayer(string $player, string $club) {
    $file = fopen(__DIR__ ."/data/players.csv", "a");
    fwrite($file, PHP_EOL . $player . "," . $club);
    fclose($file);
}

