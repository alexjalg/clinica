<div style="text-align: right;">
    <?php echo $this->Html->link('Nuevo Usuario', array('action' => 'add'), array('class' => 'btn btn-success btn-sm')) ?>
</div>
<div>    
    <fieldset>
        <legend>USUARIOS</legend>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['User']['name']; ?>&nbsp;</td>
                        <td><?php echo $user['User']['username']; ?>&nbsp;</td>
                        <td><?php echo $user['User']['email']; ?>&nbsp;</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Acciones</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <?php echo $this->Html->link('Editar', array('action' => 'edit', $user['User']['id'])) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $user['User']['id']), array('confirm'=>'Confirmar eliminación')) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('Ver', array('action' => 'view', $user['User']['id'])) ?>
                                    </li>                                 
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <ul class="pagination">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="disabled"><a href="#">2 </a></li>
            <li class="disabled"><a href="#">&gneq;</a></li>
        </ul>
    </fieldset>
</div>
