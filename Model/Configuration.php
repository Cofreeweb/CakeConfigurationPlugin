<?php
App::uses('ConfigurationAppModel', 'Configuration.Model');
/**
 * Configuration Model
 *
 */
class Configuration extends ConfigurationAppModel 
{

  public function beforeSave()
  {
    $record = $this->find( 'first');
    
    if( $record)
    {
      if( $this->id != $record [$this->alias][$this->primaryKey])
      {
        return false;
      }
    }
    
    return true;
  }

/**
 * Lee la información de la configuración y la coloca en Configure
 *
 * @return array
 */
  public function readConfig()
  {
    App::uses( 'Theme', 'Configuration.Lib');
    
    $record = $this->find( 'first');
    
    // Copia la información
    $config = $record;
    
    // Coloca la información del theme en el mismo key theme
	  $theme_info = Theme::getInfo( $config ['Configuration']['theme']);
	  $config ['Configuration']['theme'] = $theme_info;
	  
    // Setea la información en Configure
	  Configure::write( 'Configuration', $config ['Configuration']);
    
    // Devuelve el registro de la base de datos
    return $record;
  }
  
  
/**
 * Guarda los datos de la configuración
 * Se encarga de asegurar que solo hay un registro de configuración en toda la collection
 *
 * @param string $data 
 * @return boolean
 */
  public function saveData( $data)
  {
	  $record = $this->find( 'first');
    
    if( isset( $record [$this->alias][$this->primaryKey]))
    {
      $this->id = $record [$this->alias][$this->primaryKey];
    }
    
    return $this->save( $data);
  }
}
