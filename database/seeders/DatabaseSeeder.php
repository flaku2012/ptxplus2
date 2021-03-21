<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // KATEGORIE
        DB::table('categories')->insert([
            'name' => 'Roxette',
        ]);
        DB::table('categories')->insert([
            'name' => 'Modern Talking',
        ]);
        DB::table('categories')->insert([
            'name' => 'Brayan Adams',
        ]);

        // BILETY

        DB::table('tickets')->insert([
            'surname' => 'Soboczyńska',
            'name' => 'Monika',
            'category_id' => 1,
        ]);

        DB::table('tickets')->insert([
            'surname' => 'Mikczyńska',
            'name' => 'Jolanta',
            'category_id' => 2,
        ]);

        DB::table('tickets')->insert([
            'surname' => 'testes',
            'name' => 'testsetset',
            'category_id' => 2,
        ]);
    }
}
