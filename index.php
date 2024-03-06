<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$getParams = isset($_GET) ? $_GET : null;
$postParams = isset($_POST) ? $_POST : null;
$params = [
    "get"  => $getParams,
    "post" => $postParams
];

if (isset($_GET['user'])) {

}

else if (isset($_GET['admin'])) {

}

else {
    require_once('./view/home.php');
}