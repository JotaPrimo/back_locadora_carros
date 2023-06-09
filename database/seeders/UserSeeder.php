<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{

public function run()
        {
            DB::table('users')->insert(
                [
                    [
                        'name'     => 'Jota',
                        'email'    => 'gestald118@gmail.com',
                        'password' => Hash::make(12345678)
                    ],
                    [
                        'name'     => 'Bruce Stay',
                        'email'    => 'bruce.stay@fakemail.com',
                        'password' => Hash::make(12345678)
                    ],
                    [
                        'name'     => 'Maya Hit',
                        'email'    => 'maya.hit@fakemail.com',
                        'password' => Hash::make(12345678)
                    ]
                ]
            );
        }
    }
    
