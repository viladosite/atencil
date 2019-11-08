<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Este arquivo monta as funções e variáveis básicas para o funcionamento do sistema


// -----------------------------------------------------
// FUNÇÕES DE CHECAGEM DE INFORMAÇÃO
// -----------------------------------------------------

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


// Função para checagem de status baseado em informação binaria
// Informe uma variável, uma resposta caso 0 e outra caso 1
function statuscheck($variable, $zeroanswer, $oneanswer){
	if $variable == 0{ $result = $zeroanswer; };
	if $variable == 1{ $result = $oneanswer; };

	return echo $result;

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
// $compid é o id da compania, enquanto $info é o nome do campo desejado da tabela de empresas
function compinfo_byid($compid, $info) {

	global $mysql;
	$sql = "SELECT * FROM at_companies WHERE companyid = '$compid'";
    $query = mysqli_query($mysql, $sql);
	$result = mysqli_fetch_assoc($query);

    if (empty($result)) {
    
    	echo "Não Encontrado";

    } else {

    	echo $result[$info];

    };

}




// Obtem os dados de usuário a partir do ID dele
// $compid é o id do usuário, enquanto $info é o nome do campo desejado da tabela de usuários
function userinfo_byid($userid, $info) {

	global $mysql;
	$sql = "SELECT * FROM at_users WHERE userid = '$userid'";
    $query = mysqli_query($mysql, $sql);
	$result = mysqli_fetch_assoc($query);

    if (empty($result)) {
    
    	echo "Não Encontrado";

    } else {

    	echo $result[$info];

    };

}


// -----------------------------------------------------
// CLASSES DE OBTENÇÂO DE DADOS
// -----------------------------------------------------

// Constroi a classe que checa os nomes de diretórios diretamente dentro de um arquivo zip
// Build a class to check zip files and the directories inside them
class zipadmin{

  private $file;
  private $folder;
  private $zip;

  public function __construct($filename, $folder) {
    $this->zip = new ZipArchive;
    $this->file = $filename ;
    $this->folder = $folder ;
    }

  public function listzip() {
    $res = false;
    if ($this->zip->open($this->folder . $this->file) == TRUE) {
      $i = 0;
      while ($info = $this->zip->statIndex($i)) {
        if ($info['crc'] == 0 && preg_match('#^[^/]*?/$#', $info['name']))
          $res[] = preg_replace('#^([^/]*?)/$#', '$1', $info['name']);
        $i++;
        }
      }
    return $res;
    }

}



?>