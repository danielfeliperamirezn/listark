<?php

// Include the config file
require_once __DIR__ . '/../config.php';

// Create a new UpdateController object
class UpdateController
{
    // Get the database connection
    protected $db;

    // Constructor
    public function __construct()
    {
        // Get the database connection
        $this->db = require_once __DIR__ . '/../config.php';
    }

    // Update action
    public function update()
    {
        // Get the id, name and email from the form
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Update the record in the database
        $query = $this->db->query('UPDATE users SET name = ?, email = ? WHERE id = ?', [$name, $email, $id]);

        // Redirect the user to the index page
        header('Location: index.php');
    }
}