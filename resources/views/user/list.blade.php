@extends('layouts.master')
 
@section('content')
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="panel panel-default">
        <div class="panel-heading">
            User List
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="/users/create" class="btn btn-default">Add New Users</a>
                </div>
            </div>
 
            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th width="300">Action</th>
                </tr>
                @if (count($users) > 0)
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('users.show',$user->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                {{ Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">Users not found!</td>
                    </tr>
                @endif
            </table>
 
            {{ $users->render() }}
 
        </div>
    </div>
 
@endsection