<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'randi',
            'password'=> Hash::make('12345'),
            'isrole'=> 'admin',
            'name' =>  'fadhillah',
            'email' => 'randi@gmail.com',
            'email_verified_at' => null,
            'remember_token'=> Str::random(60),

        ]);
    }
}
