<?php

// Include the config file
require_once __DIR__ . '/../config.php';

// Create a new HomeController object
class HomeController
{
    // Get the database connection
    protected $db;

    // Constructor
    public function __construct()
    {
        // Get the database connection
        $this->db = require_once __DIR__ . '/../config.php';
    }

    // Index action
    public function index()
    {
        // Get all the records from the table
        $query = $this->db->query('SELECT * FROM users');

        // Loop through the records and display them in the table
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '</tr>';
        }
    }
}