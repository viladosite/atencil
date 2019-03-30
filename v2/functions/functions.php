<?php
// Este arquivo monta as funções e variáveis básicas para o funcionamento do sistema


// Função para checagem das permissões de acesso
// Retorna false quando o usuário não está logado ou não possui a permissão necessária
function perm_check($permvar) {

	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) {session_start();}

	// Pega as definições de banco de dados e permissões do arquivo de config
	require 'realpath('config.php')';

	// Informa qual o conjunto de caracteres a ser utilizado na conexão
	header('Content-Type: text/html; charset=utf-8');

	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['UserID']) OR ($_SESSION['UserPermLvl'] < $permvar))
		{session_destroy();	return FALSE;}
	else
		{return TRUE;}
}










?>