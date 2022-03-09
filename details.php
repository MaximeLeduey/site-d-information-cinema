<?php

require_once('functions.php');

$id = $_GET['filmId']; 
$title = get_film_by_id($id)->original_title;
$overview = get_film_by_id($id)->overview;
$image = get_film_by_id($id)->poster_path;
echo $title.$overview.$image;






?>