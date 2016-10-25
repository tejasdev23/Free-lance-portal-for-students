@extends('layouts.masters.main')

@section('page-content')

<div class="container">

@include('layouts.partials.navafter')
<br>
<br>
<br>

@forelse($questions as $question)
<!--<div class="jumbotron">
<md-card style="background-color: #342453; color:white;">
<h1>{{$question->question}}</h1>
<p>{{$question->description}}</p>
</md-card>
</div>-->

<div class="well">
	<div class="media">
		<div class="media-body">
			<h1 class="media-heading"><a href="http://localhost:8000/forum/question/{{$question->slug}}" >{{$question->question}} </a></h1>
			<p class="text-right">By: {{$question->user->name}}</p>
			<p>{{$question->description}}</p>
			<ul class="list-inline list-unstyled">
				<li><i class="glyphicon glyphicon-calendar"></i>{{$question->created_at->diffforHumans()}}</li>
				<li> | </li>
				@if($question->replies->count() > 0)
					 
					 <li><a href="http://localhost:8000/forum/question/{{$question->slug}}" >{{ $question->replies->count() }} comment(s) </a></li>
				@else
					<li> Be the first to Reply	</li> 
				@endif


			</ul>
		</div>
	</div>

@empty
	<p> No posts found</p>
</div>
@endforelse



</div>


