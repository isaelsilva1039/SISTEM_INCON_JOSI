<div class="main-content">
    <div class="section__content section__content--p30 ">
        <div class="form-group">
        </div>
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-6 aumento">
                    <div class="card aumento">
                        <div class="card-header">Erros do Aereo</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Lançar erros por objetos
                                </h3>
                            </div>
                            <hr>
                            <form action="../../model/routePedidoAuditotiaErroObjeto.php" method="post" novalidate="novalidate">
                                <input id="pedido" name="pedido" hidden type="text" placeholder="" value="<?php echo $pedido ?>" class="form-control" required>

                                <div class="form-group">
                                    <label for="usuario_logado" class="control-label mb-1">usuario</label>
                                    <input id="usuario_logado" disabled name="usuario_logado" type="text" placeholder="" value="<?php echo $_SESSION['usuario'] ?>" class="form-control" required>
                                </div>

                                <div class="form-group has-success">
                                    <div class="form-group">
                                        <label for="i0_filial" class="control-label mb-1">Filial</label>
                                        <input id="i0_filial" disabled name="i0_filial" type="text" placeholder="" value="<?php echo $filial ?>" class="form-control" required>
                                        <input id="i0_filial" hidden name="i0_filial" type="text" placeholder="" value="<?php echo $filial ?>" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="codigo_auditor" class="control-label mb-1">Codigo Auditor</label>
                                                <input id="data" name="codigo_auditor" type="numbler" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="" autocomplete="cc-exp" required>
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="objeto" class="control-label mb-1">Objeto</label>
                                            <div class="input-group">
                                                <input name="objeto" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off" required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="validade_errada" class="control-label mb-1">validade errada</label>
                                            <div class="input-group">
                                                <input id="" name="validade_errada" required placeholder="" type="date" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="validade_coreta" class="control-label mb-1">validade correta</label>
                                            <div class="input-group">
                                                <input id="validade_coreta" name="validade_coreta" required placeholder="" type="date" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="qtd_pedida" class="control-label mb-1">Qtd pedida</label>
                                            <div class="input-group">
                                                <input id="qtd_pedida" name="qtd_pedida" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="qtd_encontrada" class="control-label mb-1">Qtd Encontrada</label>
                                            <div class="input-group">
                                                <input id="qtd_encontrada" name="qtd_encontrada" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="codigo_operador" class="control-label mb-1">Codigo Operador</label>
                                            <div class="input-group">
                                                <input id="codigo_operador" name="codigo_operador" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="tipo_movimento" class="control-label mb-1">Tipo Movimento</label>
                                            <div class="input-group">
                                                <select class="form-control" name="tipo_movimento" aria-label="Default select example">
                                                    <option selected disabled>Selecione
                                                    </option>
                                                    <option>Validade</option>
                                                    <option>Quantidade</option>
                                                    <option>Objeto Trocado </option>
                                                    <option>Internado Errado</option>
                                                    <option>Produto não consta no Objeto</option>
                                                    <option>Produto não tem no objeto</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="data" class="control-label mb-1">Data Auditoria</label>
                                            <div class="input-group">
                                                <input id="" name="data" required placeholder="" type="date" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="valor_desconto" class="control-label mb-1">Valor Desconto</label>
                                            <div class="input-group">
                                                <input id="valor_desconto" name="valor_desconto" required placeholder="" type="numbler" required class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <br><br><br>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" name="salva" value="salva" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Inserir</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>
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
                    <th></th>
                    <th>Filial</th>
                    <th>Codigo Do auditor</th>
                    <th>Objeto</th>
                    <th>Validade Errada</th>
                    <th>Validade Correta</th>
                    <th>Qtd Pedida</th>
                    <th>Qtd Encontrada</th>
                    <th>Cod Operador</th>
                    <th>Tipo</th>
                    <th>Data auditoria</th>
                    <th>Valor Desconto</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($arrayCon = $exibirRelatorio->pegarPedido($pedido) as $key) :
                ?>
                    <tr class="tr-shadow">
                        <th></th>
                        <td class="status--process"><?php echo $key['pedido'] ?></td>
                        <td class="status--process"><?php echo $key['i0_filial'] ?></td>
                        <td class="status--process"><?php echo $key['codigo_auditor'] ?></td>
                        <td class="status--process"><?php echo $key['objeto'] ?></td>
                        <td class="status--process"><?php echo $key['validade_errada'] ?></td>
                        <td class="status--process"><?php echo $key['validade_correta'] ?></td>
                        <td class="status--process"><?php echo $key['qtd_pedido'] ?></td>
                        <td class="status--process"><?php echo $key['qtd_encontrado'] ?></td>
                        <td class="status--process"><?php echo $key['codigo_operador'] ?></td>
                        <td class="status--process"><?php echo $key['tipo_movimento'] ?></td>
                        <td class="status--process"><?php echo $key['data'] ?></td>
                        <td class="status--process"><?php echo $key['valor_desconto'] ?></td>
                        <td class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="zmdi zmdi-delete"></i>
                        </td>
                    <?php endforeach ?>
                    <hr>
                    <div class="table-data-feature">
                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button> -->

                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More"> -->
                        <!-- <i class="zmdi zmdi-more"></i> -->
                        <!-- </button> -->
                    </div>
                    </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>