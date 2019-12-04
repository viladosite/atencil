<?php
	// Tenta se conectar ao servidor MySQL
    function getConnection($dbhost, $dbname, $dbuser, $dbpass){
        $conn = null;
        try{ $conn = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . ';charset=utf8', $dbuser, $dbpass); } catch (PDOException $exception){ die($exception->getMessage()); }
        return $conn;
    }
?>