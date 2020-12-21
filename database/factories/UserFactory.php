<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $roleArray = [];
        $roles = \App\Models\Role::where('id', '!=', 1)->get();
        foreach ($roles as $role) {
            $roleArray[] = $role->id;
        }

        return [
            'username' => $this->faker->username,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => 'secret', // password
            'role_id' => $this->faker->randomElement($roleArray),
            'remember_token' => Str::random(10),
        ];
    }
}
