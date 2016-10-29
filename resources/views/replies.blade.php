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
    <script src= <?= asset("js/jquery.js") ?> ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?= asset("js/bootstrap.min.js") ?>></script>

   
<style type="text/css">
              
    body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}

html {
  background: url(<?=asset("img/SET.png")?>) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
          </style>  




   


 <script src=<?=asset("js/angular.min.js") ?>></script>
<script src=<?=asset('js/angular-animate.min.js') ?>></script>
        <script src=<?=asset('js/angular-aria.min.js') ?>></script>
        <script src=<?=asset('js/angular-material.min.js') ?>></script>
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.20/angular-messages.js"></script>
        <script src=<?=asset('js/angularinit.js') ?> ></script>



</head>
<body ng-app="MyApp" >












<div class="container">

 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcore">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navcore">
                <ul class="nav navbar-nav">
                    <li style="margin-top:15px; color:white;">
                     WELCOME   {{ Auth::user()->name }}
                    </li>
                    <li>
                        <a href="mysubmissions">My submissions</a>
                    </li>

                    <li>
                        <a href="givechallenge">Give a Challenge</a>
                    </li>
                    <li>
                        <a href="startprojects">Solve a Challenge</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     <li><a href="/forum" >Discussion Forum</a>  </li>
                    <li><a href="/postaquestion" >Post a Question </a>  </li>
                        <li><a href="#"><img src=<?=asset("img/notify.png") ?> style="width:50px;" /></a></li> 
                        <li>
                        <div class="dropdown">
                            <a   class=" dropdown-toggle"   data-toggle="dropdown" >
                                <img style="margin-top:15px;width:50px;" id="profile" class="img-circle" src=<?=asset("img/businessman.png") ?> />
                            </a> 
                            <ul class="dropdown-menu">
                                
                                <li><a href="#">Edit profile</a></li>
                                <li><a href="logout" >Logout</a></li>
                            </ul>

                        </div>
                        </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br>
<br>
<br>

<!--<div class="well">
	<div class="media">
		<div class="media-body">
			<h1 class="media-heading">{{$question->question}}hj</h1>
			<p class="text-right">BY: {{$question->user->name}}</p>
			<p>{{$question->description}}</p>
			<ul class="list-inline list-unstyled">
				<li><i class="glyphicon glyphicon-calendar"></i>{{$question->created_at->diffforHumans()}}</li>
				<li> </li>
		

			</ul>
		</div>
	</div>
</div>
-->
<md-card>
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline"><a href="/forum/question/{{$question->slug}}" >{{$question->question}} </a></span>
            <p class="text-right">By: {{$question->user->name}}</p>
            <p>{{$question->description}}</p>
          </md-card-title-text>
          
         
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
        	<i class="glyphicon glyphicon-calendar"></i>{{$question->created_at->diffforHumans()}}
        </md-card-actions>
      </md-card> 
@forelse($replies->where('questions_id','=',$question->id) as $reply)
<!--<div class="well col-sm-10 push-right">
		<div class="media">
		<div class="media-body">
			
	
			<p>{{$reply->body}}</p>
			<p class="text-right">BY: {{$reply->user->name}}</p>
			<ul class="list-inline list-unstyled">
				<li><i class="glyphicon glyphicon-calendar"></i>{{$reply->created_at->diffforHumans()}}</li>
				<li> </li>
			</ul>
		</div>
	</div>

</div>-->

<md-card style="height:80px;">
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">{{$reply->body}} </span>
            <p >By: {{$reply->user->name}}</p>
           
          </md-card-title-text>
          
         
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
        	<i class="glyphicon glyphicon-calendar"></i>{{$question->created_at->diffforHumans()}}
        </md-card-actions>
      </md-card>
       
@empty

@endforelse
<form class="col-sm-12" name="replyform" method="POST" action="http://localhost:8000/forum/question/saveReply">

<input type="text" class="form-control" name="comment" placeholder="Reply">
{{ csrf_field() }}
<input type="hidden" class="form-control" name="slug" value="{{ $question->slug }}" >
<br>                 
<input type="submit" class="btn" >

</form>



</body>




</html>