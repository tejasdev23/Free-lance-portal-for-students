 var MyApp= angular.module('MyApp',['ngMaterial']).run(function()
        {console.log("My app is ready");
                 

                 });

 MyApp.controller('formController',['ngMaterial','ngMessages'])
 {
 	console.log('controller is up');
 };

  MyApp.config(function($mdThemingProvider) {
  $mdThemingProvider.theme('altTheme').primaryPalette('purple')

});