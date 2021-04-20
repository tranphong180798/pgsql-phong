    @extends('master')
    @section('content')

        <form action="/signUp" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <legend>Create new User</legend>

                <div class="form-group">
                    <label for="name">Name</label>

                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name Here!">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder=" What is your email?">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder=" Keep your password in secret">
                </div>
                <button type="submit" class="btn btn-primary">Gimme more!</button>
                <a href="/users" class="btn btn-secondary">Cancel</a>
            </fieldset>

        </form>
    @endsection

