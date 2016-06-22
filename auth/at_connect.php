<?php

// Tenta se conectar ao servidor MySQL
$mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname) or trigger_error(mysqli_connect_error());

// Tenta se conectar ao banco de dados MySQL prédefinido nas configurações
mysqli_select_db($dbname) or trigger_error(mysqli_connect_error());

?>