<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->insert(
            [
                [
                    'name' => 'John',
                    'birthyear' => 1951,
                    'nationality' => 'Italien'
                ],
                [
                    'name' => 'James',
                    'birthyear' => 1962,
                    'nationality' => 'Américain'
                ],
                [
                    'name' => 'Jean',
                    'birthyear' => 1956,
                    'nationality' => 'Français'
                ]
            ]
        );
    }
}
