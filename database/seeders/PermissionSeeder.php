<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        $permission = new Permission();
        $permission->key = 'Admin';
        $permission->name = 'Admin';
        $permission->permission = 'is_admin';
        $permission->description = '';
        $permission->save();

        $entities = [
            ['User'],
            ['User Type'],
        ];

        foreach ($entities as $entity) {

            $permission = new Permission();
            $permission->key = $entity[0];
            $permission->permission = 'read_'.Str::snake(Str::plural($entity[0]));
            $permission->name = 'Read '.Str::plural($entity[0]);
            $permission->description = '';
            $permission->save();

            $permission = new Permission();
            $permission->key = $entity[0];
            $permission->permission = 'create_'.Str::snake(Str::plural($entity[0]));
            $permission->name = 'Create '.Str::plural($entity[0]);
            $permission->description = '';
            $permission->save();

            $permission = new Permission();
            $permission->key = $entity[0];
            $permission->permission = 'update_'.Str::snake(Str::plural($entity[0]));
            $permission->name = 'Update '.Str::plural($entity[0]);
            $permission->description = '';
            $permission->save();

            $permission = new Permission();
            $permission->key = $entity[0];
            $permission->permission = 'delete_'.Str::snake(Str::plural($entity[0]));
            $permission->name = 'Delete '.Str::plural($entity[0]);
            $permission->description = '';
            $permission->save();

        }
    }
}
