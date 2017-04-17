<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
 
    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app/webroot/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>
</head>
<body>
 
<div class="container">
 
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/logout') }}">Logout</a> <br> <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
            </div>
            <ul class="nav navbar-nav">
 
            </ul>
        </div>
    </nav>
 
    <head>
        <h1></h1>
    </head>
 
    @yield('content')
 
</div>
</body>
</html>