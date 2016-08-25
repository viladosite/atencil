<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
//conexão com o banco
// Faz a conexão com o banco
require "../auth/at_connect.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UserPermLvl'] >= $perm_view_clients):
?>


<!-- Início do conteúdo da página -->



<!-- Início do Grid -->
<div class="mdl-grid">
  
    <div class="mdl-cell mdl-cell--12-col">
        <div id="atd_title">
        <h3>Novo Usuário</h3>
        </div>

    </div>

    <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--8-col-tablet">
        
        <!-- Início do Card -->
          <div class="mdl-card mdl-shadow--4dp at-card at-cardatd" >

              <div class="mdl-card__title">
                <span>Usuario 1</span>
              </div>

              <form id="atten-add" action="../pages/users_created.php" method="post">

              <div class="mdl-card__supporting-text">

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="userid" name="userid">
                          <label class="mdl-textfield__label" for="userid">ID</label>
                          <span class="mdl-textfield__error">Somente Numeros!</span>
                      </div>


                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="userlogin" name="userlogin">
                          <label class="mdl-textfield__label" for="userlogin">Usuário</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="password" id="userpass" name="userpass">
                          <label class="mdl-textfield__label" for="userpass">Senha</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="userfname" name="userfname">
                          <label class="mdl-textfield__label" for="userfname">Nome Usuário</label>
                      </div>

                       <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="userlname" name="userlname">
                          <label class="mdl-textfield__label" for="userlname">Sobrenome Usuário</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="usermail" name="usermail">
                          <label class="mdl-textfield__label" for="usermail">Email</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="userpermlvl" name="userpermlvl">
                          <label class="mdl-textfield__label" for="userpermlvl">nivel permissão</label>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="companyid" name="companyid">
                          <label class="mdl-textfield__label" for="companyid">Empresa ID</label>
                          <span class="mdl-textfield__error">Somente Numeros!</span>
                      </div>

                      <div class="at_txtat mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="at_input mdl-textfield__input" type="text" id="userstatus" name="userstatus">
                          <label class="mdl-textfield__label" for="userstatus">Status</label>
                      </div>


              </div>

                  <div class="mdl-card__actions mdl-card--border">

                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-button--raised" id="cb"  type="submit">Salvar</button>
                  
                  </div>



              </form>

            

              </div>   

          </div>
        <!-- Fim do Card -->

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