<?php
    session_start();
    //connect to database
    include_once "./database.php";
    // show users from database
    $users = $database->query("SELECT * FROM users");
?>
