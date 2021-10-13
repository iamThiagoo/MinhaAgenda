<?php 

    session_start();
    include_once("assets/config/connect.php");

    $query = "SELECT id, name, phone FROM contacts";
    
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $contacts = $stmt->fetchAll();