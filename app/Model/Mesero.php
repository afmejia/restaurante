<?php
class Mesero extends AppModel {

    // Este es un nombre por convención
    public $validate = array(
        'dni' => array(
            'notBlank' => array(
                'rule' => 'notBlank'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo números'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'El DNI ya se encuentra en uso'
            )
        ),
        'nombre' => array(
            'rule' => 'notBlank'
        ),
        'apellido' => array(
            'rule' => 'notBlank'
        ),
        'telefono' => array(
            'notBlank' => array(
                'rule' => 'notBlank'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo números'
            )
        )
    );
}
 ?>
