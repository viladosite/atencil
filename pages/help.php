<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_dashboard):
?>


<!-- Início do conteúdo da página -->


<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--6-col">
		  			<h3>Ajuda</h3>
						<!-- Início do Card -->
		  				<div class="mdl-card mdl-shadow--4dp at-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Identificação</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="at_flabel mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Primeiro Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">salvar</button>
 							<div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" id="spinnerBarra"></div>
		  					</div>


		  					<div class="mdl-card__menu">
		  					<button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                            Informe seus dados pessoais e informações relativas à você e seus meios de contato
                            </div>
		  					</div>
  						</div>
						<!-- Fim do Card -->
                        
                        
  		</div>

  		<div class="mdl-cell mdl-cell--6-col">
	  				<h3>Sobre</h3>

						<!-- Início do Card -->
		  				<div class="mdl-card mdl-shadow--3dp at-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Sua Empresa</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="corp_name">
                                    <label class="mdl-textfield__label" for="corp_name">Nome da Empresa</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="corp_tel">
                                    <label class="mdl-textfield__label" for="corp_tel">Telefone da Empresa</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="at_input mdl-textfield__input" type="text" id="corp_mail">
                                    <label class="mdl-textfield__label" for="corp_mail">E-mail da Empresa</label>
                                  </div>

                                </form>
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">salvar</button>
		  					</div>

		  					<div class="mdl-card__menu">
		  					<button id="infocorp" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infocorp">
                            Edite e/ou visualize os dados de sua empresa. Para editar você deve ser administrador de uma empresa.
                            </div>
		  					</div>
  						</div>
						<!-- Fim do Card -->
                        
                        
                        
  		</div>

  		<div class="mdl-cell mdl-cell--6-col">
		  			<h3>FAQ</h3>

						<!-- Início do Card -->
                        <div class="mdl-card mdl-shadow--3dp at-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">E-mails</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">

                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="mails1">
                                  <input type="checkbox" id="mails1" class="at_switch mdl-switch__input" checked>
                                  <span class="mdl-switch__label">E-mails de sistema</span>
                                </label>

                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="mails2">
                                  <input type="checkbox" id="mails2" class="mdl-switch__input">
                                  <span class="mdl-switch__label">E-mails dos administradores</span>
                                </label>

                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="mails3">
                                  <input type="checkbox" id="mails3" class="mdl-switch__input">
                                  <span class="mdl-switch__label">E-mails de sua empresa</span>
                                </label>

		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">salvar</button>
		  					</div>

		  					<div class="mdl-card__menu">
		  					<button id="infosys" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
							<div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infosys">
                            Selecione quais os e-mails e notificações que deseja receber do sistema.
                            </div>
		  					</div>
  						</div>
						<!-- Fim do Card -->
  		</div>

  		<div class="mdl-cell mdl-cell--6-col">
		  			<h3>Contato</h3>

						<!-- Início do Card -->
                        <div class="mdl-card mdl-shadow--3dp at-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Funções</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">

                            <!-- Botão excluir conta -->
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
                              excluir minha conta
                            </button>
                            
		  					</div>

		  					<div class="mdl-card__menu">
		  					<button id="infoacc" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
							<div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoacc">
                            Execute funções avançadas em sua conta.
                            <br><br>
                            <b>ATENÇÃO:</b><br>
                            As funções aqui disponíveis são irreversíveis. Utilize-as com cuidado.
                            </div>
		  					</div>
  						</div>
						<!-- Fim do Card -->
  		</div>

	</div>




<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>