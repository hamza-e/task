@extends('master')

@section('content')
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">

			<div class="panel panel-default">
			<div class="panel-heading"> <center><h4>Edit a user</h4></center> </div>
			<div class="panel-body"> 
				<form method="POST" action="{{route('users.update', $user->id)}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input name="_method" type="hidden" value="PUT">
					<div class="form-group">
						<label class="controle-label">Name : </label>
						<input type="text" name="name"  class="form-control" value="{{$user->name}}" />
					</div>
					<div class="form-group">
						<label class="controle-label">Email : </label>
						<input type="email" name="email"  class="form-control" value="{{$user->email}}" />
					</div>
					<div class="form-group">
						<label class="controle-label">Team : </label>
						<select class="form-control select2-multi" name="team[]" multiple="multiple">
							@foreach($teams as $t)
								<option value="{{$t->id}}">{{$t->title}}</option>
							@endforeach
						</select>
					</div>
					<div>
						<button type="submit" class="btn btn-primary pull-right">Edit</button>
					</div>
				</form>
			</div>

		</div>	
		</div>
<script type="text/javascript">
	$('.select2-multi').select2();
	$('.select2-multi').select2().val({!! json_encode($user->teams()->getRelatedIds()) !!}).trigger('change');
</script>

@endsection