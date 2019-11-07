<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$filepath = mysqli_real_escape_string($mysql, $_POST['permissao']);


// Variáveis nativas do usuário
$useridatual = $_SESSION['UserID'];
$usercompany = $_SESSION['UserCompany'];
$userperm = 1;
$userregstatus = 1;

// Criação das variáveis padrão para inclusão no banco
$modinstdate = date("Y-m-d H:i:s");
$modname = 'Sem Nome';
$modcat = 'Sem Categoria';
$modauthor = 'Vila do Site';
$modauthorlink = 'http://viladosite.com.br';
$modlogo = 'logo.png';
$modpath = '';
$modstatus = 1;


// Verifica se foram selecionados arquivos e define as variáveis
if($_FILES["modulos"]["name"]) {
	$filename = $_FILES["modulos"]["name"];
	$source = $_FILES["modulos"]["tmp_name"];
	$type = $_FILES["modulos"]["type"];
	
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
		$inststatus = 1;
	}

	// Set the path variables
	$target_path = $home_dir . $mods_dir . "/" . $filename;
	$mod_path = $home_dir . $mods_dir . "/";

	
	// Move the file to the right location and extract it
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			$zip->extractTo($home_dir . $mods_dir . "/");
			$zipdir = trim($zip->getNameIndex(0), '/');
			$mod_info_path = $zipdir . "/" . "modinfo.json";
			$zip->close();
			unlink($target_path);
		}
		$message = "Seu módulo foi enviado e instalado com sucesso.";
		$inststatus = 2;

	} else {	

		$message = "Houve um problema na instalação do módulo. Por favor tente novamente ou entre em contato conosco.";
		$inststatus = 0;
	}
}

if ($inststatus = 2){

	// Get the contents of hte modinfo JSON file
	$strmodinfojson = file_get_contents($mod_info_path);
	
	// Convert to array 
	$moddata = json_decode($strmodinfojson, true);

	// Obtem e altera as variáveis com os dados do plugin para enviar ao banco
	$modname = $moddata[0];
	$modcateg = $moddata[1];
	$modauthor = $moddata[2];
	$modauthorurl = $moddata[3];
	$modlogo = $moddata[4];
	$modpath = $moddata[5];

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$modinstsql = "
		INSERT INTO at_modules (modinst, modname, modcat, modauthor, modauthorlink, modlogo, modpath, modstatus)
		VALUES ('$modinstdate', '$modname', '$modcateg', '$modauthor', '$modauthorlink', '$modlogo', '$modpath', '$modstatus');
	";


	// Execução de inserção de dados
	$modinstall = mysqli_query($mysql, $modinstsql);

	mysqli_close($mysql);

}


?>