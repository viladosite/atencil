<!-- Este arquivo é responsável pela montagem do menu retrátil -->

<?php
// Pega as definições de banco de dados do arquivo de config
include "config.php";
?>

<link rel="stylesheet" href="css/style_dashboard.css" />

<!-- criação do drawer padrão -->
<div class="mdl-layout__drawer">
   	<span class="mdl-layout-title">ATENCIL</span>

<!-- Criação do header do menu com dados do usuário -->

		<header class="avatar_box">
          <img src="../images/user.jpg" class="avatar_img">
          <div class="avatar_name">
			<span><?php echo $_SESSION['UsuarioNome'] ?></span>
			<a href="/auth/at_logout.php">
			<button id="logout" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
			<i class="material-icons" role="presentation">close</i>
			</button>
            <div class="mdl-tooltip mdl-tooltip--large" for="logout">
			Sair desta conta
			</div>
            </a>
          </div>
        </header>


		<div id="menu" name="menu">
        <nav class="mdl-navigation">

<?php
// Item de menu Início

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_dashboard)
		{

		    // Exibe o item de menu
      		echo '<a class="mdl-navigation__link" href="dashboard.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>
            Início</a>';

			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo

		}


// Item de menu Editar minha conta

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_editacc)
		{

		    // Exibe o item de menu
      		echo '<a class="mdl-navigation__link" href="pages/acc.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">build</i>
            Editar Minha Conta</a>';

			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo
			
		}


// Item de menu Atendimentos

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_attendance)
		{

		    // Exibe o item de menu
      		echo '<a class="mdl-navigation__link" href="pages/attendance.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">perm_phone_msg</i>
            Atendimentos</a>';

			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo

		}

// Item de menu Clientes

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_clients)
		{

		    // Exibe o item de menu
      		echo '<a class="mdl-navigation__link" href="pages/clients.php">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_pin</i>
            Clientes</a>';

			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo

		}

// Item de menu Usuários

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_users)
		{

		    // Exibe o item de menu
			echo '<a class="mdl-navigation__link" href="pages/users.php">
   	        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>
    	    Usuários</a>';
			
			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo

		}


// Item de menu Configurações

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_sys)
		{
		    // Exibe o item de menu
			echo '<a class="mdl-navigation__link" href="pages/system.php">
	        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>
    	    Sistema</a>';
			
			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo

		}


// Item de menu Buscar

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_search)
		{
			// Exibe o item de menu
			echo '<a class="mdl-navigation__link" href="pages/search.php">
			<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">search</i>
			Buscar</a>';
		
			// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo

		}


// Item de menu Ajuda

	// Verifica se não há a variável da sessão que identifica o usuário
	if ($_SESSION['UsuarioNivel'] >= $perm_view_dashboard)
			{
				    // Exibe o item de menu
					echo '<a class="mdl-navigation__link" href="pages/help.php">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>
					Ajuda</a>';
				
					// Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo

			}
						
?>
            
    	</nav>
        </div>
  	</div>