<!-- INÍCIO do modal de inclusão de grupo -->
<div class="modal fade" id="modcligrnew" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Novo Grupo de Usuários</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="../functions/usergr_create.php" style="display: inline;" method="post">
                
                <div class="modal-body">
                    <p>Defina um nome e descrição para o grupo e selecione o que os usuários deste grupo poderão VER e EDITAR. (O seletor colorido indica que este grupo terá a permissão sinalizada)</p>
                    <p>Este grupo de usuário estará vinculado e ficará disponível apenas para <strong>sua empresa</strong>.</p>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="usergrname" class=" form-control-label">Nome do Grupo</label>
                                <input type="text" name="usergrname" id="usergrname" placeholder="Informe o nome do grupo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="usergrdesc" class=" form-control-label">Descrição do Grupo</label>
                                <textarea name="usergrdesc" id="usergrdesc" rows="12" placeholder="Informe uma descrição para o grupo. Esta informação NÃO aparece para os clientes." class="form-control"></textarea>
                            </div>
                        </div>
                    
                        <!-- INÍCIO dos Swichs de Permissões de Visualização -->
                        <div class="col-lg-4 col-sm-6">
                            <p>VER</p>
                            
                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewdashboard" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewdashboard">Painel</label>
                            </div>
                            
                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewaccount" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewaccount">Minha Conta</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewattendance" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewattendance">Atendimentos</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewcompany" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewcompany">Empresa</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewclients" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewclients">Clientes</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewusers" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewusers">Usuários</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewsystem" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewsystem">Sistema</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewsearch" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewsearch">Pesquisa</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewmodules" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewmodules">Módulos</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-success mr-3">
                                    <input type="checkbox" class="switch-input" checked="true" name="viewperms" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="viewperms">Permissões</label>
                            </div>

                        </div>
                        <!-- FIM dos Swichs de Permissões de Visualização -->


                        <!-- INÍCIO dos Swichs de Permissões de Edição -->
                        <div class="col-lg-4 col-sm-6">
                            <p>EDITAR</p>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editdashboard" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editdashboard">Painel</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editaccount" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editaccount">Minha Conta</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editattendance" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editattendance">Atendimentos</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editcompany" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editcompany">Empresa</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editclients" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editclients">Clientes</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editusers" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editusers">Usuários</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editsystem" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editsystem">Sistema</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editmodules" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editmodules">Módulos</label>
                            </div>

                            <div class="form-group">
                                <label class="switch switch-3d switch-warning mr-3">
                                    <input type="checkbox" class="switch-input" name="editperms" value="1">
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                <label for="editperms">Permissões</label>
                            </div>

                        </div>
                        <!-- FIM dos Swichs de Permissões de Edição -->

                    </div>
                    
                    <input type="hidden" id="usergrcomp" name="usergrcomp" value="<?php echo $_SESSION['UserCompany']; ?>">

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