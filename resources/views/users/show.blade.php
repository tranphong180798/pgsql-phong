    @extends('master')
    @section('content')
        <body>
        <h1 style="color:red"> Welcome to {{$user->name}} </h1>
        <table class="table table-dark">
            <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            </thead>
            <tbody>
            <td>{{$user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->password}}</td>
            </tbody>
        </table>
    @endsection
