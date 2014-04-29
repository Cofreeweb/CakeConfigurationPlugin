<?php

/**
* 
*/
class Theme
{
  public static function getList()
  {
    App::uses('Folder', 'Utility');
    $path = $file = APP . 'View' .DS. 'Themed';
    $Folder = new Folder( $path);
		list( $dirs, $files) = $Folder->read(false, true);
    
    $return = array();
    
    foreach( $dirs as $dir)
    {
      $info = self::getInfo( $dir);
      $return [] = array(
          'id' => $dir,
          'name' => $info ['name']
      );
    }
    
    return $return;
  }
  
  
  public static function getInfo( $theme)
  {
    $file = APP . 'View' .DS. 'Themed' .DS . $theme .DS. 'info.json';
    
    if( file_exists( $file))
    {
      $json = file_get_contents( $file);
      $data = json_decode( $json, true);
      
      return $data;
    }
    
    return false;
  }
}
