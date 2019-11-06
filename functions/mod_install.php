<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Variáveis com dados do formulário
$formpnome = mysqli_real_escape_string($mysql, $_POST['pnome']);
$formunome = mysqli_real_escape_string($mysql, $_POST['unome']);
$formuser = mysqli_real_escape_string($mysql, $_POST['user']);
$formemail = mysqli_real_escape_string($mysql, $_POST['email']);
$formsenha = sha1($_POST['senha']);
$usercompanylvl = mysqli_real_escape_string($mysql, $_POST['permissao']);


// Variáveis nativas do usuário
$useridatual = $_SESSION['UserID'];
$usercompany = $_SESSION['UserCompany'];
$userperm = 1;
$userregstatus = 1;
$regdate = date("Y-m-d H:i:s");







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
	}

	$target_path = "/home/var/yoursite/httpdocs/".$filename;  // change this to the correct site path
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			$zip->extractTo("/home/var/yoursite/httpdocs/"); // change this to the correct site path
			$zip->close();
	
			unlink($target_path);
		}
		$message = "Your .zip file was uploaded and unpacked.";
	} else {	
		$message = "There was a problem with the upload. Please try again.";
	}
}



<body>
<?php if($message) echo "<p>$message</p>"; ?>
<form enctype="multipart/form-data" method="post" action="">
<label>Choose a zip file to upload: <input type="file" name="zip_file" /></label>
<br />
<input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>





// Condicionais de verificação de preenchimento de campos
if ( empty($formpnome) or empty($formunome)	or empty($formuser)	or empty($formemail) or empty($formsenha) ) {
	
	// Retorna o erro caso algum campo tenha sido deixado em branco
	echo '<script type="text/javascript">alert("Você não preencheu algum campo. Preencha todos os campos para continuar.");history.go(-1);</script>';

} else {

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$usersql = "
		INSERT INTO at_users (userfname, userlname, userlogin, userpass, usermail, userpermlvl, usercomp, usercomplvl, userstatus, userregdate)
		VALUES ('$formpnome', '$formunome', '$formuser', '$formsenha', '$formemail', '$userperm', '$usercompany', '$usercompanylvl', '$userregstatus', '$regdate');
	";

	// Execução de inserção de dados
	$criauser = mysqli_query($mysql, $usersql);

	// Mostra mensagem de confirmação caso o registro funcione
	if ($criauser) {

		// Mostra o aviso para relogar
		echo '<script type="text/javascript"> 
	    window.alert("O usuário foi criado com sucesso.");
	    </script>';

	    // Direciona para a tela de login
	    header("Location: /pages/user_list.php");

	    // Encerra a conexão
		mysqli_close($mysql);

	} else {

		// Mostra o aviso para relogar
		echo '<script type="text/javascript"> 
	    window.alert("Houve um erro ao cadastrar o usuário.");
	    </script>';

	    // Direciona para a tela de login
	    header("Location: /pages/user_new.php");

	    // Encerra a conexão
		mysqli_close($mysql);
	}

}

?>