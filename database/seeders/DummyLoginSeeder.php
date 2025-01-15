<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Logindata= [
            [
                'name' => 'mas Admin',
                'email' => 'admin@gmail.com',
                'role' => 'Admin',  
                'password' => bcrypt('admin')
            ],[
                'name' => 'Pengujung',
                'email' => null,
                'role' => 'Pengunjung',
                'password' => '123456',

            ],

            ];
            foreach( $Logindata as $key => $val){
                User::create($val);

            }
    }
}
