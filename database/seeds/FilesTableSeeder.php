<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gebruiker',
            'email' => 'email@dr.es',
            'password' => bcrypt('secret'),
        ]);

        DB::table('files')->insert([
            'user_id' => 1,
            'name' => 'IMG_0001.jpg',
            'label' => 'CV'
        ]);
    }
}
