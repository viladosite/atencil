<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">
    
<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UsuarioNivel'] >= $perm_view_editacc):
?>
<!-- Início do conteúdo da página -->

	<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--6-col">
		  			<h3>Informações Pessoais</h3>
						<!-- Início do Card -->
		  				<div class="mdl-card mdl-shadow--4dp demonstracao-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Identificação</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="firstname">
                                    <label class="mdl-textfield__label" for="firstname">Primeiro Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="lastname">
                                    <label class="mdl-textfield__label" for="lastname">Último Nome</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="username">
                                    <label class="mdl-textfield__label" for="username">Nome de Usuário</label>
                                  </div>
                                  
                                </form>
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">botão</button>
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
                        
                        <!-- Início do Card -->
		  				<div class="mdl-card mdl-shadow--4dp demonstracao-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Contato</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="phone1">
                                    <label class="mdl-textfield__label" for="phone1">Telefone Principal</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="phone2">
                                    <label class="mdl-textfield__label" for="phone2">Telefone Secundário</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="whatsapp">
                                    <label class="mdl-textfield__label" for="whatsapp">Whatsapp</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="email">
                                    <label class="mdl-textfield__label" for="email">E-mail</label>
                                  </div>
                                  
                                </form>
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">botão</button>
		  					</div>

		  					<div class="mdl-card__menu">
		  					<button id="infocontact" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infocontact">
                            Informe seus dados para contato e comunicação
                            </div>
		  					</div>
  						</div>
						<!-- Fim do Card -->
                        
  		</div>

  		<div class="mdl-cell mdl-cell--6-col">
	  				<h3>Informações Corporativas</h3>

						<!-- Início do Card -->
		  				<div class="mdl-card mdl-shadow--3dp demonstracao-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Sua Empresa</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
                                <form action="#">

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="corp_name">
                                    <label class="mdl-textfield__label" for="corp_name">Nome da Empresa</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="corp_tel">
                                    <label class="mdl-textfield__label" for="corp_tel">Telefone da Empresa</label>
                                  </div>

                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="corp_mail">
                                    <label class="mdl-textfield__label" for="corp_mail">E-mail da Empresa</label>
                                  </div>

                                </form>
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">botão</button>
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
                        
                        <!-- Início do Card -->
		  				<div class="mdl-card mdl-shadow--3dp demonstracao-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Funcionários</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
                            
                                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                                  <thead>
                                    <tr data-mdl-data-table-selectable-name="emply_select" data-mdl-data-table-selectable-value="all">
                                      <th class="mdl-data-table__cell--non-numeric">Funcionário</th>
                                      <th>Nome de Usuário</th>
                                      <th>Cargo</th>
                                      <th>Opções</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-mdl-data-table-selectable-name="emply_select" data-mdl-data-table-selectable-value="jdoe">
                                      <td class="mdl-data-table__cell--non-numeric">John Doe</td>
                                      <td>jdoe</td>
                                      <td>Atendente</td>
                                      <td>
                                        <!-- Botão Mais Opções -->
                                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                        <i id ="more_opt_user1" class="material-icons">more_vert</i>
                                        </button>
                                        <!-- Tooltip do Mais Opções -->
                                        <div class="mdl-tooltip mdl-tooltip--top" for="more_opt_user1">
                                        Mais<br>Opções
                                        </div>
                                        <!-- Menu Mais Opções -->
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                            for="more_opt_user1">
                                          <li class="mdl-menu__item">Excluir Funcionário</li>
                                          <li class="mdl-menu__item">Ver Perfil</li>
                                          <li disabled class="mdl-menu__item">Alterar Permissões</li>
                                          <li class="mdl-menu__item">Enviar Mensagem</li>
                                        </ul>
                                      </td>
                                    </tr>
                                    
                                    
                                    
                                    <tr data-mdl-data-table-selectable-name="emply_select" data-mdl-data-table-selectable-value="marcelaf">
                                      <td class="mdl-data-table__cell--non-numeric">Marcela Farias</td>
                                      <td>marcelaf</td>
                                      <td>Diretora</td>
                                      <td>
                                        <!-- Botão Mais Opções -->
                                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                        <i id ="more_opt_user2" class="material-icons">more_vert</i>
                                        </button>
                                        <!-- Tooltip do Mais Opções -->
                                        <div class="mdl-tooltip mdl-tooltip--top" for="more_opt_user2">
                                        Mais<br>Opções
                                        </div>
                                        <!-- Menu Mais Opções -->
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                            for="more_opt_user2">
                                          <li class="mdl-menu__item">Excluir Funcionário</li>
                                          <li class="mdl-menu__item">Ver Perfil</li>
                                          <li disabled class="mdl-menu__item">Alterar Permissões</li>
                                          <li class="mdl-menu__item">Enviar Mensagem</li>
                                        </ul>
                                      </td>
                                    </tr>



                                    <tr data-mdl-data-table-selectable-name="emply_select" data-mdl-data-table-selectable-value="andrealencar">
                                      <td class="mdl-data-table__cell--non-numeric">André Alencar</td>
                                      <td>andrealencar</td>
                                      <td>Gerente</td>
                                      <td>
                                        <!-- Botão Mais Opções -->
                                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                        <i id ="more_opt_user3" class="material-icons">more_vert</i>
                                        </button>
                                        <!-- Tooltip do Mais Opções -->
                                        <div class="mdl-tooltip mdl-tooltip--top" for="more_opt_user3">
                                        Mais<br>Opções
                                        </div>
                                        <!-- Menu Mais Opções -->
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                            for="more_opt_user3">
                                          <li class="mdl-menu__item">Excluir Funcionário</li>
                                          <li class="mdl-menu__item">Ver Perfil</li>
                                          <li disabled class="mdl-menu__item">Alterar Permissões</li>
                                          <li class="mdl-menu__item">Enviar Mensagem</li>
                                        </ul>
                                      </td>
                                    </tr>


                                    <tr data-mdl-data-table-selectable-name="emply_select" data-mdl-data-table-selectable-value="felipem">
                                      <td class="mdl-data-table__cell--non-numeric">Felipe Magalhães</td>
                                      <td>felipem</td>
                                      <td>Financeiro</td>
                                      <td>
                                        <!-- Botão Mais Opções -->
                                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                        <i id ="more_opt_user4" class="material-icons">more_vert</i>
                                        </button>
                                        <!-- Tooltip do Mais Opções -->
                                        <div class="mdl-tooltip mdl-tooltip--top" for="more_opt_user4">
                                        Mais<br>Opções
                                        </div>
                                        <!-- Menu Mais Opções -->
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                            for="more_opt_user4">
                                          <li class="mdl-menu__item">Excluir Funcionário</li>
                                          <li class="mdl-menu__item">Ver Perfil</li>
                                          <li disabled class="mdl-menu__item">Alterar Permissões</li>
                                          <li class="mdl-menu__item">Enviar Mensagem</li>
                                        </ul>
                                      </td>
                                    </tr>
                                    
                                  </tbody>
                                </table>

		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">botão</button>
                                
		  						<button class="at-cardbutton-right mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-button--colored">
		  						<i class="material-icons">add</i>
		  						</button>	

		  					</div>

		  					<div class="mdl-card__menu">
		  					<button id="infocorp2" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
                            <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infocorp2">
                            Inclua, exclua ou edite as informações e permissões de funcionários vinculados a sua empresa.
                            <br>
                            Os funcionários vinculados à sua empresa compartilham os atendimentos ligados a ela.
                            </div>
		  					</div>
  						</div>
						<!-- Fim do Card -->
                        
  		</div>

  		<div class="mdl-cell mdl-cell--6-col">
		  			<h3>Preferências de Sistema</h3>

						<!-- Início do Card -->
                        <div class="mdl-card mdl-shadow--3dp demonstracao-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">E-mails</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
		  						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  						tempor incididunt ut labore et dolore magna aliqua.
		  						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  						tempor incididunt ut labore et dolore magna aliqua.
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">botão</button>
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
		  			<h3>Funções de Conta</h3>

						<!-- Início do Card -->
                        <div class="mdl-card mdl-shadow--3dp demonstracao-card">
		  					<div class="mdl-card__title">
		  						<h2 class="mdl-card__title-text">Funções</h2>
		  					</div>
		  					<div class="mdl-card__supporting-text">
		  						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  						tempor incididunt ut labore et dolore magna aliqua.
		  						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  						tempor incididunt ut labore et dolore magna aliqua.
		  					</div>

		  					<div class="mdl-card__actions mdl-card--border">
		  						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised">botão</button>
		  					</div>

		  					<div class="mdl-card__menu">
		  					<button id="infoacc" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
		  						<i class="material-icons">info</i>	
		  					</button>
							<div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoacc">
                            Execute funções avançadas em sua conta.
                            <br><br>
                            <b>ATENÇÃO:</b><br>
                            As funções aqui disponíveis são irreversíveis. Utilize-as com caute-la.
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