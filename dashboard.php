<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
$nivel_necessario = 1;
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
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
	<title>ATENCIL - Painel</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-amber.min.css" />
   	<link rel="stylesheet" href="css/style_dashboard.css" />
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

	<style >
		.mdl-cell{
			background-color: #bbb;
		}

	</style>
	 
</head>
<body>
	<!-- 
	 a primeira classe define que a div é um componente do mdl
	 a segunda atribui comportamentos basicos para que o layout funcione
     a terceira informa ao mdl que o header é fixo
     -->

	<!-- Div de montagem do layout e definições de header -->
    <div class=" mdl.layout mdl-js-layout mdl-layout--fixed-header">

            <!-- Inclui o header -->
		  	<?php include "includes/at_header.php"; ?>

			<!-- Inclui o drawer com o menu principal -->
		  	<?php include "includes/at_drawer.php"; ?>

			<!-- Div de montagem do conteúdo -->
			<div class="mdl-layout__content">
				<main class="page-content">
				
                	<!-- Inclui o conteúdo principal do painel -->
                	<div id="content_container">
				  	<?php include "includes/at_content.php"; ?>
                    </div>
				
                </main>
			</div>

			<!-- Inclui o footer -->
		  	<?php include "includes/at_footer.php"; ?>

	</div>

</body>
</html>