<?php
require_once 'data/cars.php';

$results = $cars;

// Voir si le formulaire de recherche a été soumis
if (isset($_GET['y']) && !empty($_GET['y'])) {
    $year = intval($_GET['y']); // Renvoie 0 si ce n'est pas un int valide

    $results = []; // instruction d'initialisation

    foreach ($cars as $car) {
        if ($car->getYear() === $year) {
            $results[] = $car;
        }
    }
}

require_once 'layout/header.php';
?>

<h1>Voitureland</h1>

<section>
    <form>
        <select name="y">
            <option value="">-- Sélectionnez une année --</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
        </select>
        <input type="submit" value="Rechercher" />
    </form>
</section>

<section>
    <div class="cars-list">
        <?php foreach ($results as $car) { ?>
            <div>
                <h3><?php echo $car->getName(); ?></h3>
                <p>
                    <?php echo $car->getDescription(); ?>
                </p>
            </div>
        <?php } ?>
    </div>
</section>

<?php require_once 'layout/footer.php';
