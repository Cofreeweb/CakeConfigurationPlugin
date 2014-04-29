<?php

$config ['Access'] = array(
    'configuration' => array(
      'name' => __d( 'admin', 'Configuración'),
      'urls' => array(
          array(
              'admin' => true,
              'plugin' => 'configuration',
              'controller' => 'configurations',
              'action' => 'edit'
          ),
      ),
      'alwaysLinks' => array(
          array(
              'label' => __d( 'admin', 'Configuración del website'),
              'url' => '#/config'
          )
      ),
    )
);
