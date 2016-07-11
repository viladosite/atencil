<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_clients):
?>


<!-- Início do conteúdo da página -->



<!-- Início do Grid -->
<div class="mdl-grid">
  
    <div class="mdl-cell mdl-cell--12-col">
        <div id="atd_title">
        <h3>Novo Cliente</h3>
        </div>

    </div>

    <div class="mdl-cell mdl-cell--8-col">
        
        <!-- Início do Card -->
          <div class="mdl-card mdl-shadow--4dp at-card at-cardatd" >

              <div class="mdl-card__title">
                <span>Cliente 1</span>
              </div>

              <form id="atten-add" action="" method="post">

              <div class="mdl-card__supporting-text">

                      <div id="at_date"><span id="at_day">Dia</span>/mês/ano</div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="clientid" name="clientid">
                          <label class="mdl-textfield__label" for="clientid">ID</label>
                          <span class="mdl-textfield__error">Somente Numeros!</span>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="companyid" name="companyid">
                          <label class="mdl-textfield__label" for="companyid"> Cliente Empresa</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="userid" name="userid">
                          <label class="mdl-textfield__label" for="userid">Usuário</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientfname" name="clientfname">
                          <label class="mdl-textfield__label" for="clientefname">Nome Cliente</label>
                      </div>

                       <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientlname" name="clientlname">
                          <label class="mdl-textfield__label" for="clientelname">Sobrenome Cliente</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientmail" name="clientmail">
                          <label class="mdl-textfield__label" for="clientmail">Email</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clienttel1" name="clienttel1">
                          <label class="mdl-textfield__label" for="clienttel1">Telefone 1</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clienttel2" name="clienttel2">
                          <label class="mdl-textfield__label" for="clienttel2">Telefone 2</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientzap" name="clientzap">
                          <label class="mdl-textfield__label" for="clientzap">Whatsapp</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientbirthdate" name="clientbirthdate">
                          <label class="mdl-textfield__label" for="clientbirthdate">Data Nasc.</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientadress" name="clientadress">
                          <label class="mdl-textfield__label" for="clientadress">Endereço</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientobs" name="clientobs">
                          <label class="mdl-textfield__label" for="clientobs">Observações</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="clientstatus" name="clientstatus">
                          <label class="mdl-textfield__label" for="clientstatus">Status</label>
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

                  <input type="button" value="Salvar" id="add" name="add" />

                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb">Checar</button>
                  
              </div>


              </form>


              <div class="mdl-card__menu">

      
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

<script type="text/javascript" language="javascript">

    $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#add').click(function() {

            var data = $('#atten-add').serialize();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '../includes/atten_add.php',
                async: true,
                data: data,
                success: function(response) {
                    location.reload();
                }
            });

            return false;
        });

</script>




<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>