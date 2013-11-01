<?php echo $this->Html->css('signin') ?>

<?php echo $this->Form->create('User', array(
    'inputDefaults' => array( 'label' => false, 'div' => false),'class'=>'form-signin')) ?>
    <h2 class="form-signin-heading">Iniciar sesi&oacute;n</h2>
    <?php echo $this->Form->input('username',array('class'=>'form-control','placeholder'=>'Introduzca su nombre de usuario.', 'autofocus'=>true)) ?>
    <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Ingrese su contraseña de la cuenta.')) ?>
<?php echo $this->Form->button('Acceder', array('type' => 'submit', 'class'=>'btn btn-lg btn-primary btn-block')) ?>
 