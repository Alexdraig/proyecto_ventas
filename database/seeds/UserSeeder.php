<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Alejandro Villanueva',
            'phone' => '952632514',
            'email' => 'alejo15@gmail.com'
        ]);
    }
}
