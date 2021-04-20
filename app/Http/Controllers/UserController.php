<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index() {

        $users= User::orderBy('id','desc')->simplePaginate(14);

        return view('users.list', ['users' => $users]);
    }

    public function pageAdd(Request $request)
    {
        return view("login.signup");
    }

    public function show($id)
    {

        $user=User::find($id);

        return view('users.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user=User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->update();

        return redirect('/users')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with("delete","User Deleted");
    }

    public function findUser(Request $request)
    {
        $users= new User();
        $keyword=$request->keyword;

        if($keyword==null)
        {
            return  back()->with("notfound","Please enter key search.");
        }
        else{
        $users=User::where('name','like','%'.$keyword.'%')->get();
        if(count($users)==0)
         {

            return  back()->with("notfound","Sorry, We can't find your request.. Please try another keyword.");
         }
        return view("users.findUser",['users'=>$users]);
            }

    }
}
