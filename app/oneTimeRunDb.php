<?php
include 'db.php';
$db = new Db();
$connection = new mysqli('admin', 'admin', 'root', 'main');
$db -> createTables($connection);