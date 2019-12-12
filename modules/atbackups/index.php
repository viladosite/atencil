<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            


            <!-- DATA TABLE -->
            <h3 class="title-4 m-b-35">AT Backups</h3>
            <h3 class="title-5 m-b-35">Backups Cadastrados</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="grupo">
                            <option selected="selected">Por Website</option>
                            <option value="">Website 1</option>
                            <option value="">Website 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="tempo">
                            <option selected="selected">Por Data</option>
                            <option value="">Hoje</option>
                            <option value="">Até 7 dias</option>
                            <option value="">Até 30 dias</option>
                            <option value="">Até 365 Dias</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filtrar
                    </button>
                </div>

                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit" data-toggle="modal" data-target="#atbkpcreate">
                        <i class="zmdi zmdi-plus"></i>Criar Backup
                    </button>

                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Excluir</option>
                            <option value="">Todos</option>
                            <option value="">Marcados</option>
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
                            <th>data</th>
                            <th>website</th>
                            <th>ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        // Monta os parâmetros da query
                        $sql = "SELECT * FROM `at_mod_bkps`";

                        // Monta a query para execução
                        $bkps = mysqli_query($mysql, $sql);

                        // Executa o loop com a query
                        foreach ($bkps as $bkp) { ?>
                            
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <span class="block-email">
                                    <?php echo $bkp['bkp_name']; ?>
                                </span>
                            </td>
                            <td><?php echo $bkp['bkp_date']; ?></td>
                            <td><?php echo $mod['bkp_website']; ?></td>
                            <td>
                                <div class="table-data-feature">

                                    <form action="" method="post">
                                        <button class="item" title="Baixar" name="baixar" value='baixar' type="submit">
                                            <i class="zmdi zmdi-caret-right-circle"></i>
                                        </button>
                                        <input type="hidden" id="bkpid" name="bkpid" value="<?php echo $bkp['bkp_id']; ?>">
                                        <input type="hidden" id="bkpdir" name="bkpdir" value="<?php echo $bkp['bkp_path']; ?>">
                                    </form>

                                    <form action="" method="post">
                                        <button class="item" title="Remover" name="remover" value='remover' type="submit">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                        <input type="hidden" id="bkpid" name="bkpid" value="<?php echo $bkp['bkp_id']; ?>">
                                        <input type="hidden" id="bkpdir" name="bkpdir" value="<?php echo $bkp['bkp_path']; ?>">
                                    </form>

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
<!-- END MAIN CONTENT-->