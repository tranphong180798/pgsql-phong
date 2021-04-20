<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'employee';
        $role->description = 'A Employee User';
        $role->save();
        $role->permissions()->attach(Permission::where('name','view')->first());



        $role = new Role();
        $role->name = 'guest';
        $role->description = 'A Guest User';

        $role->save();

        $role = new Role();
        $role->name = 'admin';
        $role->description = 'A Admin User';
        $role->save();
        $role->permissions()->attach(Permission::where('name','view')->first());
        $role->permissions()->attach(Permission::where('name','create')->first());
        $role->permissions()->attach(Permission::where('name','update')->first());
        $role->permissions()->attach(Permission::where('name','delete')->first());

    }
}
