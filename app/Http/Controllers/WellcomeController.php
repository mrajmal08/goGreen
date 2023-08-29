<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function types_of_plants(Request $request){

        if($request->id){
            $plants = DB::table('plants')->where('cat_id', $request->id)->get();
        }else{
            $plants = DB::table('plants')->get();
        }
        $types = DB::table('plants_types')->get();
        $categories = DB::table('plants_categories')->get();

        return view('frontend.types_of_plants', compact('types', 'categories', 'plants'));
    }
    public function plant_by_season(Request $request){

        if($request->id){
            $plants = DB::table('plants_by_season')->where('type_id', $request->id)->get();
        }else{
            $plants = DB::table('plants_by_season')->get();
        }
        $types = DB::table('plants_by_season_types')->get();

        return view('frontend.plant_by_season', compact('types', 'plants'));
    }
    public function plant_by_location(Request $request){

        if($request->id){
            $plants = DB::table('plants')->where('cat_id', $request->id)->get();
        }else{
            $plants = DB::table('plants')->get();
        }
        $types = DB::table('plants_types')->get();
        $categories = DB::table('plants_categories')->get();

        return view('frontend.plant_by_location', compact('types', 'categories', 'plants'));
    }

    public function flowering_plants(Request $request){

        if($request->id){
            $plants = DB::table('flowering_plants')->where('type_id', $request->id)->get();
        }else{
            $plants = DB::table('flowering_plants')->get();
        }
        $types = DB::table('plants_types')->get();

        return view('frontend.flowering_plants',  compact('types', 'plants'));

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
    public function plants(Request $request){

        if($request->id){
            $plants = DB::table('plants')->where('cat_id', $request->id)->get();
        }else{
            $plants = DB::table('plants')->get();
        }
        $types = DB::table('plants_types')->get();
        $categories = DB::table('plants_categories')->get();
        return view('frontend.plants', compact('types', 'categories', 'plants'));
    }

    public function plant_detail($id){

        $plant = DB::table('plants')->where('id', $id)->first();
        return view('frontend.plant_detail', compact('plant'));
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
    public function garden_core(){
        return view('frontend.garden_core');
    }
    public function privacy_policy(){
        return view('frontend.privacy_policy');
    }
    public function events(){
        return view('frontend.events');
    }
    public function trips_tricks(){
        return view('frontend.trips_tricks');
    }
    public function bird_cage(){
        return view('frontend.bird_cage');
    }
    public function landscaping(){
        return view('frontend.landscaping');
    }
    public function faq(){
        return view('frontend.faq');
    }
    public function return_policy(){
        return view('frontend.return_policy');
    }
    public function damage_calm(){
        return view('frontend.damage_calm');
    }
    public function delivery_area_and_time(){
        return view('frontend.delivery_area_and_time');
    }
    public function gardener(){
        return view('frontend.gardener');
    }
    public function delivery_person(){
        return view('frontend.delivery_person');
    }
    public function deals(){
        $plants = DB::table('plants')->whereNotNull('discount_price')->get();
        return view('frontend.deals', compact('plants'));
    }


}
