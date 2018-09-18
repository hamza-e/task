@extends('master')

@section('content')
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">

			<div class="panel panel-default">
			<div class="panel-heading"> <center><h4>Add a Team</h4></center> </div>
			<div class="panel-body"> 
				<form method="POST" action="{{route('teams.store')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label class="controle-label">Title : </label>
						<input type="text" name="title"  class="form-control"/>
					</div>
					<div>
						<button type="submit" class="btn btn-primary pull-right">Add</button>
					</div>
				</form>
			</div>

		</div>	
		</div>

@endsection