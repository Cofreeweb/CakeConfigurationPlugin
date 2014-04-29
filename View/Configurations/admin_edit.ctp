<form ng-submit="submit()">
  <?= $this->Form->input( 'Configuration.site_title', array(
      'ng-model' => 'config.Configuration.site_title',
      'label' => __d( 'admin', 'Título del website'),
  )) ?>  
  
  <?= $this->Form->input( 'Configuration.theme', array(
      'type' => 'select',
      'ng-model' => 'config.Configuration.theme',
      'ng-options' => 'a.id as a.name for a in themes',
      'label' => __d( 'admin', 'Plantilla'),
  )) ?>
  
  <?= $this->Form->input( 'Configuration.site_description', array(
      'type' => 'textarea',
      'ng-model' => 'config.Configuration.site_description',
      'label' => __d( 'admin', 'Descripción'),
  )) ?>
  
  <?= $this->Form->input( 'Configuration.google_analytics', array(
      'type' => 'text',
      'ng-model' => 'config.Configuration.google_analytics',
      'label' => __d( 'admin', 'Google Analytics'),
  )) ?>
  
  <?= $this->Form->input( 'Configuration.enable_comments', array(
      'type' => 'checkbox',
      'ng-model' => 'config.Configuration.enable_comments',
      'label' => __d( 'admin', 'Permitir comentarios en los contenidos'),
  )) ?>
  
  <input type="submit" id="submit" value="Submit" />
</form>