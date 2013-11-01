<fieldset>

    <legend>Clientes</legend>

    <table class="table">
        <tbody>
            <tr>
                <td>RUC</td>
                <td><?php echo $cliente['Cliente']['cli_ruc'] ?></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><?php echo $cliente['Cliente']['cli_nombre'] ?></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><?php echo $cliente['Cliente']['cli_telefono'] ?></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><?php echo $cliente['Cliente']['cli_direccion'] ?></td>
            </tr>
        </tbody>
    </table>

</fieldset> 

<?php echo $this->Html->link('Regresar', array('action' => 'index')) ?>