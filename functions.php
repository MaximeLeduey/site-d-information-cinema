<?php 

require('./vendor/autoload.php');
require('./config/config.php');
use GuzzleHttp\Client;


function get_client() {
    $client = new Client();
    return $client;
}

function make_request(Client $client,string $url, string $key) {
    $startUrl = $url;
    $api_key = $key;
    $response = $client->get("$startUrl/tv/1402/images?$api_key");
    $result = $response->getBody()->getContents();
    var_dump(json_decode($result, JSON_PRETTY_PRINT));
    return json_decode($result);
}

$client = get_client();
make_request($client, requestStart, api_key);




?>