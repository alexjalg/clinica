<div class="users index">
	<h2>Users</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>name</th>
			<th>username</th>
			<th>email></th>
			<th class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>
			<?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
			    <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
			    <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?>
		    <?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('New User', array('action' => 'add')); ?></li>
	</ul>
</div>

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
