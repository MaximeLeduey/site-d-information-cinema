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
    // pretty_print_r($result);
    $resultObject = json_decode($result);
    $result = $resultObject->results;
    return $result;
}

function get_film_by_id() {
    $client = get_client();
    return make_request($client, requestStart.'/movie/popular/'.api_key);
}
$client = get_client();

get_film_by_id();


function get_Infos(array $array) {
    foreach($array as $film) {
        $image = $film->poster_path;
        $title = $film->original_title;
        $overview = $film->overview;
        echo "$title $image $overview<br>";
    }
}



get_Infos(get_film_by_id());



?>