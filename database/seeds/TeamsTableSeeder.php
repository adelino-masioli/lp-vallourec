<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'GUARANI',
            'flag' => 'GUARANI.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'CRUZEIRO',
            'flag' => 'CRUZEIRO.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'TUPI',
            'flag' => 'TUPI.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'TOMBENSE',
            'flag' => 'TOMBENSE.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'CALDENSE',
            'flag' => 'CALDENSE.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'AMÉRICA',
            'flag' => 'AMERICA.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'VILLA NOVA',
            'flag' => 'VILLA_NOVA.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'TUPYNAMBAS F.C.',
            'flag' => 'TUPYNAMBAS_F_C.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'ATLÉTICO',
            'flag' => 'ATLETICO.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'BOA',
            'flag' => 'BOA.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'CA PATROCINENSE',
            'flag' => 'CA_PATROCINENSE.svg',
        ]);

        DB::table('teams')->insert([
            'name' => 'URT',
            'flag' => 'URT.svg',
        ]);
    }
}
