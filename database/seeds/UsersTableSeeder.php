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
            'name' => 'Loggia Comunicação Integrada',
            'email' => 'alfjuniorbh.web@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
