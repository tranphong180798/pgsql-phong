    @extends('master')
    @section('content')
        <div class="mt-2"></div>
        <table class="table table-striped">
            <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>

                    <td>
                        <a  class="btn btn-outline-primary" href="/users/show/{{$user->id}}">Show</a>
                        <a  class="btn btn-outline-info" href="/users/edit/{{$user->id}}">Edit</a>
                        <a  class="btn btn-outline-danger" href="/users/delete/{{$user->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endsection
