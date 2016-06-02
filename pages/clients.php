<?php

if ($_SESSION['UsuarioNivel'] < $perm_view_clients)
	{
		// Caso o nivel requerido para apágina for menor que o do usuário exibe o conteúdo
		echo '
		
		<div id="content">
		<b> Clientes </b>
		</div>
		
		';
		// Caso o nivel requerido seja maior que o do usuário exibe erro
		echo 'Você não possui permissão para acessar esta página.';
		
	}

?>