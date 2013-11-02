<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Jose
 */
class Cliente extends AppModel {

    //put your code here
    public $validate = array(
        'cli_ruc' => array(
            'Ingrese el número de RUC.' => array(
                'rule' => 'notEmpty',
                'message' => 'Ingrese el número de RUC.'
            )/*,
              'EL RUC ya ha sido registrado.' => array(
                'rule' => 'isUnique',
                'message' => 'EL RUC ya ha sido registrado.'
            )*/
        ),
        'cli_nombre' => array(
            'Ingrese el nombre completo.' => array(
                'rule' => 'notEmpty',
                'message' => 'Ingrese el nombre completo.'
            )
        ),
        'cli_telefono' => array(
            'Escriba el número telefonico' => array(
                'rule' => 'notEmpty',
                'message' => 'Escriba el número telefonico'
            )
        ),
        'cli_direccion' => array(
            'Ingrese la dirección' => array(
                'rule' => 'notEmpty',
                'message' => 'Ingrese la dirección'
            )
        )
    );

}

?>
