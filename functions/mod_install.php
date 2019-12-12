<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
// $filepath = mysqli_real_escape_string($mysql, $_POST['permissao']);

// Criação das variáveis padrão para inclusão no banco
$minstdate = date("Y-m-d H:i:s");
$mname = 'Sem Nome';
$mcat = 'Sem Categoria';
$mauthor = 'Vila do Site';
$mauthorlink = 'http://viladosite.com.br';
$mlogo = 'logo.png';
$mpath = '';
$mstatus = 1;


// Verifica se foram selecionados arquivos e define as variáveis
if($_FILES["modfile"]["name"]) {

	$filename = $_FILES["modfile"]["name"];
	$source = $_FILES["modfile"]["tmp_name"];
	$type = $_FILES["modfile"]["type"];
	
	$name = explode(".", $filename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');

	//	Gera o loop de arquivos enviados para confirma se seus tipos de arquivo são válidos
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	// Verifica as extensões de arquivo e continua caso sejam válidas
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		$message = "O arquivo que você está tentando enviar não é um arquivo zip. Só é possível instalar arquivos de módulo em formato .zip válido.";
		$inststatus = 'warn';
	}

	// Set the path variables
	$target_path = DIR_PATH . HOME_DIR . MODS_DIR . "/" . $filename;


	
	// Move the file to the right location and extract it
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			$zip->extractTo(DIR_PATH . HOME_DIR . MODS_DIR . "/");
			$zipdir = trim($zip->getNameIndex(0), '/');
			$mod_info_path = HOME_PATH . MODS_DIR . "/" . $zipdir . "/" . "modinfo.json";
			$zip->close();
			unlink($target_path);
		}
		$message = "Seu módulo foi enviado e instalado com sucesso.";
		$inststatus = 'ok';

	} else {	

		$message = "Houve um problema na instalação do módulo. Por favor tente novamente ou entre em contato conosco.";
		$inststatus = 'error';
	}
}

// When the upload works the data is saved in database
if ($inststatus == 'ok'){


	// Get the contents of hte modinfo JSON file
	$modinfojson = file_get_contents($mod_info_path);
	
	// Convert to array
	$moddata = json_decode($modinfojson, true);

	// Set the variables to populate the database
	$mname = $moddata['name'];
	$mcateg = $moddata['category'];
	$mauthor = $moddata['author'];
	$mauthorurl = $moddata['authorurl'];
	$mlogo = $moddata['modlogo'];
    $mpath = $moddata['modpath'];
    $mtable = $moddata['modtable'];
    $mfields = $moddata['modfields'];


	// Check the connection
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }



    // Define a query de cadastro do mod na lista de mods
    $sql = "INSERT INTO at_modules (modinst, modname, modcat, modauthor, modauthorlink, modlogo, modpath, modtable, modstatus)
    VALUES ('$minstdate', '$mname', '$mcateg', '$mauthor', '$mauthorlink', '$mlogo', '$mpath', '$mtable', '$mstatus');";
    
    // Define a query de criação da tabela do mod no banco
    $sql .= "CREATE TABLE $mtable ($mfields)";
        
    
    if (mysqli_multi_query($mysql, $sql)) {
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
        
        mysqli_close($mysql);


}


// Redirect back to the instalation page
header("Location: ../pages/mod_list.php");


?>