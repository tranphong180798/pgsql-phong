@extends('master')
@section('content')
    <div class="loginbox" style="height: 470px;margin-top: 35%">
        <div class="imageDiv">
            <img src="{{URL::asset('../avatar.png')}}" class="avatar" alt="">
            <input type="file" id="choiceImg" class="inputImg" (change)="changeImg($event)">
        </div>
        <h1>Login</h1>

        <form  id="contact"  method="post" action="/login2">
            @csrf
            <div class="row mt-5">
                <label style="color: red">
                    Select the role you want to login:
                </label>
                <input  hidden name="user" value={{$user}}>
                <select  name="roleName">
                    @foreach($user->roles()->get() as $role)
                        <option  value="{{$role->name}}">{{$role->name}}</option>
                    @endforeach
                </select>


            </div>
            <div class="row " id="button" >
                <button  type="submit" class="edit" style="margin-left: -145px">
                    Submit
                </button>
                <button type="button" class="edit" onclick="window.location.href='/login'">
                    Cancel
                </button>
            </div>

        </form>

    </div>
@endsection
