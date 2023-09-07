<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessoryTypesSeeder extends Seeder
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
                'name' => 'Axe',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Gardening Gloves',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Boots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Tap',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Recycle bin',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Gardener',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Fence',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Grass',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Hedge Shears',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Flower Pot',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'News Paper Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Seed Starting Flat',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Pallet Starting Kits',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Seedling Trays With Dome',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Seed Starting Mix',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Apron',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Ladder',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Shed',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Grass Cutter',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Bucket',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Earthworms',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Scythe',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],

            [
                'name' => 'Fertilizer',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],

            [
                'name' => 'Seeds',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Hedge Trimmer',
                'location' => 'garden',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],

        ];
        foreach ($mul_rows as $rows) {
            $insert = DB::table('accessories_types')->insert($rows);

        }
    }
}
