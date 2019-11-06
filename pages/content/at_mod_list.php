<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Módulos Instalados</h3>
            
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="grupo">
                            <option selected="selected">Categoria</option>
                            <option value="">Utilidades</option>
                            <option value="">Segurança</option>
                            <option value="">Relacionamento</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="tempo">
                            <option selected="selected">Instalados</option>
                            <option value="">Hoje</option>
                            <option value="">Até 7 dias</option>
                            <option value="">Até 30 dias</option>
                            <option value="">Até 365 Dias</option>
                            <option value="">Todos os períodos</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filtros
                    </button>
                </div>

                <div class="table-data__tool-right">
                    <form action="/pages/mod_inst.php">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit">
                            <i class="zmdi zmdi-plus"></i>Instalar MOD
                        </button>
                    </form>

                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Atualizar</option>
                            <option value="">Todos</option>
                            <option value="">Selecionados</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>

            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">

                    <thead>
                        <tr>
                            <th>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </th>
                            <th>nome</th>
                            <th>autor</th>
                            <th>instalado</th>
                            <th>categoria</th>
                            <th>ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        // Monta os parâmetros da query
                        $sql = "SELECT * FROM `at_modules` WHERE (`modstatus` = 1)";

                        // Monta a query para execução
                        $mods = mysqli_query($mysql, $sql);

                        // Executa o loop com a query
                        foreach ($mods as $mod) { ?>
                            
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td><?php echo $mod['modname']; ?></td>
                            <td><span class="block-email"> <?php echo $mod['modauthor']; ?> </span></td>
                            <td><?php echo $mod['modinst']; ?></td>
                            <td><?php echo $mod['status'];?> </td>
                            <td>
                                <div class="table-data-feature">

                                    <button class="item" title="Iniciar" name="iniciar" value='run' type="submit">
                                        <i class="zmdi zmdi-caret-right-circle"></i>
                                    </button>

                                    <button class="item" title="Atualizar" name="atualizar" value='update' type="submit">
                                        <i class="zmdi zmdi-refresh"></i>
                                    </button>

                                    <button class="item" data-toggle="modal" data-target="#confirmar" title="Remover" name="function" value='delete' type="submit">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>

                        <tr class="spacer"></tr>

                        <?php } ?>
                        






                    </tbody>

                </table>
            </div>
            <!-- END DATA TABLE -->
        	
        </div>
    </div>
</div>