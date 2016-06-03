<?php

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Pega as definições de banco de dados e permissões do arquivo de config
require "config.php";
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $perm_view_dashboard))
	{
	// Destrói a sessão por segurança
	session_destroy();
	// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo
	header("Location: /index.php"); exit;
	}
	
?>



<!-- Este é o arquvio principal de exibição do dashboard -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1.0">
	<title>ATENCIL</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-amber.min.css" />
   	<link rel="stylesheet" href="css/style_dashboard.css" />
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<style >
		
	</style>
	 
</head>

<!--   ORIGINAL
<script>
$(document).ready(function() {
		$(document).on('click', '#menu a', function( e ){
 		e.preventDefault();
		var href = $( this ).attr('href');
		$("#content").load( href +" #content");
		});
	});
</script>
-->

<script>
$(document).ready(function() {
		$(document).on('click', '#menu a', function( e ){
 		e.preventDefault();
		var href = $( this ).attr('href');
		$("#content").load( href +" #content");
		});
	});
</script>


<body>
	<!-- Div de montagem do layout e definições de header -->
    <div class=" mdl.layout mdl-js-layout mdl-layout--fixed-header">

            <!-- Inclui o header -->
		  	<?php include "includes/at_header.php"; ?>

			<!-- Inclui o drawer com o menu principal -->
		  	<?php include "includes/at_drawer.php"; ?>

			<!-- Div de montagem do conteúdo -->
			<div class="mdl-layout__content">
				<main class="page-content">
				
                	<!-- Inclui o conteúdo principal do painel (Variável a partir do carregamento Jquery) -->
                	<div id="content">
				  	<?php include "includes/at_content.php"; ?>
                    </div>
				
                </main>
			</div>

			<!-- Inclui o footer -->
		  	<?php include "includes/at_footer.php"; ?>

	</div>

</body>
</html>