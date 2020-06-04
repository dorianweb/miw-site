<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            'link' => '',
            'svg_name' => 'instagram',
            'activ' => '1',
        ]);
        DB::table('socials')->insert([
            'link' => '',
            'svg_name' => 'facebook',
            'activ' => '1',
        ]);
        DB::table('socials')->insert([
            'link' => '',
            'svg_name' => 'twitter',
            'activ' => '1',
        ]);
        DB::table('socials')->insert([
            'link' => '',
            'svg_name' => 'linkedin',
            'activ' => '0',
        ]);
        DB::table('socials')->insert([
            'link' => 'https://www.univ-amu.fr/',
            'svg_name' => 'logo-amu',
            'activ' => '0',
        ]);
        DB::table('dates')->insert([
            'name' => 'Journée porte ouverte 2020',
            'date' => DateTime::createFromFormat('U', 1615377600, new DateTimeZone('UTC'))
        ]);
        DB::table('users')->insertGetId([
            'name' => 'dorian',
            'email' => 'dorian-13016@live.fr',
            'password' => bcrypt('dorian'),
        ]);
    }


}
