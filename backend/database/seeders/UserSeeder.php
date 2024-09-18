<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::insert([
            'name' => 'Robson Piperuner',
            'email' => 'robinho@piperun.com',
            'password' => bcrypt('password'),
        ]);

        $user = User::insert([
            'name' => 'Roberta Piperuner',
            'email' => 'roberta@piperun.com',
            'password' => bcrypt('password'),
        ]);

    }
}
