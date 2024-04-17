<?php
echo "Hola";
define('USER', 'xioval');

define('PASSWORD', 'ainihon');

define('HOST', 'localhost');

define('DATABASE', 'criadero');
try {

    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);

} catch (PDOException $e) {

    exit("Error: " . $e->getMessage());

}

?>