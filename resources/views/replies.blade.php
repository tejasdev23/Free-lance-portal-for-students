@extends('layouts.masters.main')

@section('page-content')

<div class="container">

@include('layouts.partials.navafter')
<br>
<br>
<br>

<div class="well">
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
@forelse($replies as $reply)
<div class="well">
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

</div>
@empty

@endforelse
<form name="replyform" method="POST" action="http://localhost:8000/forum/question/saveReply">

<input type="text" class="form-control" name="comment" placeholder="Reply">
{{ csrf_field() }}
<input type="hidden" class="form-control" name="slug" value={{$question->slug}} >                 
<input type="submit" class="btn" >

</form>


