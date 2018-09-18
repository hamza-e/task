@extends('master')

@section('content')
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                     <div class="well">
                       <div class="form-group">
          				  <strong>Name:</strong> {{ $user->name }}
				        </div>

				        <div class="form-group">
				            <strong>Email:</strong> {{ $user->email }}
				        </div>
				        <div class="form-group">
				        	<strong>Teams: </strong>
				            <ul>
				            	@foreach($teams as $team)
				            		<li>{{$team->title}}</li>
				            	@endforeach
				            </ul>
				        </div>
				        
				        <div class="form-group">
				            <a class="btn btn-primary" href="{{route('users.edit',$user->id)}}">Edit</a>
				        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection