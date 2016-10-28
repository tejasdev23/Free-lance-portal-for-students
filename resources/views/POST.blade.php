
<!DOCTYPE html>
<html lang="en">
    
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME</title>
     <link rel="stylesheet" href=<?= asset('css/angular-material.css') ?> >
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet"> -->
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


 
        
          

    <link href=<?= asset("css/bootstrap.min.css") ?> rel="stylesheet">

    <link href=<?= asset("css/mystyles.css") ?> rel="stylesheet">
       <!-- jQuery -->
    <script src=<?= asset("js/jquery.js") ?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?= asset("js/bootstrap.min.js") ?>></script>

   
<style type="text/css">
              
               body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}
              html { 
  background: url("img/post1.jpeg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
          </style>




   


 <script src="js/angular.min.js"></script>
<script src='js/angular-animate.min.js'></script>
        <script src='js/angular-aria.min.js'></script>
        <script src='js/angular-material.min.js'></script>
     
       <script src='js/angularinit.js' ></script> 
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.20/angular-messages.js"></script>



</head>
<body ng-app="MyApp" ng-hide="false" >
@include('layouts.partials.navafter')


<br>
<br>
<br>

  @if(Session::has('success'))
    
     
    <div class="alert alert-success">{{ Session::get('success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
    
    @endif
    @if(Session::has('failure'))
    
      <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ Session::get('failure') }}</div>
    
    @endif


<div ng-app="MyApp" >
<div layout="row" layout-align="center center">
<div >
<md-card>
<form name="projectForm" ng-controller="formCtrl" action="postthat" method="POST">
 {{ csrf_field() }}
 <md-input-container class="md-block">
        <label>Title</label>
        <input md-maxlength="30"  required md-no-asterisk name="question" ng-model="project.description">
        <div ng-messages="projectForm.description.$error">
          <div ng-message="required">This is required.</div>
          <div ng-message="md-maxlength">The description must be less than 30 characters long.</div>
        </div>
      </md-input-container>

           <div layout="row">
        <md-input-container flex="50">
          <label>Name</label>
          <input md-maxlength="20" required name="name" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

        <md-input-container flex="50">
          <label>Project Type</label>
          <md-select name="type" ng-model="project.type" required>
            <md-option value="Application">Application</md-option>
            <md-option value="Website">Website</md-option>
          </md-select>
        </md-input-container>
      </div>

       <md-input-container class="md-block">
        <label>Email</label>
        <input required type="email" name="email" ng-model="project.clientEmail"
               minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />


        <div ng-messages="projectForm.clientEmail.$error" role="alert">
          <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
            Your email must be between 10 and 100 characters long and look like an e-mail address.
          </div>
        </div>
      </md-input-container>



        <md-input-container class="md-block">
          <label>Description</label>
          <textarea ng-model="user.biography" md-maxlength="150" name="description" rows="5" md-select-on-focus></textarea>
        </md-input-container>
         <div>
        <md-button type="submit" >Submit</md-button>
      </div>


</form>
 </md-card>
 </div>
</div>
<script>

   </script>






</body>




</html>



</form>