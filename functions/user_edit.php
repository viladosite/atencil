<?php

// Monta os dados enviados nos campos em variáveis
$formemail = $_POST['email'];
$formsenhaatual = $_POST['senhaatual'];
$formsenhanova = $_POST['senhanova'];

// Caso o usuário não preencha o email, mantem o email do usuário logado
if empty( $_POST['email'] ) { $formemail = $_SESSION['UserEmail']; }
// Caso o usuário forneça uma senha nova, informa ela para update no banco
if !empty( $_POST['senhanova'] ) { $formsenhanova = ',userpass='".sha1($formsenhanova)."''; }


// Checa a conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }
// Verifica na tabela se encontrou o usuário com id logado e senha correspondente à fornecida
$checauser = "SELECT * FROM `at_users` WHERE (`userid` = '".$_SESSION['UserID'] ."') AND (`userpass` = '". sha1($formsenhaatual) ."')";


// Define o comportamento caso encontre o usuário e caso não encontre
if (mysqli_num_rows($checauser) = 1) {
	$update = "UPDATE 'at_users' SET usermail='$formemail' ".$formsenhanova." WHERE userid='$_SESSION['UserID']'"
} else {
	echo '<script type="text/javascript"> 
    window.alert("Houve um erro ou você não informou sua senha atual para salvar as alterações.");
    </script>';
}

mysqli_close($mysql);
?>