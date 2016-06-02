<?php

if ($_SESSION['UsuarioNivel'] < $perm_view_users)
	{
		// Caso o nivel requerido para apágina for menor que o do usuário exibe o conteúdo
		echo '
		
		<div id="content">
		<b> Usuários </b>
		</div>
		
		';
		// Caso o nivel requerido seja maior que o do usuário exibe erro
		echo 'Você não possui permissão para acessar esta página.';
		
	}

?>