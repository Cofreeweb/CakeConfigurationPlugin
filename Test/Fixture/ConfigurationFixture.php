<?php
/**
 * ConfigurationFixture
 *
 */

App::uses('SQLTestFixture', 'Fixturize.TestSuite/Fixture');


class ConfigurationFixture extends SQLTestFixture 
{
/**
 * Es necesario indicar el plugin para el SQLTestFixture
 */
  public $plugin = 'Configuration';


/**
 * El nombre del fichero SQL, situado en el directorio Fixtures/SQL
 */
  public $file = 'configurations.sql';

}
