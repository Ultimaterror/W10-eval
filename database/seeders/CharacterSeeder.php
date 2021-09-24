<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert(
            [
                [
                    'name' => 'Superman',
                    'drawer_id' => 1,
                    'comic' => 'Le plus grand des superhéros',
                    'creation' => 1974
                ],
                [
                    'name' => 'Batman',
                    'drawer_id' => 2,
                    'comic' => 'Le chevalier noir',
                    'creation' => 1988
                ],
                [
                    'name' => 'Astérix',
                    'drawer_id' => 3,
                    'comic' => 'Astérix & Obélix',
                    'creation' => 1994
                ]
            ]
        );
    }
}
