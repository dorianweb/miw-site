<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        SocialsTableSeeder::class;
        // $this->call(UsersTableSeeder::class);
        $this->call(SocialsTableSeeder::class);
        $this->call(PageTextPictureSeeder::class);
    }
}
