@extends('master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>USERS</h5>
            </div>
        
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('users.create')}}"> Add a USER</a>
            </div>   
        </div>
</div>
<br>
<table class="table table-dark">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $u)
		<tr>
			<td>{{$u->id }}</td>
			<td>{{$u->name }}</td>
			<td>{{$u->email }}</td>
			<td>
				<a class="btn btn-secondary" href="{{route('users.show',$u->id)}}">Info</a>
				<a class="btn btn-primary" href="{{route('users.edit',$u->id)}}">Edit</a>
				<form method="POST" action="{{route('users.destroy',$u->id)}}" style="display: inline;">
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