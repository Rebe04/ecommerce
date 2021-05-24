<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raul Esteban Benitez Enciso',
            'email' => 'estebanbenitez1996@gmail.com',
            'password' => bcrypt('Password4444.,')
        ]);
    }
}
