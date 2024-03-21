<?php
$dbNames = ["Jesse", "Mario", "Erik", "Dale", "Shawn", "Marcus", "David", "Amy", "Rosalie"];
?>

<?php foreach ($dbNames as $name) { ?>
    <p>
        <a href="welcome.php?userFirstname=<?php echo $name; ?>">
            Saluer <?php echo $name; ?>
        </a>
    </p>
<?php } ?>

<?php

var_dump($_GET);

echo "Hello " . $_GET['userFirstname'];
