<?php 

function pretty_print_r($var): void {
    echo '<pre>' . print_r($var, true) . '</pre>';
}


require('./vendor/autoload.php');
require('./config/config.php');
use GuzzleHttp\Client;


function get_client() {
    $client = new Client([
        'verify' => false,
        'stream' => false,
    ]);
    return $client;
}

function make_request(Client $client,string $url) {
    $response = $client->get($url);
    $result = $response->getBody()->getContents();
    $resultObject = json_decode($result);
    $result = $resultObject;
    return $result;
}

function get_films() {
    $client = get_client();
    return make_request($client, requestStart.'/movie/popular/'.api_key.requestLanguage)->results;
}
$client = get_client();

function get_film_by_id(int $id) {
    $client = get_client();
    return make_request($client, requestStart.'/movie/'.$id.api_key.requestLanguage);
}

get_films();







?>