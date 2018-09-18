@extends('master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Teams</h5>
            </div>
        
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('teams.create')}}"> Add a TEAM</a>
            </div>   
        </div>
</div>
<br>
<table class="table table-dark">
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($teams as $t)
		<tr>
			<td>{{$t->id }}</td>
			<td>{{$t->title}}</td>
			<td>
				<a class="btn btn-primary" href="{{route('teams.edit',$t->id)}}">Edit</a>
				<form method="POST" action="{{route('teams.destroy',$t->id)}}" style="display: inline;">
              		<input type="hidden" name="_token" value="{{ csrf_token() }}">
              		<input name="_method" type="hidden" value="DELETE">
              		<button type="submit" class="btn btn-danger" name="delete">delete</button>
            	</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection