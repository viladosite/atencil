<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_attendance):
?>


<!-- Início do Grid -->
<div class="mdl-grid">
  
    <div class="mdl-cell mdl-cell--12-col">
        <div id="atd_title">
        <h3>Criar Atendimento</h3>
        </div>

    </div>

    <div class="mdl-cell mdl-cell--8-col">
        
        <!-- Início do Card -->
          <div class="mdl-card mdl-shadow--4dp at-card at-cardatd" >

              <div class="mdl-card__title">
                <span>Atendimento 1</span>
              </div>

              <div class="mdl-card__supporting-text">

                <div id="at_date"><span id="at_day">Dia</span>/mês/ano</div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="at_id">
                        <label class="mdl-textfield__label" for="at_id">ID</label>
                        <span class="mdl-textfield__error">Somente Numeros!</span>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="companyid">
                        <label class="mdl-textfield__label" for="companyid">Empresa</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="userid">
                        <label class="mdl-textfield__label" for="userid">Usuário</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="userid">
                        <label class="mdl-textfield__label" for="userid">Cliente</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attendate">
                        <label class="mdl-textfield__label" for="attendate">Data</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attenhour">
                        <label class="mdl-textfield__label" for="attenhour">Hora</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attenchannel">
                        <label class="mdl-textfield__label" for="attenchannel">Canal</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attensubject">
                        <label class="mdl-textfield__label" for="attensubject">Assunto</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attenobs">
                        <label class="mdl-textfield__label" for="attenobs">Observações</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attenstatus">
                        <label class="mdl-textfield__label" for="attenstatus">Status</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attenreturn">
                        <label class="mdl-textfield__label" for="attenreturn">Retorno</label>
                </div>

                <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="at_input mdl-textfield__input" type="text" id="attenflag">
                        <label class="mdl-textfield__label" for="attenflg">Attenflag</label>
                </div>

                <div class="at_opt">

                <button class="at_btnAt mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent">
                  <i class="material-icons">add</i>
                  </button>

                  <button class="at_btnAt mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent">
                  <i class="material-icons">create</i>
                  </button>

                  <button class="at_btnAt mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--accent">
                  <i class="material-icons">delete</i>
                  </button>

                  </div>

              </div>

              <div class="mdl-card__actions mdl-card--border">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">Checar</button>
                  
              </div>

              <div class="mdl-card__menu">

      
                <button id="infoperson" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">info</i>  
                </button>
      
                <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="infoperson">
                menu
                </div>

              </div>   

          </div>
        <!-- Fim do Card -->

    </div>





<!-- Fim do Loop Simulado -->

<div class="atd_add" id="menu">

        <!-- Botão adicionar atendimento -->
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect">
          <i class="material-icons">add</i>
        </button>

    </div>



</div>
<!-- Fim do Grid -->

    


<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>
