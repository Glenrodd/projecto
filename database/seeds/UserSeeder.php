<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('public.users')->insert([
            'name' =>  'roddwy',
            'email' => 'roddwy@gmail.com',
            'password' => Hash::make('1234567Lima')
        ]);
    }
}
