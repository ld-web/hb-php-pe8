<?php
require_once 'data/members.php';

$title = "Page membre";
require_once 'layout/header.php';

// 'id' est dans l'URL
if (!isset($_GET['id'])) {
    echo "ID obligatoire";
    exit;
}

// Dans $_GET, tout est considéré come une string
// Donc même si vous écrivez ?id=1,
// Alors dans $_GET, la valeur est "1"
$id = intval($_GET['id']);

// intval renvoie 0 en cas d'échec de conversion vers int
// Donc on peut vérifier ici la valeur de $id
if ($id === 0) {
    echo "Veuillez passer un identifiant valide";
    exit;
}

$foundMember = null;

foreach ($members as $member) {
    if ($member['id'] === $id) {
        $foundMember = $member;
    }
}

if ($foundMember === null) {
    http_response_code(404);
    echo "Membre non trouvé";
    exit;
}

?>

<main class="prose lg:prose-xl max-w-[900px] mx-auto mt-12">
    <h1>Membre</h1>
    <h2>
        <?php echo $foundMember['firstname'] . ' ' . $foundMember['name']; ?>
    </h2>
    <h4><?php echo $foundMember['birth_date']; ?></h4>
    <p>
        <img src="<?php echo $foundMember['picture']; ?>" alt="<?php echo $foundMember['firstname'] . ' ' . $foundMember['name']; ?>" />
    </p>
    <blockquote>
        <?php echo $foundMember['quote']; ?>
    </blockquote>
</main>

<?php require_once 'layout/footer.php';
