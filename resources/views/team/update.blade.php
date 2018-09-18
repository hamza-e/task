@extends('master')

@section('content')
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">

			<div class="panel panel-default">
			<div class="panel-heading"> <center><h4>Edit a Team</h4></center> </div>
			<div class="panel-body"> 
				<form method="POST" action="{{route('teams.update', $team->id)}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input name="_method" type="hidden" value="PUT">
					<div class="form-group">
						<label class="controle-label">Title : </label>
						<input type="text" name="title"  class="form-control" value="{{$team->title}}" />
					</div>
					<div>
						<button type="submit" class="btn btn-primary pull-right">Edit</button>
					</div>
				</form>
			</div>

		</div>	
		</div>

@endsection