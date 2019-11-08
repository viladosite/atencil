<!-- INÍCIO da Confirmação de Remoção -->
<div class="modal fade" id="modremconfirm" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Confirmar Remoção</h5>
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
                <p><?php echo $mod['modname']; ?></p>
                <p><?php echo $mod['modid']; ?></p>
                <p><?php echo $mod['modpath']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                
                <form action="/functions/mod_remove.php" style="display: inline;">
                    <input type="hidden" id="modtoremid" name="modtoremid" value='<?php $mod['modid'] ?>'>
                    <input type="hidden" id="modtoremdir" name="modtoremdir" value='<?php $mod['modpath'] ?>'>
                    <button type="submit" class="btn btn-primary">Remover</button>
                </form>


            </div>
        </div>
    </div>
</div>
<!-- FIM da Confirmação de Remoção -->