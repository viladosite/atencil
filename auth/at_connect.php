<?php

// Tenta se conectar ao servidor MySQL
$mysql = mysql_connect($dbserver, $dbuser, $dbpass, $dbname) or trigger_error(mysql_error());

// Tenta se conectar ao banco de dados MySQL prédefinido nas configurações
mysql_select_db($dbname) or trigger_error(mysql_error());

?>