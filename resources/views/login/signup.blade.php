    @extends('master')
    @section('content')
        <div class="loginbox">
            <div class="imageDiv">
                <img src="{{URL::asset('../avatar.png')}}" class="avatar" alt="">
                <input type="file" id="choiceImg" class="inputImg" (change)="changeImg($event)">
            </div>
            <h1>Sign Up</h1>
            <form  id="contact" action="/signup" method="POST" >
                @csrf
                <div class="row">
                    <label>User Name</label>
                    <input  class=" form-control"  type="text" id="name" name="name">
                </div>

                <div class="row">
                    <label>Email</label>
                    <input  class=" form-control"  type="email" id="email" name="email">
                </div>

                <div class="row">
                    <label>Password</label>
                    <input  class=" form-control"  type="text" id="password" name="password">
                </div>

                <div class="row">
                    <label>Confirm Password</label>
                    <input  class=" form-control"  type="text" id="password" name="password">
                </div>
                <div class="row " id="button">
                    <button  type="submit" class="edit" style="margin-left: -145px">
                        Sign Up
                    </button>
                    <button type="button" class="edit" onclick="window.location.href='/login'">
                        Cancel
                    </button>
                </div>

            </form>


        </div>
    @endsection
