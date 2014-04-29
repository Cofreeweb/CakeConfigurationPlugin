<?php
/**
 * ConfigHelper
 * 
 *
 * @package configuration.view.helper
 **/

class ConfigHelper extends AppHelper 
{
  
  public $helpers = array( 'Html', 'Form', 'Acl.Auth', 'Management.Inline', 'Angular.Seter');
  
/**
 * Carga el javascript necesario para la edición de las entries
 *
 * @return void
 */
  public function beforeLayout()
  { 
    if( $this->Auth->hasAccessKey( 'configuration') && !$this->request->is( 'ajax') && !$this->request->accepts( 'application/json'))
    {      
      $this->Html->script( array(
          '/configuration/js/angular/controllers.js',
          '/configuration/js/angular/config.js',
    	), array(
    	  'inline' => false,
    	  'block' => 'scriptBottom'
    	));
    }
  }
}