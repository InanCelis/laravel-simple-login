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

            $parentPermission = new Permission();
            $parentPermission->key = $entity[0];
            $parentPermission->permission = 'read_'.Str::snake(Str::plural($entity[0]));
            $parentPermission->name = 'Read '.Str::plural($entity[0]);
            $parentPermission->description = '';
            $parentPermission->save();

            $childrenPermission = new Permission();
            $childrenPermission->key = $entity[0];
            $childrenPermission->permission = 'create_'.Str::snake(Str::plural($entity[0]));
            $childrenPermission->name = 'Create '.Str::plural($entity[0]);
            $childrenPermission->description = '';
            $childrenPermission->parent_id = $parentPermission->id;
            $childrenPermission->save();

            $childrenPermission = new Permission();
            $childrenPermission->key = $entity[0];
            $childrenPermission->permission = 'update_'.Str::snake(Str::plural($entity[0]));
            $childrenPermission->name = 'Update '.Str::plural($entity[0]);
            $childrenPermission->description = '';
            $childrenPermission->parent_id = $parentPermission->id;
            $childrenPermission->save();

            $childrenPermission = new Permission();
            $childrenPermission->key = $entity[0];
            $childrenPermission->permission = 'delete_'.Str::snake(Str::plural($entity[0]));
            $childrenPermission->name = 'Delete '.Str::plural($entity[0]);
            $childrenPermission->description = '';
            $childrenPermission->parent_id = $parentPermission->id;
            $childrenPermission->save();
            
        }
    }
}
