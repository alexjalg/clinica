<div style="text-align: right;">
    <?php echo $this->Html->link('Nuevo Cliente', array('action' => 'add'), array('class' => 'btn btn-success btn-sm')) ?>
</div>
<div>    
    <fieldset>
        <legend>CLIENTES</legend>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>RUC</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?php echo $cliente['Cliente']['cli_ruc'] ?></td>
                        <td><?php echo $cliente['Cliente']['cli_nombre'] ?></td>
                        <td><?php echo $cliente['Cliente']['cli_telefono'] ?></td>
                        <td><?php echo $cliente['Cliente']['cli_direccion'] ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Acciones</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <?php echo $this->Html->link('Editar', array('action' => 'edit', $cliente['Cliente']['id'])) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $cliente['Cliente']['id']), array('confirm' => 'Confirmar eliminación')) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('Ver', array('action' => 'view', $cliente['Cliente']['id'])) ?>
                                    </li>                                 
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table> 
        <?php echo $this->Paginator->numbers(array('first' => 'First page')) ?>
        <br />
        <?php echo $this->Paginator->counter(array('format' => 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')) ?> 
    </fieldset>
</div>

