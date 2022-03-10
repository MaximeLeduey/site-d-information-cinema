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

function get_page() {
    if ($_GET['page'] == 1) {
        return false;
    }
    else {
        return true;
    }
}

function has_search() {
    return isset($_GET['search']) && !empty($_GET['search']);
}


function get_search() {
    $search = $_GET['search'];
    $search = "&query=$search";
    return $search;
}

function get_films(int $page) {
    $pageUrl = "&page=$page";
    $client = get_client();
    if (has_search()) {
        $currentSearch = get_search();
        return make_request($client, requestStart.'/search/movie/'.api_key.$pageUrl.$currentSearch)->results;
    }
    else {
        return make_request($client, requestStart.'/movie/popular/'.api_key.requestLanguage.$pageUrl)->results;
    }
}
$client = get_client();

function get_film_by_id(int $id) {
    $client = get_client();
    return make_request($client, requestStart.'/movie/'.$id.api_key.requestLanguage);
}


?>