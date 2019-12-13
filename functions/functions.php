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


// Função para checar se o grupo do usuário logado tem permissão para acessar uma página informada
// Retorna false quando o usuário não está logado ou não possui a permissão necessária
function perm_group_check($permslug) {

	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) {session_start();}

	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['UserID']) AND !isset($_SESSION['UserGroup'])) {

		return FALSE;

	} else {

		if ($permslug == null) {
		
			return FALSE;
		
		} else {
		
			$usergroup = $_SESSION['UserGroup'];

			// Monta a conexão e checagem no banco para obter as permissões do grupo fornecido
			global $mysql;
			$sql = "SELECT * FROM at_usergroups WHERE usergroupid = '$usergroup'";
			$query = mysqli_query($mysql, $sql);
			$grperms = mysqli_fetch_assoc($query);

			if ($grperms[$permslug] == '1'){ return TRUE; }
			if ($grperms[$permslug] == '0'){ return FALSE; }
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







// -----------------------------------------------------
// FUNÇÕES DE MÓDULOS
// -----------------------------------------------------

/*

// Atualiza a lista de módulos instalados baseados nas pastas presentes no sistema
function mod_refresh() {
    $modpath = DIR_PATH . HOME_DIR . MODS_DIR;
    $moddirs = glob($modpath . '/*' , GLOB_ONLYDIR);

    foreach ($moddirs as $moddir) {
        $moddir = str_replace($modpath,'',$moddir);
        $moddir = str_replace("/",'',$moddir);

        echo $moddir;
        echo "<br>";

    }

    
}

*/





// -----------------------------------------------------
// FUNÇÕES DE TRATAMENTO DE STRINGS
// -----------------------------------------------------



// Remove acentuções e caracteres acentuados substituindo-os por similares sem acento (Obtido no wordpress)
function remove_accents($string) {
    if ( !preg_match('/[\x80-\xff]/', $string) )
        return $string;

    $chars = array(
    // Decompositions for Latin-1 Supplement
    chr(195).chr(128) => 'A', chr(195).chr(129) => 'A',
    chr(195).chr(130) => 'A', chr(195).chr(131) => 'A',
    chr(195).chr(132) => 'A', chr(195).chr(133) => 'A',
    chr(195).chr(135) => 'C', chr(195).chr(136) => 'E',
    chr(195).chr(137) => 'E', chr(195).chr(138) => 'E',
    chr(195).chr(139) => 'E', chr(195).chr(140) => 'I',
    chr(195).chr(141) => 'I', chr(195).chr(142) => 'I',
    chr(195).chr(143) => 'I', chr(195).chr(145) => 'N',
    chr(195).chr(146) => 'O', chr(195).chr(147) => 'O',
    chr(195).chr(148) => 'O', chr(195).chr(149) => 'O',
    chr(195).chr(150) => 'O', chr(195).chr(153) => 'U',
    chr(195).chr(154) => 'U', chr(195).chr(155) => 'U',
    chr(195).chr(156) => 'U', chr(195).chr(157) => 'Y',
    chr(195).chr(159) => 's', chr(195).chr(160) => 'a',
    chr(195).chr(161) => 'a', chr(195).chr(162) => 'a',
    chr(195).chr(163) => 'a', chr(195).chr(164) => 'a',
    chr(195).chr(165) => 'a', chr(195).chr(167) => 'c',
    chr(195).chr(168) => 'e', chr(195).chr(169) => 'e',
    chr(195).chr(170) => 'e', chr(195).chr(171) => 'e',
    chr(195).chr(172) => 'i', chr(195).chr(173) => 'i',
    chr(195).chr(174) => 'i', chr(195).chr(175) => 'i',
    chr(195).chr(177) => 'n', chr(195).chr(178) => 'o',
    chr(195).chr(179) => 'o', chr(195).chr(180) => 'o',
    chr(195).chr(181) => 'o', chr(195).chr(182) => 'o',
    chr(195).chr(182) => 'o', chr(195).chr(185) => 'u',
    chr(195).chr(186) => 'u', chr(195).chr(187) => 'u',
    chr(195).chr(188) => 'u', chr(195).chr(189) => 'y',
    chr(195).chr(191) => 'y',
    // Decompositions for Latin Extended-A
    chr(196).chr(128) => 'A', chr(196).chr(129) => 'a',
    chr(196).chr(130) => 'A', chr(196).chr(131) => 'a',
    chr(196).chr(132) => 'A', chr(196).chr(133) => 'a',
    chr(196).chr(134) => 'C', chr(196).chr(135) => 'c',
    chr(196).chr(136) => 'C', chr(196).chr(137) => 'c',
    chr(196).chr(138) => 'C', chr(196).chr(139) => 'c',
    chr(196).chr(140) => 'C', chr(196).chr(141) => 'c',
    chr(196).chr(142) => 'D', chr(196).chr(143) => 'd',
    chr(196).chr(144) => 'D', chr(196).chr(145) => 'd',
    chr(196).chr(146) => 'E', chr(196).chr(147) => 'e',
    chr(196).chr(148) => 'E', chr(196).chr(149) => 'e',
    chr(196).chr(150) => 'E', chr(196).chr(151) => 'e',
    chr(196).chr(152) => 'E', chr(196).chr(153) => 'e',
    chr(196).chr(154) => 'E', chr(196).chr(155) => 'e',
    chr(196).chr(156) => 'G', chr(196).chr(157) => 'g',
    chr(196).chr(158) => 'G', chr(196).chr(159) => 'g',
    chr(196).chr(160) => 'G', chr(196).chr(161) => 'g',
    chr(196).chr(162) => 'G', chr(196).chr(163) => 'g',
    chr(196).chr(164) => 'H', chr(196).chr(165) => 'h',
    chr(196).chr(166) => 'H', chr(196).chr(167) => 'h',
    chr(196).chr(168) => 'I', chr(196).chr(169) => 'i',
    chr(196).chr(170) => 'I', chr(196).chr(171) => 'i',
    chr(196).chr(172) => 'I', chr(196).chr(173) => 'i',
    chr(196).chr(174) => 'I', chr(196).chr(175) => 'i',
    chr(196).chr(176) => 'I', chr(196).chr(177) => 'i',
    chr(196).chr(178) => 'IJ',chr(196).chr(179) => 'ij',
    chr(196).chr(180) => 'J', chr(196).chr(181) => 'j',
    chr(196).chr(182) => 'K', chr(196).chr(183) => 'k',
    chr(196).chr(184) => 'k', chr(196).chr(185) => 'L',
    chr(196).chr(186) => 'l', chr(196).chr(187) => 'L',
    chr(196).chr(188) => 'l', chr(196).chr(189) => 'L',
    chr(196).chr(190) => 'l', chr(196).chr(191) => 'L',
    chr(197).chr(128) => 'l', chr(197).chr(129) => 'L',
    chr(197).chr(130) => 'l', chr(197).chr(131) => 'N',
    chr(197).chr(132) => 'n', chr(197).chr(133) => 'N',
    chr(197).chr(134) => 'n', chr(197).chr(135) => 'N',
    chr(197).chr(136) => 'n', chr(197).chr(137) => 'N',
    chr(197).chr(138) => 'n', chr(197).chr(139) => 'N',
    chr(197).chr(140) => 'O', chr(197).chr(141) => 'o',
    chr(197).chr(142) => 'O', chr(197).chr(143) => 'o',
    chr(197).chr(144) => 'O', chr(197).chr(145) => 'o',
    chr(197).chr(146) => 'OE',chr(197).chr(147) => 'oe',
    chr(197).chr(148) => 'R',chr(197).chr(149) => 'r',
    chr(197).chr(150) => 'R',chr(197).chr(151) => 'r',
    chr(197).chr(152) => 'R',chr(197).chr(153) => 'r',
    chr(197).chr(154) => 'S',chr(197).chr(155) => 's',
    chr(197).chr(156) => 'S',chr(197).chr(157) => 's',
    chr(197).chr(158) => 'S',chr(197).chr(159) => 's',
    chr(197).chr(160) => 'S', chr(197).chr(161) => 's',
    chr(197).chr(162) => 'T', chr(197).chr(163) => 't',
    chr(197).chr(164) => 'T', chr(197).chr(165) => 't',
    chr(197).chr(166) => 'T', chr(197).chr(167) => 't',
    chr(197).chr(168) => 'U', chr(197).chr(169) => 'u',
    chr(197).chr(170) => 'U', chr(197).chr(171) => 'u',
    chr(197).chr(172) => 'U', chr(197).chr(173) => 'u',
    chr(197).chr(174) => 'U', chr(197).chr(175) => 'u',
    chr(197).chr(176) => 'U', chr(197).chr(177) => 'u',
    chr(197).chr(178) => 'U', chr(197).chr(179) => 'u',
    chr(197).chr(180) => 'W', chr(197).chr(181) => 'w',
    chr(197).chr(182) => 'Y', chr(197).chr(183) => 'y',
    chr(197).chr(184) => 'Y', chr(197).chr(185) => 'Z',
    chr(197).chr(186) => 'z', chr(197).chr(187) => 'Z',
    chr(197).chr(188) => 'z', chr(197).chr(189) => 'Z',
    chr(197).chr(190) => 'z', chr(197).chr(191) => 's'
    );

    $string = strtr($string, $chars);

    return $string;
}



?>