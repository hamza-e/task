<!DOCTYPE html>
<html>
<head>

    <title>Task</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="{{route('home')}}">Home</a>
    <a class="navbar-brand" href="{{route('users.index')}}">Users</a>
    <a class="navbar-brand" href="{{route('teams.index')}}">Teams</a>
  </nav>
<br>
<br>
    @yield('content')
<br>
</div>



</body>
</html>