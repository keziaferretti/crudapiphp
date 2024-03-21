<?php 

$db_host = 'localhost';
$db_nome = 'devnotes';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:host=$db_host;dbname=$db_nome", $db_user, $db_pass);

$array = [
  'error' => '',
  'result' => []
];

