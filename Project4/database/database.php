<?php

    $dsn = 'mysql:host=localhost;dbname=newscontact';
     $username = 'root';
    $password = 'Pa$$w0rd';
    
            try {
                $db = new PDO($dsn,
                                     $username,
                                     $password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('./errors/database_error.php');
                exit();
            }
?>