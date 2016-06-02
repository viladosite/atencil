<?php

if ($_SESSION['UsuarioNivel'] < $perm_view_sys)
	{
		// Caso o nivel requerido para apágina for menor que o do usuário exibe o conteúdo
		echo '
		
		<div id="content">
		<b> Configurações de sistema </b>
		</div>
		
		';
		// Caso o nivel requerido seja maior que o do usuário exibe erro
		echo 'Você não possui permissão para acessar esta página.';
		
	}

?>