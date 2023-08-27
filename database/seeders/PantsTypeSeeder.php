<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PantsTypeSeeder extends Seeder
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
                'name' => 'Calathea Zebrina Plants',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Wandering Jew',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Musa Oriana',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Cascade Palm',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Aloe Striatula',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Asplenium Nidus',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Chamaedorea Elegans',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Spathiphyllum',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Tradescantia',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Asplenium',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Monstera',
                'location' => 'Indoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Herbs',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Calibrachoa',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Lavender',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Sweet Alyssum',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Black-Eyed Susan Vine',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Caladium',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Ornamental Pepper',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Heliotrope',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Succulents',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Cherry Tomato',
                'location' => 'Outdoor Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Aglaonema Wishes',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Aglaonema Wishes',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Dracaena Gold Star',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Costa Farms Chinese Evergreen',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Birds Nest Fern',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Modern Bamboo',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'ZZ Plant',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Coffee Plant',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Red Prayer Plant',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Woven Basket Hanging',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],
            [
                'name' => 'Tillandsia Cyanea',
                'location' => 'Office Plants',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ],


        ];

        foreach ($mul_rows as $rows) {
            $insert = DB::table('plants_types')->insert($rows);

        }
    }
}
