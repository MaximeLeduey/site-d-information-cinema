
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    <?php require_once('header.php') ?>
    <?php
        require_once('functions.php');
        $id = $_GET['filmId']; 
        $title = get_film_by_id($id)->original_title;
        $overview = get_film_by_id($id)->overview;
        $image = get_film_by_id($id)->poster_path;
    ?>
    <div class="container-fluid">
        <img src="https://image.tmdb.org/t/p/w500<?= $image ?>">
        <h1><?= $title ?></h1>
        <p><?= $overview ?></p>
        <form action="index.php" method="get">
            <button type="submit" class="btn btn-primary">Retour</button>
        </form>
    </div>
    <?php require_once('footer.php') ?>
</body>
</html>