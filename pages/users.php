<div id="content">
<?php
// Exibe o conteúdo da página apenas para quem tem permissão para visualiza-lo

	// Verifica se o usuário tem permissão para ver o conteúdo
	if ($_SESSION['UsuarioNivel'] >= $perm_edit_users)
		{

		    // Mostra o conteúdo da página
      		echo '<b> Usuários </b>';

		} else {
			
			// Mostra o erro de permissão
      		echo '<b> Você não tem permissão para visualizar este conteúdo </b>';

		}
?>
</div>