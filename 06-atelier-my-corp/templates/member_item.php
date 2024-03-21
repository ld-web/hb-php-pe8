<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col items-center pb-10 justify-between h-full">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?php echo $member['picture']; ?>"
            alt="<?php echo $member['firstname'] . ' ' . $member['name']; ?>" />
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
            <?php echo $member['firstname'] . ' ' . $member['name']; ?>
        </h5>
        <div class="flex flex-wrap gap-3 px-6 mt-4 justify-center">
            <?php foreach ($member['abilities'] as $abilityIdx) { ?>
                <span class="rounded-full px-3 text-sm py-1 <?php echo ABILITIES[$abilityIdx]['tw-class']; ?>">
                    <?php echo ABILITIES[$abilityIdx]['label']; ?>
                </span>
            <?php } ?>
        </div>
        <div class="flex mt-4 md:mt-6">
            <a href="member.php?id=<?php echo $member['id']; ?>"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 no-underline text-xl">Profil</a>
        </div>
    </div>
</div>