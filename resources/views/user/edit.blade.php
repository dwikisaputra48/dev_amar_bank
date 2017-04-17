@extends('layouts.master')
 
@section('content')
 
    <div class="panel panel-default">
        <div class="panel-heading">Edit User</div>
        <div class="panel-body">
 
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required="true">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Username</label>
                <input type="text" name="username" class="form-control" value="{{  $user->username }}" required="true">
                @if ($errors->has('username'))
                  <span class="help-block">
                     <strong>{{ $errors->first('username') }}</strong>
                  </span>
               @endif
            </div>
            <div class="form-group">
                <label for="description">Email</label>
                <input type="email" name="email" class="form-control" value="{{  $user->email }}" required="true">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Password</label>
                <input type="password" name="password" class="form-control" value="" required="true">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" value="Save Changes" class="btn btn-info">
                <a href="{{ route('users.index')  }}" class="btn btn-default">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
 
@endsection