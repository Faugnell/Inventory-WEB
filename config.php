<?php
session_start();

if (!isset($_SESSION["id_role"])) {
    // Initialise la variable de session avec une valeur par défaut
    $_SESSION["id_role"] = 0; // Ou toute autre valeur par défaut
}

if (isset($_SESSION['userLoggedIn']) && $_SESSION['userLoggedIn']) {
    // L'utilisateur est connecté
    $userLoggedIn = true;
} else {
    // L'utilisateur n'est pas connecté
    $userLoggedIn = false;
}

define('SITE_URL', 'https://api-inkventory.ovh/');
define('USER_URL', SITE_URL . 'view/user/');
define('ADMIN_URL', SITE_URL . 'view/admin/');
define('DB_HOST', 'apiinks228.mysql.db');
define('DB_USER', 'apiinks228');
define('DB_PASS', 'Vic0117879816');
define('DB_NAME', 'apiinks228');

define('DEFAULT_LANGUAGE', 'fr_FR');