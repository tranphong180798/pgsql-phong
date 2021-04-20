    @extends('master')
    @section('content')

        <div class="loginbox" style="height: 400px;margin-top: 35%">
            <div class="imageDiv">
                <img src="{{URL::asset('../avatar.png')}}" class="avatar" alt="">
                <input type="file" id="choiceImg" class="inputImg" (change)="changeImg($event)">
            </div>

            <h1 style="margin-top: 50px">Welcome <span style="color: red">{{$user->name}}</span></h1>
        </div>
    @endsection
