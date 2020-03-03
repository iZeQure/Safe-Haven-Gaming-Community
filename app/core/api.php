<?php
$API_KEY = '3E242B50A3E4F6F9F868D01E14C99BE1';
$API_URL = 'http://api.steampowered.com/';
$API_INTERFACE_NAME = 'ISteamUser/';
$API_COLLECTION_NAME = 'GetPlayerSummaries/';
$API_VERSION = 'v0002/';

$steamdids = "76561198131831320,76561198438990924,76561197964411050,76561197978958958,76561198089285742";

$request_url = $API_URL . $API_INTERFACE_NAME . $API_COLLECTION_NAME . $API_VERSION . '?key=' . $API_KEY . '&steamids=' . $steamdids;

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$players = curl_exec($curl);
curl_close($curl);

$output = json_decode($players);

$players = $output->response->players;

foreach($players as $player){
    // print_r($player->avatarmedium . "<br />");
    echo("<img src='".$player->avatarmedium."'>");
    echo("<p>" . $player->personaname . "</p>");

    if (isset($player->loccountrycode)) {
        echo("<p>" . $player->loccountrycode . "</p>");
    }
}