<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PotsTypesSeeder extends Seeder
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
                'name' => 'Ceramic Round Planter',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Caribbean Round Planter',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Concrete Bowl Planter',
                'page' => 'Plastic Plant Pot',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Cylindric Plant Pot',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Antique Stone Finishs',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Balconera Cottage',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Stone Finish Planter',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Fluted Ceramic Round Planter',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Bamboo Plant Stand Shelf',
                'page' => 'Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Decorative Round Planter',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Decorative Round Planter',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Gallen Grow Bags',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Hammered Copper Plated Tub',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Concrete Bowl Planter',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Triangle Plant Pot',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Metal Cylinder Planter Pots',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Hanging Planter Set',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Tall Square Planter',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Metal Trough Planter',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Planting Bags',
                'page' => 'Types Of Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Trapple Strawberry Growing Bag',
                'page' => 'Growing Bags',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Gallen Grow Bag',
                'page' => 'Growing Bags',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Strawberry Grow Bag',
                'page' => 'Growing Bags',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Heal Smart Grow Bag',
                'page' => 'Growing Bags',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Gallen Potato Grow Bag',
                'page' => 'Growing Bags',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Pocket Wall Growing Bag',
                'page' => 'Growing Bags',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Resuable Febric Grow Bed',
                'page' => 'Growing Bags',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Eleven Corten Steel PLanter',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Galvanized Steel Window Flower Box',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Steel Planter Pot',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Corten Steel Contempoo Planter',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Elevens Talls Planter',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Clover Shaped Metal Steel Planter',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Metal Round Planter',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Rustic Metal Planter',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Metal Cylinderic Planter',
                'page' => 'Steel Pots',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],

        ];

        foreach ($mul_rows as $rows) {
            $insert = DB::table('pots_types')->insert($rows);

        }
    }
}
