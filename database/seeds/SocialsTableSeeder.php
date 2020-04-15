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
    }
}
