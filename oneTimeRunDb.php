<?php
include 'db.php';
$db = new Db();
$connection = new mysqli('localhost', 'root', '', 'test');
$db -> createTables($connection);