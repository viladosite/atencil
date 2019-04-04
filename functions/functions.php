<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Este arquivo monta as funções e variáveis básicas para o funcionamento do sistema

// Função para checagem das permissões de acesso
// Retorna false quando o usuário não está logado ou não possui a permissão necessária
function perm_check($permvar) {

	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) {session_start();}

	// Informa qual o conjunto de caracteres a ser utilizado na conexão
	// header('Content-Type: text/html; charset=utf-8');

	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['UserID']) OR ($_SESSION['UserPermLvl'] < $permvar)) {

		return FALSE;

	} else {

		return TRUE;

	}
}


// Função para criar usuários
// Retorna false quando o usuário não está logado ou não possui a permissão necessária
function create_user($login, $email, $pass) {

	// A sessão precisa estar iniciada
	if (!isset($_SESSION)) {session_start();}

	// Verifica se não há a variável da sessão que identifica o usuário e se ele tem a permissão para criar outros usuários
	if (!isset($_SESSION['UserID']) OR ($_SESSION['UserPermLvl'] < $permvar))
		{return FALSE;}
	else
		{
			return TRUE;
		}
}




// Função para setar o usuário para remoção
// Retorna false quando o usuário não está logado ou não possui a permissão necessária
function remove_user($permvar, $removeuserid, $removeuserlogin) {

	// A sessão precisa estar iniciada
	if (!isset($_SESSION)) {session_start();}

	// Verifica se não há a variável da sessão que identifica o usuário e se ele tem a permissão para criar outros usuários
	if (!isset($_SESSION['UserID']) OR ($_SESSION['UserPermLvl'] < $permvar))
		{
			$userdelid = 'Não autorizado';
			$userdellogin = 'Não autorizado';
		}
	else
		{
			$userdelid = $removeuserid;
			$userdellogin = $removeuserlogin;
		}
}


function load_core(){
	// Carrega as configurações para funcionamento do sistema
	require __DIR__ . '/../config.php';
	
	// Faz a conexão com o banco
	require './auth/at_connect.php';


}


?>