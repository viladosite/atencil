<?php
// A sessão precisa ser iniciada em cada página diferente
session_start();

// Carrega as configurações para funcionamento do sistema
require __DIR__ . '/../config.php';

// Faz a conexão com o banco
require __DIR__ . '/../auth/at_connect.php';

// Carrega as funções para funcionamento do sistema
require __DIR__ . '/../functions/functions.php';


?>