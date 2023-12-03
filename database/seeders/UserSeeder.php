<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mahafuzur',
            'email' => 'mahafuzur@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1,
            'mobile' => Str::random(10),
        ]);
        \App\Models\User::factory(5)->create();
    }
}
