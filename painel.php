<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
$nivel_necessario = 1;
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
  // Destrói a sessão por segurança
  session_destroy();
  // Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo
  header("Location: /index.html"); exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">
	<title>ATENCIL - Painel</title>

<link rel="stylesheet" type="text/css"  href="troca.css" /> 
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue-amber.min.css" />
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

	<style >
		.mdl-cell{
			background-color: #bbb;
		}

		#busca{
			width: 40%!important;
		}
	</style>
	 
</head>
<body>
	<!-- 
	 a primeira classe define que a div é um componente do mdl
	 e a segunda atribui comportamentos basicos para que o layout funcione-->
	<div class=" mdl.layout mdl-js-layout mdl-layout--fixed-header"> <!-- header fixo -->
		<header class=" mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title"> ATENCIL </span>

				<div class="mdl-layout-spacer"></div>  <!-- essa class serve para dar um espaçamento grande -->

				<nav class="mdl-navigation">
				<a href="#" class="mdl-navigation__link">Link 1</a>
				
				</nav>

		<!-- construção do campo de busca -->
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right" id="busca">
        		<label class="mdl-button mdl-js-button mdl-button--icon"
               	for="fixed-header-drawer-exp">
          			<i class="material-icons">search</i>
        		</label>
        	<div class="mdl-textfield__expandable-holder">
          		<input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        	</div>
      		</div>
			

			</div>

		</header>
		

	<!-- Criação do drawer padrão -->				
  	<div class="demo-drawer mdl-layout__drawer">
	   	<span class="mdl-layout-title">Menu Principal</span>

		<!-- Criação do header do menu com dados do usuário -->
		<header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $_SESSION['UsuarioNome'] ?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Opções</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">Editar minha conta</li>
              <li class="mdl-menu__item"><i class="material-icons">replay</i>Trocar de conta</li>
            </ul>
          </div>
        </header>

        <!-- Criação do menu principal -->
    	<nav class="mdl-navigation">
      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">perm_phone_msg</i>
            Atendimentos</a>

      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_pin</i>
            Clientes</a>

      		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>
            Usuários</a>

			<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">close</i>
            Sair</a>
            

            
       		<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>
            Ajuda</a>
            
    	</nav>
  	</div>
		
	<!-- grids -->
	<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--4-col">Coluna 1</div>
  		<div class="mdl-cell mdl-cell--4-col">Coluna 2</div>
  		<div class="mdl-cell mdl-cell--2-col">Coluna 3</div>
  		<div class="mdl-cell mdl-cell--2-col">Coluna 3</div>
	</div>


	<main class="mdl-layout__content">	
		
	</main>
		
	</div>

</body>
</html>