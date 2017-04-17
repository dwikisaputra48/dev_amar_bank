@extends('layouts.master')
 
@section('content')
 
    <div class="panel panel-default">
        <div class="panel-heading">
            View Task
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('users.index')  }}">Go Back</a>
            </div>
            <div class="form-group">
                <strong>Name: </strong> {{ $user->name }}
            </div>
            <div class="form-group">
                <strong>Username: </strong> {{ $user->username }}
            </div>
            <div class="form-group">
                <strong>Email: </strong> {{ $user->email }}
            </div>
        </div>
    </div>
 
@endsection