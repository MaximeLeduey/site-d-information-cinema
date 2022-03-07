<?php 
require('functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Films</title>
</head>
<body>
    <?php
        foreach(get_film_by_id() as $film) {
            $image = $film->poster_path;
            $title = $film->original_title;
            $overview = $film->overview;
            echo "$title $image $overview<br>";
        }
    ?>
</body>
</html>