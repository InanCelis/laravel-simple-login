<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use App\Models\PermissionRole;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        PermissionRole::truncate();

        $role = new Role();
        $role->name = 'System Administrator';
        $role->description = 'Highest access on the system.';
        $role->save();

        $permissions = Permission::all();
        foreach ($permissions as $permission) {

            $permissionRole = new PermissionRole();
            $permissionRole->permission_id = $permission->id;
            $permissionRole->role_id = $role->id;
            $permissionRole->access_level = 'A';
            $permissionRole->save();

        }

        // User
        $role = new Role();
        $role->name = 'Member';
        $role->description = 'Normal user.';
        $role->save();

        $permissions = Permission::whereIn('permission',[
            'read_users',
            'update_users'
        ])->get();

        foreach ($permissions as $permission) {

            $permissionRole = new PermissionRole();
            $permissionRole->permission_id = $permission->id;
            $permissionRole->role_id = $role->id;
            $permissionRole->access_level = 'B';
            $permissionRole->save();

        }
    }
}
