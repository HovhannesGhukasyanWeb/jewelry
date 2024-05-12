<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate fake users
        for ($i = 0; $i < 20; $i++) {
            User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->password,
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
            ]);
        }
    }
}
