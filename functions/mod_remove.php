<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$modremid = mysqli_real_escape_string($mysql, $_POST['modtoremid']);
$modremdir = mysqli_real_escape_string($mysql, $_POST['modtoremdir']);

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Remoção dos arquivos do mod
$modremdir = delete_files('$home_dir . $mods_dir . "/" . $modremdir');

// Queries de remoção do mod
$modremquery = " DELETE FROM at_modules WHERE modid = '$modremid' ";

// Execução de verificação de dados
$modremdb = mysqli_query($mysql, $modremquery);




// Redirect back to the instalation page
header("Location: ../pages/mod_list.php");


?>