<?php
    $dsn = 'mysql:dbname=bk249;host=sql2.njit.edu';
    $username = 'bk249';
    $password = 'rlaqldlqslek91';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>