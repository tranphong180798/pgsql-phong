    @extends('master')
    @section('content')
        <form action="/users/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <legend>Update information</legend>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder=" {{ $user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder=" {{$user->email}}">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder=" {{ $user->password}}">
                </div>
                <button type="submit" class="btn btn-primary">Yes, Edit it</button>
                <a href="/users" class="btn btn-secondary">Cancel</a>
            </fieldset>
        </form>
    @endsection

