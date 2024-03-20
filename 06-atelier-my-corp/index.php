<?php
require_once 'data/members.php';

$title = "Bienvenue !";
require_once 'layout/header.php';
?>

<main>
    <header class="relative">
        <img src="https://images.unsplash.com/photo-1599578705716-8d3d9246f53b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3"
            alt="MyCorp" />
        <h1 class="text-center absolute text-white top-[45%] right-32 text-6xl font-bold">BIENVENUE CHEZ MY CORP</h1>
    </header>

    <section class="prose lg:prose-xl max-w-[900px] mx-auto mt-12">
        <header>
            <h2>Présentation</h2>
        </header>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt laborum culpa officia laudantium similique!
            Debitis, eum. Et necessitatibus aut sunt labore adipisci. Debitis, placeat ducimus perferendis est id et
            eligendi!</p>
        <p>Dolores aut libero laboriosam repellendus ipsa aperiam, tempore, sunt facere fugit facilis nemo non nihil
            obcaecati nulla nostrum laborum ut ipsam ad modi consectetur eius expedita reprehenderit recusandae? Fugit,
            quidem.</p>
    </section>

    <section class="prose lg:prose-xl max-w-[900px] mx-auto mt-12">
        <header>
            <h2>Membres</h2>
        </header>

        <div class="flex flex-wrap gap-12 justify-center">
            <?php foreach ($members as $member) { ?>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pb-10 justify-between h-full">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?php echo $member['picture']; ?>"
                            alt="<?php echo $member['firstname'] . ' ' . $member['name']; ?>" />
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?php echo $member['firstname'] . ' ' . $member['name']; ?></h5>
                        <div class="flex flex-wrap gap-3 px-6 mt-4 justify-center">
                            <?php foreach ($member['abilities'] as $abilityIdx) { ?>
                                <span class="rounded-full px-3 text-sm py-1 <?php echo ABILITIES[$abilityIdx]['tw-class']; ?>">
                                    <?php echo ABILITIES[$abilityIdx]['label']; ?>
                                </span>
                            <?php } ?>
                        </div>
                        <div class="flex mt-4 md:mt-6">
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 no-underline text-xl">Profil</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</main>

<?php require_once 'layout/footer.php';
