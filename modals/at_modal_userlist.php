<!-- INÍCIO da Confirmação de Remoção -->
<div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Confirmar Remoção</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Esta ação apagará o usuário <strong>PERMANENTEMENTE</strong>.</p>
                <br>
                <p>O usuário não terá mais acesso ao sistema e não será capaz de recuperar o acesso à menos que um novo usuário seja criado.</p>
                <br>
                <p><strong>ATENÇÃO:</strong> Não é possível desfazer esta ação.</p>
                <br>
                <p>Você tem certeza que deseja <strong>remover este usuário?</strong></p>
                <p>ID: <?php echo $idtodel; ?></p>
                <p>LOGIN: <?php echo $logintodel; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                
                <form action="/functions/user_delete.php" style="display: inline;" method="post">
                    <input type="hidden" id="usertodel" name="usertodel" value="<?php echo $idtodel; ?>">
                    <button type="button" class="btn btn-primary">Remover</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- FIM da Confirmação de Remoção -->