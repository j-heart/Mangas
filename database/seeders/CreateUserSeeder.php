<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('1234')

            ],
            [
                'name' => 'fakeAdmin',
                'email' => 'admin2@mail.com',
                'password' => bcrypt('1234')
            ]
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
        //
    }
}
