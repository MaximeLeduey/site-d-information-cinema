<?php 
require_once('header.php');
require('functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Films</title>
</head>
<body>
    <div class="container-fluid">
    <?php
        foreach(get_films() as $film) {
            $image = $film->poster_path;
            $title = $film->original_title;
            $overview = $film->overview;
            $id = $film->id;
            require('./composants/card.php');
        }
    ?>
    </div>
<?php  require_once('footer.php') ?>
</body>
</html>