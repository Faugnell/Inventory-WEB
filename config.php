<?php
session_start();

if (!isset($_SESSION["id_role"])) {
    // Initialise la variable de session avec une valeur par défaut
    $_SESSION["id_role"] = 0; // Ou toute autre valeur par défaut
}

define('DB_HOST', 'apiinks228.mysql.db');
define('DB_USER', 'apiinks228');
define('DB_PASS', 'Vic0117879816');
define('DB_NAME', 'apiinks228');

define('DEFAULT_LANGUAGE', 'fr_FR');