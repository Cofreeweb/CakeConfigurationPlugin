<?php 
class ConfigurationSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	
	public $configurations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'site_title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'El título del site', 'charset' => 'utf8'),
		'site_description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'La descripción breve del site', 'charset' => 'utf8'),
		'google_analytics' => array('type' => 'string', 'null' => true, 'default' => null, 'comment' => 'El código de Google Analytics'),
		'enable_comments' => array('type' => 'boolean', 'null' => true, 'default' => 1, 'comment' => 'Permitir comentarios en todos los contenidos que los tengan'),
		'comments_moderate' => array('type' => 'boolean', 'null' => true, 'default' => 1, 'comment' => 'Comentarios moderados'),
		'allow_public_comments' => array('type' => 'boolean', 'null' => true, 'default' => 1, 'comment' => 'Permitir comentarios públicos'),
		'page_format_titles' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'El formato de los títulos de las páginas', 'charset' => 'utf8'),
		'content_format_titles' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'El formato de los títulos de las páginas dinámicas', 'charset' => 'utf8'),
		'theme' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'El theme', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

}
