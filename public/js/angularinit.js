 var MyApp= angular.module('MyApp',['ngMaterial','ngMessages']).run(function()
        {console.log("My app is ready");
                 

                 });
 MyApp.controller('formCtrl',function($scope)
 {


console.log("ho ja bhai rulaega kya");

 });

  MyApp.config(function($mdThemingProvider) {
  $mdThemingProvider.theme('altTheme').primaryPalette('purple')

});