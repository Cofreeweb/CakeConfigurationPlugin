<?php
/**
 * ConfigComponent
 * 
 *
 * @package configuration.controller.component
 **/

App::uses('Component', 'Controller');

class ConfigComponent extends Component 
{

/**
 * Llamado antes de beforeFilter del controller
 *
 * Se encarga de setear en Configure la configuración del web
 *
 * @param Controller $Controller 
 * @return void
 */
  function initialize( Controller $Controller) 
  {
    // Lee la información de la base de datos
    $config = ClassRegistry::init( 'Configuration.Configuration')->readConfig();
    
    // Setea el theme en el controller para que la aplicación tome las vistas de ese theme
    $theme = $config ['Configuration']['theme'];
    $Controller->theme = $theme;
  }

}
?>