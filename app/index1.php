<?php
session_start();
if (!isset($_GET['page'])){
    $_GET['page'] = 'main';
}
if (!isset($_SESSION['username'])){
    $_GET['page'] = 'authentication';
}
if (!isset($_GET['phase'])){
    $_GET['phase'] = '';
}

include 'db.php';
if(!isset($connection)){
    $connection = new mysqli('admin', 'admin', 'root', 'main');
}

switch ($_GET['page']) {
    case 'authentication':
        include 'pages/auth/auth.php';
        break;
    case 'main':
        include "pages/main/main.php";
        break;
    case 'description':
        include "pages/description/description.php";
    break;
    case 'users':
        include "pages/users/users.php";
        break;
}