<!-- INÍCIO do modal de inclusão de grupo -->
<div class="modal fade" id="modcligrnew" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Cadastrar Novo Grupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="../functions/cligr_create.php" style="display: inline;" method="post">
                
                <div class="modal-body">
                    <p>Este grupo estará vinculado à <strong>sua empresa</strong>.</p>
                    <br>
                    <div class="row form-group">
                        <div class="col-12">
                            <label for="cligrname" class=" form-control-label">Nome do Grupo</label>
                        </div>
                        <div class="col-12">
                            <input type="text" name="cligrname" id="cligrname" placeholder="Informe o nome do grupo" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12">
                            <label for="cligrdesc" class=" form-control-label">Descrição</label>
                        </div>
                        <div class="col-12">
                            <textarea name="cligrdesc" id="cligrdesc" rows="9" placeholder="Informe uma descrição para o grupo. Esta informação NÃO aparece para os clientes." class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <input type="hidden" id="cligrcomp" name="cligrcomp" value="<?php echo $_SESSION['UserCompany']; ?>">

                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- FIM do modal de inclusão de grupo -->



<!-- INÍCIO da Confirmação de Remoção -->
<div class="modal fade" id="modcligrconfirm" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Confirmar Remoção de Grupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Esta ação removerá o módulo <strong>PERMANENTEMENTE</strong>.</p>
                <br>
                <p>Este módulo e suas funções não estarão mais acessíveis para os usuários que possuem permissão para utiliza-lo. Se preferir é possível DESATIVA-LO temporáriamente modificando seu status.</p>
                <br>
                <p><strong>ATENÇÃO:</strong> Não é possível desfazer esta ação.</p>
                <br>
                <p>Você tem certeza que deseja <strong>remover este módulo?</strong></p>
                <p>NOME: <?php echo $mod['modname']; ?></p>
                <p>ID: <?php echo $mod['modid']; ?></p>
                <p>DIRETÓRIO: <?php echo $mod['modpath']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                
                <form action="/functions/mod_remove.php" style="display: inline;" method="post">
                    <input type="hidden" id="modtoremid" name="modtoremid" value="<?php echo $mod['modid']; ?>">
                    <input type="hidden" id="modtoremdir" name="modtoremdir" value="<?php echo $mod['modpath']; ?>">
                    <button type="submit" class="btn btn-primary">Remover</button>
                </form>


            </div>
        </div>
    </div>
</div>
<!-- FIM da Confirmação de Remoção -->