 var MyApp= angular.module('MyApp',['ngMaterial']).run(function()
        {console.log("My app is ready");
                 

                 });

  MyApp.config(function($mdThemingProvider) {
  $mdThemingProvider.theme('altTheme').primaryPalette('purple')

});