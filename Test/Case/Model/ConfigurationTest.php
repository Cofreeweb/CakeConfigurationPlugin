<?php
App::uses('Configuration', 'Configuration.Model');

/**
 * Configuration Test Case
 *
 */
class ConfigurationTest extends CakeTestCase 
{

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
    'plugin.configuration.configuration'
	);
    
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Configuration = ClassRegistry::init('Configuration.Configuration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Configuration);

		parent::tearDown();
	}

/**
 * Comprueba la lectura de la configuración y su escritura en Configure
 *
 * @return void
 */
  public function testReadConfig()
  {
    $data = $this->Configuration->readConfig();
    $config = Configure::read( 'Configuration');
    
    $this->assertTrue( is_array( $config ['theme']));
    $this->assertTrue( $data ['Configuration']['site_title'] == $config ['site_title']);
  }
	
/**
 * Recoge la información de un theme
 *
 * @return void
 */
	public function testGetInfo()
	{
	  App::uses( 'Theme', 'Configuration.Lib');
	  $theme = 'Basic';
	  $info = Theme::getInfo( $theme);
	  $info ['key'] = $theme;
	  $this->assertNotEqual( $info, false);
	}
	
	public function testThemePath()
	{
	  App::uses( 'Theme', 'Configuration.Lib');
	  $themes = Theme::getList();
	}
  
  
  public function testSaveData()
  {
    $data = array(
        'site_title' => 'Un día en las carreras ' . rand( 0, 9999),
        'site_description' => 'Descripcion del website' . rand( 0, 9999)
    );
    
    $this->Configuration->saveData( $data);
    $configuration = $this->Configuration->find( 'first');
    
    $result = $data ['site_title'] == $configuration ['Configuration']['site_title'] && $data ['site_description'] == $configuration ['Configuration']['site_description'];
    $this->assertEqual( $result, true);
  }
  
  
}
