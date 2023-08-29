<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Season;
use Carbon\Carbon;
use Exception;
use Validator;
use Redirect;

class SeasonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
             $seasons = Season::orderBy('id', 'DESC')->get();
             return view('dashboard.seasons.index', compact('seasons'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $types = DB::table('plants_by_season_types')->get();
         return view('dashboard.seasons.create', compact('types'));

     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'name' => 'required|max:255',
             'type_id' => 'required',
         ]);

         if($validator->fails()) {
             return Redirect::back()->withErrors($validator);
         }


         if ($request->has('photo')) {
             $imageName = time() . '.' . $request->photo->extension();
             $request->photo->move(public_path('assets/seasonsFiles'), $imageName);
             $data['photo'] = $imageName;
         }

         $data['name'] = $request->name;
         $data['type_id'] = $request->type_id;
         $data['price'] = $request->price;
         $data['discount_price'] = $request->discount_price;
         $data['description'] = $request->description;
         Season::create($data);

         return redirect()->route('season.index')->with('message','Plant created Successfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\seasons  $seasons
      * @return \Illuminate\Http\Response
      */
     public function show(seasons $seasons)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\seasons  $seasons
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $season = Season::find($id);
         $types = DB::table('plants_by_season_types')->get();
         return view('dashboard.seasons.edit', compact('season', 'types'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\seasons  $seasons
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $seasons = season::find($id);

         if (!$seasons) {
             return redirect()->route('seasons.index')->with('error','Id not found');
         }

         if ($request->file('photo')) {

             try {

                 unlink('assets/seasonsFiles' . '/' . $seasons->photo);
                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/seasonsFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $seasons->photo = $data['photo'];

             } catch (\Exception $e) {

                 $imageName = Carbon::now()->timestamp . '.' . $request->feature_image->extension();
                 $request->photo->move(public_path('assets/seasonsFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $seasons->photo = $data['photo'];
             }
         }

         if ($request->name) {
             $seasons->name = $request->name;
         }

         if ($request->description) {
             $seasons->description = $request->description;
         }
         if ($request->price) {
             $seasons->price = $request->price;
         }
         if ($request->discount_price) {
             $seasons->discount_price = $request->discount_price;
         }
         if ($request->location) {
             $seasons->location = $request->location;
         }
         if ($request->type_id) {
             $seasons->type_id = $request->type_id;
         }

         if ($request->cat_id) {
             $seasons->cat_id = $request->cat_id;
         }

         $seasons->save();

         return redirect()->route('season.index')->with('message','seasons updated Successfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\seasons  $seasons
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $seasons = Season::find($id);

         if (!$seasons) {
             return redirect()->route('news.index')->with('error','Id not found');
         }

         try {
             unlink('assets/seasonsFiles' . '/' . $seasons->photo);
             $seasons->delete();
             return redirect()->route('seasons.index')->with('message', 'seasons deleted Successfully');

         } catch (\Exception $e) {

             $seasons->delete();
             return redirect()->route('seasons.index')->with('message', 'seasons deleted Successfully');
         }
     }
}
