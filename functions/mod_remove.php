<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$modformid = $_POST['modid'];
$modformdir = $_POST['moddir'];
$modformtable = $_POST['modtable'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }



/* 
// Prepara a query de remoção do banco
$modremquery = " DELETE FROM at_modules WHERE modid = '$modformid' ";
$modremdb = mysqli_query($mysql, $modremquery);

 */

    // Define a query de cadastro do mod na lista de mods
    $sql = "DELETE FROM at_modules WHERE modid = '$modformid';";
    $sql .= "SET foreign_key_checks = 0;";
    $sql .= "DROP TABLE IF EXISTS $modformtable;";
    $sql .= "SET foreign_key_checks = 1;";
        
    $modremdb = mysqli_multi_query($mysql, $sql);
    
/* 

    if (mysqli_multi_query($mysql, $modremquery)) {
        do {
            // Grava a primeira leva de resultados
            if ($result = mysqli_store_result($mysql)) {
            while ($row = mysqli_fetch_row($result)) {
                printf("%s\n", $row[0]);
            }
            mysqli_free_result($result);
            }
            // Caso hajam mais resultados, cria um divisor
            if (mysqli_more_results($mysql)) {
            printf("-------------\n");
            }
            // Mostra os demais resultados
        } while (mysqli_next_result($mysql));
        }
         */


        mysqli_close($mysql);



// Prepara o path da pasta para remoção
$modremdir = DIR_PATH . HOME_DIR . MODS_DIR . "/" . $modformdir;

// Executa a remoção do banco e dos arquivos
if ($modrembd = true) {
	
	// Remove os arquivos e a pasta do módulo
	delete_dir($modremdir);


	// Redirect back to the instalation page
	header("Location: ../pages/mod_list.php");

}




?>