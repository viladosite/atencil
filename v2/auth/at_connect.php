<?php

// Tenta se conectar ao servidor MySQL
$mysql = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or trigger_error(mysql_error());

// Tenta se conectar ao banco de dados MySQL prédefinido nas configurações
mysqli_select_db($mysql, $dbname) or trigger_error(mysql_error());

// Definições extras de charset para a conexão
mysqli_query($mysql, "SET NAMES 'utf8'");
mysqli_query($mysql, 'SET character_set_connection=utf8');
mysqli_query($mysql, 'SET character_set_client=utf8');
mysqli_query($mysql, 'SET character_set_results=utf8');

?>