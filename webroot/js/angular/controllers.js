adminApp.controller( 'ConfigCtrl', function( $scope, $routeParams, $http) {
    
    $http.get( '/admin/configuration/configurations/edit.json').success(function( data){
      $scope.config = data.config;
      $scope.themes = data.themes;
      if( data.redirect) {
        window.location.href = data.redirect;
      }
    });
    
    
    $scope.submit = function( action){
      $http.post( '/admin/configuration/configurations/edit.json', $scope.config).success( function( data){
        
      })
    }
});
