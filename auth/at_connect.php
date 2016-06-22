<?php

// Tenta se conectar ao servidor MySQL
$connect = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

// Tenta se conectar ao banco de dados MySQL prédefinido nas configurações
$result = mysqli_query($connect) or die(mysqli_error($connect));

?>