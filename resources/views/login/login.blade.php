    @extends('master')
    @section('content')
        <div class="loginbox" style="height: 470px;margin-top: 35%">
            <div class="imageDiv">
                <img src="{{URL::asset('../avatar.png')}}" class="avatar" alt="">
                <input type="file" id="choiceImg" class="inputImg" (change)="changeImg($event)">
            </div>
            <h1>Login</h1>

            <form  id="contact" method="post" action="/login" >
                @csrf
                <div class="row">
                    <label>Email</label>
                    <input  class=" form-control"  name='email' type="email" value="{{old('email')}}">
                </div>


                <div class="row">
                    <label>Password</label>
                    <input  class=" form-control"  name='password' type="text" value="{{old('password')}}">
                </div>

                <div class="row">
                    <label for="" style="width: 150px;margin-left: 40px">Remember Me</label>
                    <input type="checkbox" style="width: 30px;margin-top: 5px " name="remember_me" value="1">
                </div>



                <div class="row " id="button" >
                    <button  type="submit" class="edit" style="margin-left: -145px">
                        Login
                    </button>
                    <button type="button" class="edit" onclick="window.location.href='/signup'">
                        Sign Up
                    </button>
                </div>
            </form>

        </div>
    @endsection
