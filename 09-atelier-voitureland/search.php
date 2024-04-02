<?php

require_once 'classes/CarsCollection.php';

if (isset($_GET['name']) && !empty($_GET['name'])) {
    require_once 'data/cars.php';
    $nameSearch = $_GET['name'];

    $collection = new CarsCollection($cars);
    $results = $collection->getByName($nameSearch);
}

require_once 'layout/header.php';
?>

<h1>Recherche</h1>

<!-- Recherche de voitures par nom -->
<form>
    <label for="name">Nom de la voiture :</label>
    <input type="text" name="name" id="name" required />
    <input type="submit" value="Rechercher" />
</form>

<?php if (isset($results)) { ?>
<section>
    <?php foreach ($results as $result) { ?>
    <div>
        <h2>
            <?php echo $result->getName(); ?>
        </h2>
        <p>
            <?php echo $result->getDescription(); ?>
        </p>
    </div>
    <?php } ?>
</section>
<?php } ?>

<?php require_once 'layout/footer.php';
