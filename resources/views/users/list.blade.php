    @extends('master')
    @section('content')
        <div class="pt-5"></div>

        <table class="table table-striped">
            <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            @can('show',)
                <th >Action</th>
            @elsecan('update')
                <th >Action</th>
            @elsecan('delete')
                <th >Action</th>
            @endcan
            @can('isAdmin',)
                <th>Groups</th>
            @endcan
            @can('isAdmin',)
                <th>Permissions</th>
            @endcan


            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>

                    <td>

                        @can('show')
                            <a  class="btn btn-outline-primary" href="/users/show/{{$user->id}}">Show</a>
                        @endcan
                        @can('update')
                                <a  class="btn btn-outline-info" href="/users/edit/{{$user->id}}">Edit</a>
                            @endcan
                            @can('delete')
                                <a  class="btn btn-outline-danger" href="/users/delete/{{$user->id}}">Delete</a>
                            @endcan

                    </td>

                    <td>
                        @can('isAdmin',)
                            @foreach($user->roles()->get() as $role)

                                   <a  class="btn btn-outline-warning" onclick= "show()" id="$user">
                                       {{$role->name}}
                                   </a>

                            @endforeach

{{--                                @foreach($user->roles()->get() as $role)--}}
{{--                                    @foreach($role->permissions()->get() as $permission)--}}
{{--                                        <a  class="btn btn-outline-success">{{$permission->name}}</a>--}}
{{--                                    @endforeach--}}
{{--                                @endforeach--}}

                        @endcan
                    </td>
                    <td>
                        @can('isAdmin',)
                            @foreach($user->permissions()->get() as $permission)
                                <a  class="btn btn-outline-success">{{$permission->name}}</a>
                            @endforeach
                        @endcan
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $users->links() }}


    @endsection

    <script>
        function show() {
            // if(document.getElementById("1").value=='admin'){
            //     document.getElementById("1").style.color = "red";
            // }else if(document.getElementById("1").value=='employee'){
            //     document.getElementById("1").style.color = "blue";
            // }else{
            //     document.getElementById("1").style.color = "green";
            // }
            document.getElementById("1").style.color = "red";


        }
    </script>

