<?php
require_once __DIR__ . '/data/library.php';
require_once __DIR__ . '/layout/header.php';
?>

<h1>Ma librairie musicale</h1>

<?php foreach ($musicLibrary as $album) { ?>
    <div>
        <a href="album.php?id=<?php echo $album['id']; ?>">
            <h2>
                <?php echo $album['title']; ?>
            </h2>
            <img src="assets/img/<?php echo $album['image']; ?>" alt="<?php echo $album['title']; ?>" />
        </a>
    </div>
<?php } ?>

<?php require_once __DIR__ . '/layout/footer.php';
