<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Section;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{

public function run()
    {

        Section::factory()->count(10)->create();
        Classe::factory()->count(10)->create();
        
        DB::table('users')->insert(
            [
                [
                    'name'     => 'Jota',
                    'email'    => 'gestald118@gmail.com',
                    'section_id'    => 1,
                    'classe_id'    => 1,
                    'address' => 'Rua Artur Marinho, 20, Jardim Sayonara, Campo Grande-MS',
                    'password' => Hash::make(12345678)
                ],                    
            ]
        );
        
       
        User::factory()->count(3500)->create();
    }
}
    
