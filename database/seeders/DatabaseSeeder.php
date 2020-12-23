<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Permission::truncate();
        \App\Models\Role::truncate();
        \App\Models\PermissionRole::truncate();
        \App\Models\Profile::truncate();
        \App\Models\User::truncate();

        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        \App\Models\User::factory(50)->create();
        \App\Models\User::all()->each(function ($user) {
            $user->users()->saveMany(\App\Models\Profile::factory(1)->make());
        });
    }
}
