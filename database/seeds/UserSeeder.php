<?php

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
        User::create(
            [
                'name'     => 'Super Administrator',
                'username' => 'superadmin',
                'email'    => 'superadmin@gmail.com',
                'password' => 'password.',
            ]
        );
    }
}
