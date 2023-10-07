<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plant;
use Illuminate\Support\Facades\Redirect;



class WellcomeController extends Controller
{

    public function homepage(){
        $plants = DB::table('plants')->limit(3)->orderBy('id', 'Desc')->get();
        $seeds = DB::table('seeds')->limit(3)->orderBy('id', 'Desc')->get();
        $accessories = DB::table('accessories')->limit(3)->orderBy('id', 'Desc')->get();
        $pots = DB::table('pots')->limit(3)->orderBy('id', 'Desc')->get();

        return view('welcome', compact('plants', 'seeds', 'accessories', 'pots'));
    }

    public function types_of_plants(Request $request)
    {

        if ($request->id) {
            $plants = DB::table('plants')->where('cat_id', $request->id)->get();
        } else {
            $plants = DB::table('plants')->get();
        }
        $types = DB::table('plants_types')->get();
        $categories = DB::table('plants_categories')->get();

        return view('frontend.types_of_plants', compact('types', 'categories', 'plants'));
    }
    public function plant_by_season(Request $request)
    {

        if ($request->id) {
            $plants = DB::table('plants_by_season')->where('type_id', $request->id)->get();
        } else {
            $plants = DB::table('plants_by_season')->get();
        }
        $types = DB::table('plants_by_season_types')->get();

        return view('frontend.plant_by_season', compact('types', 'plants'));
    }

    public function plant_by_season_detail($id)
    {
        $plant = DB::table('plants_by_season')->where('id', $id)->first();
        $type = 'season';
        return view('frontend.plant_detail', compact('plant', 'type'));
    }

    public function plant_by_location(Request $request)
    {

        if ($request->id) {
            $plants = DB::table('plants')->where('cat_id', $request->id)->get();
        } else {
            $plants = DB::table('plants')->get();
        }
        $types = DB::table('plants_types')->get();
        $categories = DB::table('plants_categories')->get();

        return view('frontend.plant_by_location', compact('types', 'categories', 'plants'));
    }

    public function flowering_plants(Request $request)
    {

        if ($request->id) {
            $plants = DB::table('flowering_plants')->where('type_id', $request->id)->get();
        } else {
            $plants = DB::table('flowering_plants')->get();
        }
        $types = DB::table('plants_types')->get();

        return view('frontend.flowering_plants', compact('types', 'plants'));

    }

    public function flowering_plants_detail($id)
    {
        $plant = DB::table('flowering_plants')->where('id', $id)->first();
        $type = 'flower';
        return view('frontend.plant_detail', compact('plant', 'type'));
    }

    public function spray(Request $request)
    {
        if ($request->id) {
            $plants = DB::table('fertilizer')->where('type_id', $request->id)->get();
        } else {
            $plants = DB::table('fertilizer')->get();
        }

        $types = DB::table('fertilizer_types')->get();

        return view('frontend.spray', compact('types', 'plants'));
    }
    public function soil_fertilizer(Request $request)
    {
        if ($request->id) {
            $plants = DB::table('fertilizer')->where('type_id', $request->id)->get();
        } else {
            $plants = DB::table('fertilizer')->get();
        }

        $types = DB::table('fertilizer_types')->get();

        return view('frontend.soil_fertilizer', compact('types', 'plants'));
    }

    public function fertilizer_detail($id){
        $plant = DB::table('fertilizer')->where('id', $id)->first();
        return view('frontend.fertilizer_detail', compact('plant'));
    }


    public function plants(Request $request)
    {
        if ($request->id) {
            $plants = DB::table('plants')->where('cat_id', $request->id)->get();
        } else {
            $plants = DB::table('plants')->get();
        }
        $types = DB::table('plants_types')->get();
        $categories = DB::table('plants_categories')->get();
        return view('frontend.plants', compact('types', 'categories', 'plants'));
    }

    public function plant_detail($id)
    {
        $plant = DB::table('plants')->where('id', $id)->first();
        $type = 'plant';
        return view('frontend.plant_detail', compact('plant', 'type'));
    }

    public function seeds(Request $request)
    {

        if ($request->id) {
            $seeds = DB::table('seeds')->where('cat_id', $request->id)->get();
        } else {
            $seeds = DB::table('seeds')->get();
        }
        $types = DB::table('seeds_types')->get();
        $categories = DB::table('seeds_categories')->get();

        return view('frontend.seeds', compact('types', 'categories', 'seeds'));
    }

    public function seeds_detail($id)
    {
        $seed = DB::table('seeds')->where('id', $id)->first();
        return view('frontend.seeds_detail', compact('seed'));
    }

    public function flower_seeds(Request $request)
    {
        if ($request->id) {
            $seeds = DB::table('seeds')->where('cat_id', $request->id)->get();
        } else {
            $seeds = DB::table('seeds')->whereIn('cat_id', [1, 4, 5, 6])->get();
        }

        $types = DB::table('seeds_types')->get();
        $categories = DB::table('seeds_categories')->get();

        return view('frontend.flower_seeds', compact('types', 'categories', 'seeds'));
    }

    public function fruit_seeds(Request $request)
    {
        if ($request->id) {
            $seeds = DB::table('seeds')->where('cat_id', $request->id)->get();
        } else {
            $seeds = DB::table('seeds')->whereIn('cat_id', [3, 10, 11, 12])->get();
        }

        $types = DB::table('seeds_types')->get();
        $categories = DB::table('seeds_categories')->get();

        return view('frontend.fruit_seeds', compact('types', 'categories', 'seeds'));
    }

    public function vegetable_seeds(Request $request)
    {
        if ($request->id) {
            $seeds = DB::table('seeds')->where('cat_id', $request->id)->get();
        } else {
            $seeds = DB::table('seeds')->whereIn('cat_id', [2, 7, 8, 9])->get();
        }

        $types = DB::table('seeds_types')->get();
        $categories = DB::table('seeds_categories')->get();

        return view('frontend.vegetable_seeds', compact('types', 'categories', 'seeds'));
    }

    public function accessories(Request $request)
    {
        if ($request->id) {
            $accessories = DB::table('accessories')->where('cat_id', $request->id)->get();
        } else {
            $accessories = DB::table('accessories')->whereIn('cat_id', [1, 2])->get();
        }
        $types = DB::table('accessories_types')->where('location', NULL)->get();
        $categories = DB::table('accessories_cat')->get();
        return view('frontend.accessories', compact('types', 'categories', 'accessories'));
    }
    public function accessories_detail($id){

        $accessories = DB::table('accessories')->where('id', $id)->first();
        return view('frontend.accessories_detail', compact('accessories'));

        return view('frontend.accessories');
    }

    public function gardening_tools(Request $request)
    {
    //    if ($request->id) {
     //       $accessories = DB::table('accessories')->where('cat_id', $request->id)->get();
     //   } else {
      //      $accessories = DB::table('accessories')->whereIn('cat_id', [6, 7, 8])->get();
      //  }
        $accessories = DB::table('accessories')->where('cat_id', 1)->get();
        $types = DB::table('accessories_types')->where('location', 'garden')->get();
        $categories = DB::table('accessories_cat')->get();

        return view('frontend.gardening_tools', compact('types', 'categories', 'accessories'));
    }
    public function seed_starter(Request $request)
    {
     //   if ($request->id) {
    //       $accessories = DB::table('accessories')->where('cat_id', $request->id)->get();
     //   } else {
      ///      $accessories = DB::table('accessories')->whereIn('cat_id', [3, 4, 5])->get();
     //   }

        $accessories = DB::table('accessories')->where('cat_id', 2)->get();
        $types = DB::table('accessories_types')->get();
        $categories = DB::table('accessories_cat')->get();

        return view('frontend.seed_starter', compact('types', 'categories', 'accessories'));
    }
    public function pots(Request $request)
    {
        if ($request->id) {
            $pots = DB::table('pots')->where('type_id', $request->id)->get();
        } else {
            $pots = DB::table('pots')->where('page_id', 1)->get();
        }
        $types = DB::table('pots_types')->get();
        return view('frontend.pots', compact('types', 'pots'));
    }
    public function pots_detail($id)
    {
        $pots = DB::table('pots')->where('id', $id)->first();
        return view('frontend.pots_detail', compact('pots'));
    }
    public function types_of_pots(Request $request)
    {
        if ($request->id) {
            $pots = DB::table('pots')->where('type_id', $request->id)->get();
        } else {
            $pots = DB::table('pots')->where('page_id', 2)->get();
        }
        $types = DB::table('pots_types')->get();
        return view('frontend.types_of_pots', compact('types', 'pots'));
    }
    public function growing_bags(Request $request)
    {
        if ($request->id) {
            $pots = DB::table('pots')->where('type_id', $request->id)->get();
        } else {
            $pots = DB::table('pots')->where('page_id', 3)->get();
        }
        $types = DB::table('pots_types')->get();
        return view('frontend.growing_bags', compact('types', 'pots'));
    }
    public function steel_pots(Request $request)
    {
        if ($request->id) {
            $pots = DB::table('pots')->where('type_id', $request->id)->get();
        } else {
            $pots = DB::table('pots')->where('page_id', 4)->get();
        }
        $types = DB::table('pots_types')->get();
        return view('frontend.steel_pots', compact('types', 'pots'));
    }

    public function garden_core()
    {
        return view('frontend.garden_core');
    }
    public function privacy_policy()
    {
        return view('frontend.privacy_policy');
    }
    public function events()
    {
        return view('frontend.events');
    }
    public function trips_tricks()
    {
        return view('frontend.trips_tricks');
    }
    public function bird_cage()
    {
        return view('frontend.bird_cage');
    }
    public function landscaping()
    {
        return view('frontend.landscaping');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function return_policy()
    {
        return view('frontend.return_policy');
    }
    public function damage_calm()
    {
        return view('frontend.damage_calm');
    }
    public function delivery_area_and_time()
    {
        return view('frontend.delivery_area_and_time');
    }
    public function gardener()
    {
        return view('frontend.gardener');
    }
    public function delivery_person()
    {
        return view('frontend.delivery_person');
    }
    public function deals()
    {
        $plants = DB::table('plants')->whereNotNull('discount_price')->limit(3)->orderBy('id', 'Desc')->get();
        $seeds = DB::table('seeds')->whereNotNull('discount_price')->limit(3)->orderBy('id', 'Desc')->get();
        $accessories = DB::table('accessories')->whereNotNull('discount_price')->limit(3)->orderBy('id', 'Desc')->get();
        $pots = DB::table('pots')->whereNotNull('discount_price')->limit(3)->orderBy('id', 'Desc')->get();
        return view('frontend.deals', compact('plants', 'seeds', 'accessories', 'pots'));
    }

    public function filter(Request $request){
        $plants = Plant::where('name', 'LIKE', '%' . $request->search . '%')->get();
        if (!$plants->isEmpty()) {
            return view('frontend.plants', compact('plants'));
        }
        $plants = DB::table('plants_by_season')->where('name', 'LIKE', '%' . $request->search . '%')->get();
        if (!$plants->isEmpty()) {
            return view('frontend.plant_by_season', compact('plants'));
        }
        $plants = DB::table('flowering_plants')->where('name', 'LIKE', '%' . $request->search . '%')->get();
        if (!$plants->isEmpty()) {
            return view('frontend.flowering_plants', compact('plants'));
        }
        $seeds = DB::table('seeds')->where('name', 'LIKE', '%' . $request->search . '%')->get();
        if (!$seeds->isEmpty()) {
            return view('frontend.seeds', compact('seeds'));
        }
        $plants = DB::table('fertilizer')->where('name', 'LIKE', '%' . $request->search . '%')->get();
        if (!$plants->isEmpty()) {
            return view('frontend.soil_fertilizer', compact('plants'));
        }
        $accessories = DB::table('accessories')->where('name', 'LIKE', '%' . $request->search . '%')->get();
        if (!$accessories->isEmpty()) {
            return view('frontend.accessories', compact('accessories'));
        }

        $pots = DB::table('pots')->where('name', 'LIKE', '%' . $request->search . '%')->get();
        if (!$pots->isEmpty()) {
            return view('frontend.pots', compact('pots'));
        }
        return Redirect::route('homepage')->withErrors(['msg' => 'No Record found..']);


    }

}
