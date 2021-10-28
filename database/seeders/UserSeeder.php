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
            'name' => 'Jesus Cenobio',
            'email' => 'jesus@gmail.com',
            'password' => bcrypt('jesus123')
        ]);
        
        User::factory(9)->create();
    }
}
