adminApp.config( ['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/config', {
        templateUrl: '/angular/template?t=Configuration.configurations/admin_edit',
        controller: 'ConfigCtrl'
      })
      
  }
]);