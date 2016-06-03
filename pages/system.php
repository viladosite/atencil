<div id="content">
<?php
// Exibe o conteúdo da página apenas para quem tem permissão para visualiza-lo

	// Verifica se o usuário tem permissão para ver o conteúdo
	if ($_SESSION['UsuarioNivel'] >= $perm_view_sys)
		{

		    // Exibe o item de menu
      		echo '<b> Configurações de Sistema </b>';

			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo
      		echo '<b> Você não tem permissão para visualizar este conteúdo </b>';
		}
?>
</div>