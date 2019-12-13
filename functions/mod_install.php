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
    $msql = $moddata['modsql'];
    
    // Set the path to the db sql file
    $mod_db_path = HOME_PATH . MODS_DIR . "/" . $mpath . "/" . $msql;

    // Inserção dos dados no banco
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
    $user = DB_USER;
    $password = DB_PASS;
    
    try {
        $conn = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    // Set the mod registry and mod tables to include in database
    $modregistry = "INSERT INTO at_modules (modinst, modname, modcat, modauthor, modauthorlink, modlogo, modpath, modtable, modstatus)
    VALUES ('$minstdate', '$mname', '$mcateg', '$mauthor', '$mauthorlink', '$mlogo', '$mpath', '$mtable', '$mstatus');";
    $modtables = file_get_contents($mod_db_path);
    
    // Run the queries to include the data in database
    $qr1 = $conn->exec($modregistry);
    $qr2 = $conn->exec($modtables);

}


// Redirect back to the instalation page
header("Location: ../pages/mod_list.php");


?>