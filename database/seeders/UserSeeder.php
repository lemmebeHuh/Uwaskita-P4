<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            
            [
                'name' => 'Ninain ',
                'email' => 'jia@uas.com',
                'role' => 'mahasiswa',
                'password' => '1'
            ],
            
        ];
        foreach ($userData as $key => $val){
            User::create($val);
        }
    }
}
