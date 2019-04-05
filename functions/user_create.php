<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';



// Variáveis com dados do formulário
$formpnome = mysqli_real_escape_string($mysql, $_POST['pnome']);
$formunome = mysqli_real_escape_string($mysql, $_POST['unome']);
$formuser = mysqli_real_escape_string($mysql, $_POST['user']);
$formemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$formsenha = sha1($_POST['senha']);
$usercompanylvl = mysqli_real_escape_string($mysql, $_POST['permissao']);

// Variáveis nativas do usuário
$useridatual = $_SESSION['UserID'];
$usercompany = $_SESSION['UserCompany'];
$userperm = 1;
$userregstatus = 1;
$regdate = date("Y-m-d H:i:s");


// Condicionais de verificação de preenchimento de campos
if ( empty($formpnome) or empty($formunome)	or empty($formuser)	or empty($formemail) or empty($formsenha) ) {
	
	// Retorna o erro caso algum campo tenha sido deixado em branco
	echo '<script type="text/javascript">alert("Você não preencheu algum campo. Preencha todos os campos para continuar.");history.go(-1);</script>';

} else {

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$usersql = "
		INSERT INTO at_users (userfname, userlname, userlogin, userpass, userpermlvl, usercomp, usercomplvl, userstatus, userregdate)
		VALUES ('$formpnome', '$formunome', '$formuser', '$formsenha', '$userperm', '$usercompany', '$usercompanylvl', '$userregstatus', '$regdate');
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