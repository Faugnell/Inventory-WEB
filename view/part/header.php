<!DOCTYPE html>
<html>
<?php require_once(realpath(__DIR__ . "/../../config.php"));
require_once(realpath(__DIR__ . '/../../class/autoloader.php'));
Autoloader::register();
?>

<head>
    <meta charset="UTF-8">
    <title>Lab'CESI</title>
    <link rel="stylesheet" type="text/css" href="https://api-inkventory.ovh/assets/css/style.css">
    <script src="<?= SITE_URL; ?>/assets/js/script.js"></script>
</head>

<?php require_once(realpath(__DIR__ . "/menu.php")); ?>
</html>