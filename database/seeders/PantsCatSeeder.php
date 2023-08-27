<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PantsCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mul_rows = [
            [
                'name' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Flowering Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Vegetable Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Fruit Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
        ];

        foreach ($mul_rows as $rows) {
            $insert = DB::table('plants_categories')->insert($rows);

        }
    }
}
