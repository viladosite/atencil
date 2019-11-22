<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';


// Variáveis com dados básicos do grupo
$formgrcomp = mysqli_real_escape_string($mysql, $_POST['usergrcomp']);
$formgrname = mysqli_real_escape_string($mysql, $_POST['usergrname']);
$formgrdesc = mysqli_real_escape_string($mysql, $_POST['usergrdesc']);

// Variáveis com as permissões do grupo
if (isset($_POST['viewdashboard'])) {
	$formviewdashboard = mysqli_real_escape_string($mysql, $_POST['viewdashboard']);
} else { $formviewdashboard = '0'; }

if (isset($_POST['viewaccount'])) {
	$formviewaccount = mysqli_real_escape_string($mysql, $_POST['viewaccount']);
} else { $formviewaccount = '0'; }
	
if (isset($_POST['viewattendance'])) {
	$formviewattendance = mysqli_real_escape_string($mysql, $_POST['viewattendance']);
} else { $formviewattendance = '0'; }

if (isset($_POST['viewcompany'])) {
	$formviewcompany = mysqli_real_escape_string($mysql, $_POST['viewcompany']);
} else { $formviewcompany = '0'; }

if (isset($_POST['viewclients'])) {
	$formviewclients = mysqli_real_escape_string($mysql, $_POST['viewclients']);
} else { $formviewclients = '0'; }

if (isset($_POST['viewusers'])) {
	$formviewusers = mysqli_real_escape_string($mysql, $_POST['viewusers']);
} else { $formviewusers = '0'; }

if (isset($_POST['viewsystem'])) {
	$formviewsystem = mysqli_real_escape_string($mysql, $_POST['viewsystem']);
} else { $formviewsystem = '0'; }

if (isset($_POST['viewsearch'])) {
	$formviewsearch = mysqli_real_escape_string($mysql, $_POST['viewsearch']);
} else { $formviewsearch = '0'; }

if (isset($_POST['viewmodules'])) {
	$formviewmodules = mysqli_real_escape_string($mysql, $_POST['viewmodules']);
} else { $formviewmodules = '0'; }

if (isset($_POST['viewperms'])) {
	$formviewperms = mysqli_real_escape_string($mysql, $_POST['viewperms']);
} else { $formviewperms = '0'; }


if (isset($_POST['editdashboard'])) {
$formeditdashboard = mysqli_real_escape_string($mysql, $_POST['editdashboard']);
} else { $formeditdashboard = '0'; }

if (isset($_POST['editaccount'])) {
$formeditaccount = mysqli_real_escape_string($mysql, $_POST['editaccount']);
} else { $formeditaccount = '0'; }

if (isset($_POST['editattendance'])) {
$formeditattendance = mysqli_real_escape_string($mysql, $_POST['editattendance']);
} else { $formeditattendance = '0'; }

if (isset($_POST['editcompany'])) {
$formeditcompany = mysqli_real_escape_string($mysql, $_POST['editcompany']);
} else { $formeditcompany = '0'; }

if (isset($_POST['editclients'])) {
$formeditclients = mysqli_real_escape_string($mysql, $_POST['editclients']);
} else { $formeditclients = '0'; }

if (isset($_POST['editusers'])) {
$formeditusers = mysqli_real_escape_string($mysql, $_POST['editusers']);
} else { $formeditusers = '0'; }

if (isset($_POST['editsystem'])) {
$formeditsystem = mysqli_real_escape_string($mysql, $_POST['editsystem']);
} else { $formeditsystem = '0'; }

if (isset($_POST['editmodules'])) {
$formeditmodules = mysqli_real_escape_string($mysql, $_POST['editmodules']);
} else { $formeditmodules = '0'; }

if (isset($_POST['editperms'])) {
$formeditperms = mysqli_real_escape_string($mysql, $_POST['editperms']);
} else { $formeditperms = '0'; }


// Variáveis nativas do usuário
$useridatual = $_SESSION['UserID'];
$usergroup = $_SESSION['UserGroup'];

// Condicionais de verificação de preenchimento de campos
if ( empty($formgrname) ) {
	
	// Retorna o erro caso algum campo tenha sido deixado em branco
	echo '<script type="text/javascript">alert("Você não preencheu o nome do grupo. É necessário fornecer um nome para continuar.");history.go(-1);</script>';

} else {

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$usergrsql = "
		INSERT INTO at_usergroups (usergroupcomp, usergroupname, usergroupdesc, viewdashboard, viewaccount, viewattendance, viewcompany, viewclients, viewusers, viewsystem, viewsearch, viewmodules, viewperms, editdashboard, editaccount, editattendance, editcompany, editclients, editusers, editsystem, editmodules, editperms)
		VALUES ('$formgrcomp', '$formgrname', '$formgrdesc', '$formviewdashboard', '$formviewaccount', '$formviewattendance', '$formviewcompany', '$formviewclients', '$formviewusers', '$formviewsystem', '$formviewsearch', '$formviewmodules', '$formviewperms', '$formeditdashboard', '$formeditaccount', '$formeditattendance', '$formeditcompany', '$formeditclients', '$formeditusers', '$formeditsystem', '$formeditmodules', '$formeditperms');
	";

	// Execução de inserção de dados
	$criausergr = mysqli_query($mysql, $usergrsql);

	// Mostra mensagem de confirmação caso o registro funcione
	if ($criausergr) {

	    // Direciona para a tela de login
	    header("Location: ../pages/user_groups.php");

	    // Encerra a conexão
		mysqli_close($mysql);

	} else {

	    // Direciona para a tela de login
	    header("Location: ../pages/user_groups.php");

	    // Encerra a conexão
		mysqli_close($mysql);
	}

}

?>