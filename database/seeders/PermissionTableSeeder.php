<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->name = 'view';
        $permission->description = 'View';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'create';
        $permission->description = 'Create';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'update';
        $permission->description = 'Update';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'delete';
        $permission->description = 'Delete';
        $permission->save();
    }
}
