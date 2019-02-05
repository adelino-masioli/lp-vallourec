<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vallourec - EIXO FERROVIÁRIO TUBULAR',
            'email' => 'email@email.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
