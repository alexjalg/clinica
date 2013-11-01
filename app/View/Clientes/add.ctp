<div style="text-align: right;">
    <?php echo $this->Html->link('Regresar', array('action' => 'index'), array('class'=>'btn btn-success btn-sm')) ?>
</div>
<?php echo $this->Form->create('Cliente', array(
    'inputDefaults' => array( 'label' => false, 'div' => false))) ?>
<fieldset>
    <legend>Clientes</legend>
    <div class="form-group">
        <label for="numruc">RUC</label>
        <?php echo $this->Form->input('cli_ruc', array('class' => 'form-control', 'id' => 'numruc', 'placeholder' => 'Ingrese número de RUC')) ?>
    </div>

    <div class="form-group">
        <label for="nom">Nombre</label>
        <?php echo $this->Form->input('cli_nombre', array('class' => 'form-control', 'id' => 'nom', 'placeholder' => 'Ingrese mombre')) ?>
    </div>

    <div class="form-group">
        <label for="tel">Tel&eacute;fono</label>
        <?php echo $this->Form->input('cli_telefono', array('class' => 'form-control', 'id' => 'tel', 'placeholder' => 'Ingrese número de teléfono')) ?>
    </div>
    
    <div class="form-group">
        <label for="dir">Direcci&oacute;n</label>
        <?php echo $this->Form->input('cli_direccion', array('class' => 'form-control', 'id' => 'dir', 'placeholder' => 'Ingrese dirección')) ?>
    </div>

</fieldset>
<?php echo $this->Form->button('Registrar', array('type' => 'submit', 'class'=>'btn btn-primary')) ?>

