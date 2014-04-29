<?php
App::uses('ConfigurationAppController', 'Configuration.Controller');
/**
 * Configurations Controller
 *
 */
class ConfigurationsController extends ConfigurationAppController 
{
  public function config()
  {
    $this->set( array(
		    'languages' => Configure::read( 'Config.languages'),
		    '_serialize' => array(
		        'languages',
		    )
		));
  }
  
  public function admin_edit()
  {	  
    $_serialize = array();
    
    if( $this->request->is( 'post'))
    {
      if( $this->Configuration->saveData( $this->request->data ['Configuration']))
      {
        $this->set( 'success', true);
        $_serialize [] = 'success';
      }
    }
    else
    {
      $config = $this->Configuration->find( 'first');
      $this->set( 'config', $config);
      $_serialize [] = 'config';
      
      // Lista de themes
      App::uses( 'Theme', 'Configuration.Lib');
  	  $themes = Theme::getList();
  	  $this->set( compact( 'themes'));
      $_serialize [] = 'themes';
    }
    
    $this->set( compact( '_serialize'));
  }

}
