<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // development user don't use it as real.
        User::create([
            'name' => 'Aoba Chino',
            'email' => 'chino@graduate.utm.my',
            'password' => Hash::make('aoba'),
            'role' => 'Admin',
            'random_key' => Str::random(60)
        ]);

                // User::factory(5)->create();
        User::create([
            'name' => 'Wailan',
            'email' => 'wailantirajoh@gmail.com',
            'password' => Hash::make('wailan'),
            'role' => 'Super',
            'random_key' => Str::random(60),
        ]);
    }
}
