<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Este arquivo monta as funções e variáveis básicas para o funcionamento do sistema


// -----------------------------------------------------
// FUNÇÕES DE CHECAGEM DE INFORMAÇÃO
// -----------------------------------------------------


//Verifica se o usuário está logado
function checklogged() {
    if ( isset($_SESSION['UserLogged']) ) { return true; } else { return false; }
}

// Cria o hash da senha, usando SHA-1
function make_hash($str) {
    return sha1($str);
}


// Função para checagem de status baseado em informação binaria
// Informe uma variável, uma resposta caso 0 e outra caso 1
// Informe como deseja o resultado (0 para result / 1 para echo)
function statuscheck($variable, $zeroanswer, $oneanswer, $resmode = 0){
	if ($variable == 0) { $result = $zeroanswer; };
	if ($variable == 1) { $result = $oneanswer; };
	if ($resmode = 1) {
		echo $result;
	} else {
		return $result;
	}
}


// Função para checar se o grupo do usuário logado tem permissão para acessar uma página informada
// Retorna false quando o usuário não está logado ou não possui a permissão necessária
function perm_group_check($permslug) {

	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) {session_start();}

	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['UserID']) AND !isset($_SESSION['UserID']) AND !isset($_SESSION['UserGroup'])) {

		return FALSE;

	} else {

		if ($permslug == null) {
		
			return FALSE;
		
		} else {
		
            // Obtem o grupo de permissão do usuário
            $usergroup = $_SESSION['UserGroup'];

            // Faz a conexão com o banco
            $mysql = getConnection(DB_HOST, DB_NAME, DB_USER, DB_PASS);

            // Monta a query para seleção e localização do usuário
            $query = "SELECT * FROM at_usergroups WHERE usergroupid = :usergroup";

            // Prepara o query statement e params
            $stmt = $mysql->prepare($query);

            $stmt->bindParam(':usergroup', $usergroup);
            
            // Executa a query
            $stmt->execute();

            // Salva os dados encontados na variável
            $grperms = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $grperm = $grperms[0];

            // Entrega resultados da checagem
			if ($grperm[$permslug] == '1'){ return TRUE; }
            if ($grperm[$permslug] == '0'){ return FALSE; }
            // print_r($grperms);
		}

	}
}






// -----------------------------------------------------
// FUNÇÕES DE EXIBIÇÃO DE BADGES
// -----------------------------------------------------


// Função para checagem das permissões de acesso dos recursos específicos da empresa
function badges($permview, $permedit = null) {
	
	// Verifica se o usuário tem a permissão de visualização informada
	if(perm_group_check($permview) == true) {echo '<span class="badge badge-success permtag">Ver</span>';}
	
	echo " "; // Espaçador entre tags
	
	// Verifica se o usuário tem a permissão de edição informada
	if(perm_group_check($permedit) == true) {echo '<span class="badge badge-warning permtag">Editar</span>';}	

	// Checa se o usuário não possui nenhuma das duas permissões anteriores para mostrar a tag de "sem acesso"
	if(perm_group_check($permview) == false && perm_group_check($permedit) == false) {
		echo '<span class="badge badge-dark permtag">Sem Acesso</span><br>';
	}
}

// Função para checagem das permissões de acesso dos recursos específicos da empresa
function badge_adm($permission) {
	if(perm_group_check($permission) == true) {echo '<span class="badge badge-danger permtag">', 'ADM', '</span><br>';}
}


// Função para exibição das badges on/off
function badge_onoff($var) {
	
	// Verifica se o usuário tem a permissão de visualização informada
	if (empty($var)) {
		echo '<span class="badge badge-danger permtag">Off</span>';
	} else {
		echo '<span class="badge badge-success permtag">On</span>';
	}

}





// -----------------------------------------------------
// FUNÇÕES DE OBTENÇÃO DE DADOS
// -----------------------------------------------------


// Obtem os dados da compania a partir do ID dela
// $compid é o id da compania, enquanto $info é o nome do campo desejado da tabela
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
// $compid é o id do usuário, enquanto $info é o nome do campo desejado da tabela
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



// Obtem os dados do grupo do usuário a partir do ID
// $groupid é o id do grupo, enquanto $info é o nome do campo desejado da tabela
function groupinfo_byid($groupid, $info) {

	global $mysql;
	$sql = "SELECT * FROM at_usergroups WHERE usergroupid = '$groupid'";
    $query = mysqli_query($mysql, $sql);
	$result = mysqli_fetch_assoc($query);

    if (empty($result)) {
    
    	echo "Não Encontrado";

    } else {

    	echo $result[$info];

    };

}






/* 

// Função para obter itens do banco
// Usar as seguintes opções no $type: attendances, clientgroups, clients, companies, configs, mods, usergroups, users
function getitems($type, $condition, $result){
    
    // Define a tabela a ser utilizada na query dependendo do tipo de item passado
    if ($type == 'attendances') { $table = ATB_ATT ;}
    if ($type == 'clientgroups') { $table = ATB_CLIGR ;}
    if ($type == 'clients') { $table = ATB_CLIENTS ;}
    if ($type == 'companies') { $table = ATB_COMPS ;}
    if ($type == 'configs') { $table = ATB_CONFIG ;}
    if ($type == 'mods') { $table = ATB_MOD ;}
    if ($type == 'usergroups') { $table = ATB_USERGR ;}
    if ($type == 'users') { $table = ATB_USERS ;}

    if (!isset($type)) {

        echo "Erro";

    } else {

        // Faz a conexão com o banco
        $conn = getConnection(DB_HOST, DB_NAME, DB_USER, DB_PASS);

        // Monta a query para seleção e localização do usuário
        $query = "SELECT * FROM $type WHERE $condition ";

        // Prepara o query statement
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $passwordHash);
        $stmt->bindParam(':status', $status);

        // Executa a query
        $stmt->execute();

        // Salva os dados encontados na variável $users
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Pega o primeiro user
        $user = $users[0];
    }

}
 */






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


// -----------------------------------------------------
// FUNÇÕES DE PROCESSAMENTO DE ARQUIVOS
// -----------------------------------------------------


// Apaga um diretório recursivamente
function delete_dir($path) {
	$files = glob($path . '/*');
	foreach ($files as $file) {
		is_dir($file) ? delete_dir($file) : unlink($file);
	}
	rmdir($path);
	return;
}





?>