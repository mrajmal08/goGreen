<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function types_of_plants(){
        return view('frontend.types_of_plants');
    }
    public function plant_by_season(){
        return view('frontend.plant_by_season');
    }
    public function plant_by_location(){
        return view('frontend.plant_by_location');
    }

    public function flowering_plants(){
        return view('frontend.flowering_plants');
    }
    public function flower_seeds(){
        return view('frontend.flower_seeds');
    }
    public function fruit_seeds(){
        return view('frontend.fruit_seeds');
    }
    public function vegetable_seeds(){
        return view('frontend.vegetable_seeds');
    }
    public function spray(){
        return view('frontend.spray');
    }
    public function soil_fertilizer(){
        return view('frontend.soil_fertilizer');
    }
    public function plants(){
        return view('frontend.plants');
    }
    public function seeds(){
        return view('frontend.seeds');
    }
    public function accessories(){
        return view('frontend.accessories');
    }
    public function gardening_tools(){
        return view('frontend.gardening_tools');
    }
    public function seed_starter(){
        return view('frontend.seed_starter');
    }
    public function pots(){
        return view('frontend.pots');
    }
    public function types_of_pots(){
        return view('frontend.types_of_pots');
    }
    public function growing_bags(){
        return view('frontend.growing_bags');
    }
    public function steel_pots(){
        return view('frontend.steel_pots');
    }


}
