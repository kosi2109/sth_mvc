<?php $title = "Home" ?>
<?php require_once __DIR__ . "/layouts/header.php" ?>
<!-- enter your html -->
<?php foreach($movies as $movie) : ?>
    <h1><?= $movie->name ?></h1>
<?php endforeach ; ?>

<?php require_once __DIR__ . "/layouts/footer.php" ?>