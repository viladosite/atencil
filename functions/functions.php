<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Este arquivo monta as funções e variáveis básicas para o funcionamento do sistema


// Função para checagem das permissões de acesso geral ao sistema
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


// Função para checagem das permissões de acesso dos recursos específicos da empresa
// Retorna false quando o usuário não está logado ou não possui a permissão necessária
function perm_comp_check($permvar) {

	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) {session_start();}

	// Informa qual o conjunto de caracteres a ser utilizado na conexão
	// header('Content-Type: text/html; charset=utf-8');

	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['UserID']) OR ($_SESSION['UserCompanyLvl'] < $permvar)) {

		return FALSE;

	} else {

		return TRUE;

	}
}



// -----------------------------------------------------
// FUNÇÕES DE EXIBIÇÃO DE BADGES
// -----------------------------------------------------


// Função para checagem das permissões de acesso dos recursos específicos da empresa
function badges($permview, $permedit) {
	
	// Verifica se o usuário tem a permissão de visualização informada
	if(perm_check($permview) == true) {echo '<span class="badge badge-success permtag">Ver</span>';}
	
	echo " "; // Espaçador entre tags
	
	// Verifica se o usuário tem a permissão de edição informada
	if(perm_check($permedit) == true) {echo '<span class="badge badge-warning permtag">Editar</span>';}	

	// Checa se o usuário não possui nenhuma das duas permissões anteriores para mostrar a tag de "sem acesso"
	if(perm_check($permview) == false && perm_check($permedit) == false) {
		echo '<span class="badge badge-dark permtag">Sem Acesso</span><br>';
	}
}


// Função para checagem das permissões de acesso dos recursos específicos da empresa
function badge_adm($permission) {
	if(perm_check($permission) == true) {echo '<span class="badge badge-danger permtag">', 'ADM', '</span><br>';}
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






// -----------------------------------------------------
// FUNÇÕES DE OBTENÇÃO DE DADOS
// -----------------------------------------------------


// Obtem os dados da compania a partir do ID dela
function get_comp_byid($compid) {

	$sql = "SELECT * FROM at_companies WHERE companyid = '$compid'";
    $query = mysqli_query($mysql, $sql);
	
    if !empty($query){ return $query; } else { return false; }
    
}







?>