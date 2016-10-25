@extends('layouts.masters.main')

@section('project1')

@include('layouts.partials.nav')


<div>
<img src="img/project1.jpg" width=100% />
</div>

<div id="commentbox">

<md-card>
<md-toolbar>yes i was speaking </md-toolbar>
<md-input-container class="col-sm-10" style="display:inline;">
  <label>Enter text</label>
  <input type="text" ng-model="user.name">
</md-input-container>
<div class="col-sm-2 style="display:inline;">
  <input type="submit" value="send">
 </div>
<md-card>
</div>


