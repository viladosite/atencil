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

<!-- Este é o arquvio principal de exibição do painel -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">
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

	<!-- header fixo -->
    <div class=" mdl.layout mdl-js-layout mdl-layout--fixed-header">

		<!-- Início do header -->
    	<header class=" mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title"> ATENCIL </span>

			<!-- Class destinada a dar um espaçamento grande -->
			<div class="mdl-layout-spacer"></div>

			<!-- Construção dos ícones indicativos no menu -->
			<nav class="mdl-navigation">

		        <a class="mdl-navigation__link" href="">
                <i id="icon1" class="material-icons" role="presentation">phone</i></a>
                <div class="mdl-tooltip" for="icon1">
				Veja e edite<br>seus atendimentos
				</div>

		        <a class="mdl-navigation__link" href="">
                <i class="material-icons" role="presentation">notifications</i></a>

   		        <a class="mdl-navigation__link" href="">
                <i class="material-icons" role="presentation">search</i></a>

			</nav>

			</div>

		</header>
		

		<!-- Inclui o drawer com o menu principal -->
	  	<?php include "includes/at_drawer.php"; ?>


		<!-- Conteiner para o conteúdo da página -->
		<main class="mdl-layout__content">			

			<!-- Inclui o conteúdo principal do painel -->
		  	<?php include "includes/at_content.php"; ?>

		</main>
		


		<!-- Inclusão do mini footer provisoriamente , lgo será passado para um arquivo externo -->
		<footer class="mdl-mini-footer">
  			<div class="mdl-mini-footer--left-section">
  				<div class="mdl-logo">Atencil - 2016</div>
  				<ul class="mdl-mini-footer--link-list">
	  			<li><a href="#">Vila do Site</a></li>
  				<li><a href="#">Pagina do Facebook</a></li>
  				</ul>
  			</div>
	  	</footer>

	</div>

</body>
</html>