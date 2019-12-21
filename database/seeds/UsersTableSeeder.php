<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Kandy-1234
        $users = [[
            'id'             => 1,
            'name'           => 'pham anh tuan',
            'email'          => 'anhtuanst1@gmail.com',
            'password'       => '$2y$12$bZfSgLefWspH3xBooYOpvuEMwH0F/WDp1uB0qSONiRoGOgVE.cANS',
            'remember_token' => null,
            'created_at'     => '2019-04-15 19:13:32',
            'updated_at'     => '2019-04-15 19:13:32',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
