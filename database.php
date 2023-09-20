<?php
function addClub(string $club, string $country)
{
    $dbConnect = pg_connect(
                'host=localhost dbname=yandb user=yan password=zalupa'
    );
      pg_query($dbConnect,'INSERT INTO clubs (name,country_id)
VALUES (\'' . $club . '\',' . $country . ')');
    pg_close($dbConnect);
}
function addCountry(string $country)
{
    $dbConnect = pg_connect(
        'host=localhost dbname=yandb user=yan password=zalupa'
    );
    pg_query($dbConnect,'INSERT INTO countries (name)
VALUES (\'' . $country . '\')');
    pg_close($dbConnect);
}
function getCountries(): array
{
    $dbConnect = pg_connect(
        'host=localhost dbname=yandb user=yan password=zalupa'
    );
    $result = pg_query($dbConnect, 'SELECT * FROM public.countries ORDER BY name ASC');
    $countries = [];
    while ($row = pg_fetch_row($result)) {
        $countries[$row[0]] = $row[1];
      }
    return $countries;
 }
function addPlayer (string $player, string $club)
{
    $dbConnect = pg_connect(
        'host=localhost dbname=yandb user=yan password=zalupa'
    );
    pg_query($dbConnect,'INSERT INTO public.players (name,club_id)
VALUES (\'' . $player . '\',' . $club . ')');
    pg_close($dbConnect);
}
function getClubs(): array
{
    $dbConnect = pg_connect(
        'host=localhost dbname=yandb user=yan password=zalupa'
    );
    $result = pg_query($dbConnect, 'SELECT * FROM public.clubs ORDER BY name ASC');
    $clubs = [];
    while ($row = pg_fetch_row($result)) {
        $clubs[$row[0]] = $row[1];
    }
    return $clubs;
}
//function modClubs()