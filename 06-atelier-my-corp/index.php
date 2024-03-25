<?php
require_once 'data/members.php';

$title = "Bienvenue !";
require_once 'layout/header.php';

if (isset($_GET['success'])) {
    require_once 'templates/newsletter_registered.php';
}
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
            <?php foreach ($members as $member) {
                require 'templates/member_item.php';
            } ?>
        </div>
    </section>

    <section class="group max-w-[900px] mx-auto mt-36 bg-gradient-to-r from-blue-700 via-purple-500 to-pink-500 rounded-lg shadow-xl p-12 text-white relative">
        <div class="absolute right-14 top-10 translate-y-2 opacity-100 group-hover:opacity-0 group-hover:translate-y-0 transition-all duration-200">
            <?php require_once 'templates/mail_closed.php'; ?>
        </div>
        <div class="absolute right-14 top-10 translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200">
            <?php require_once 'templates/mail_opened.php'; ?>
        </div>
        <h2 class="text-5xl font-sans mb-6">Inscrivez-vous à la newsletter !</h2>
        <form class="flex gap-x-6" method="POST" action="newsletter_process.php">
            <div class="grow flex items-center">
                <label for="email" class="text-xl mr-6">Email :</label>
                <input type="email" id="email" name="email" class="!text-black grow focus:outline-none" placeholder="email@test.com" required />
            </div>
            <div><button type="submit" class="bg-orange-400 rounded-lg uppercase py-2 px-4 hover:bg-orange-500 transition-all shadow-lg">Inscription</button></div>
        </form>
    </section>
</main>

<?php require_once 'layout/footer.php';
