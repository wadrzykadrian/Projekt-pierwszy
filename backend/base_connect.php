<?php
    try {
        $query = new PDO("mysql:host=localhost;dbname=photo", "root", "", [PDO::ATTR_EMULATE_PREPARES => false]);
        $base_connect = true;
    } catch(PDOException $e){
        $base_connect = false;
    }
// hasło do zdalnego -> baza testowa
?>


