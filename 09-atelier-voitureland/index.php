<?php
require_once 'data/cars.php';
require_once 'classes/CarsCollection.php';

$collection = new CarsCollection($cars);

// --- RESULTS ---
$results = $cars;

// Voir si le formulaire de recherche a été soumis
if (isset($_GET['year']) && !empty($_GET['year'])) {
    $year = intval($_GET['year']); // Renvoie 0 si ce n'est pas un int valide

    $results = $collection->getByYear($year);

    // $results = []; // instruction d'initialisation

    // foreach ($cars as $car) {
    //     if ($car->getYear() === $year) {
    //         $results[] = $car;
    //     }
    // }
}

require_once 'layout/header.php';
?>

<h1>Voitureland</h1>

<section>
    <form>
        <select name="year">
            <option value="">-- Sélectionnez une année --</option>
            <?php foreach ($collection->getUniqueYears() as $year) { ?>
            <option value="<?php echo $year; ?>">
                <?php echo $year; ?>
            </option>
            <?php } ?>
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
