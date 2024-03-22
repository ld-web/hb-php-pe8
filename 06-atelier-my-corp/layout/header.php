<?php require_once 'functions/error.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title><?php echo $title ?? "MyCorp"; ?></title>
</head>
<body>
    <?php require_once __DIR__ . '/nav.php';

if (isset($_GET['error'])) {
    $errorMsg = getErrorMessage(intval($_GET['error']));
    require_once 'templates/error_notification.php';
}
