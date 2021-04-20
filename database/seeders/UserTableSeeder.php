<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'guest';
        $user->email = 'guest@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('1');
        $user->remember_token = Str::random(10);
        $user->save();
        $user->roles()->attach(Role::where('name','guest')->first());

        $user = new User();
        $user->name = 'employee';
        $user->email = 'employee@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('1');
        $user->remember_token = Str::random(10);
        $user->save();
        $user->roles()->attach(Role::where('name','employee')->first());

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('1');
        $user->remember_token = Str::random(10);
        $user->save();
        $user->roles()->attach(Role::where('name','admin')->first());

    }

}
