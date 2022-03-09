
<div class="movie-card">
    <div class="card-header"><?= $title ?></div>
    <div class="card-body"><img src="https://image.tmdb.org/t/p/w300<?= $image ?>"></div>
    <div class="card-footer"><?= $overview ?></div>
    <form action="./details.php" method="get">
        <button type="submit" name="filmId" value='<?= $id ?>' class="btn btn-primary">Plus d'infos</button>
    </form>
</div>