<?php

// Define the database connection parameters
define('DB_HOST', 'localhost');
define('DB_NAME', 'pedidosrikatas');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');

// Create a new PDO object
$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

// Set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Return the PDO object
return $db;