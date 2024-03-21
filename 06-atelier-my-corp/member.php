<?php
require_once 'data/members.php';

$title = "Page membre";
require_once 'layout/header.php';

$id = $_GET['id'];

foreach ($members as $member) {
    if ($member['id'] == $id) {
        $foundMember = $member;
    }
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
