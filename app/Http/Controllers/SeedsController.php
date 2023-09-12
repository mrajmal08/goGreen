<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\seed;
use Carbon\Carbon;
use Exception;
use Validator;
use Redirect;

class SeedsController extends Controller
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
             $seeds = seed::orderBy('id', 'DESC')->get();
             return view('dashboard.seeds.index', compact('seeds'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $categories = DB::table('seeds_categories')->get();
         $types = DB::table('seeds_types')->get();
         return view('dashboard.seeds.create', compact('categories', 'types'));

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
            //  'type_id' => 'required',
             'cat_id' => 'required',
         ]);

         if($validator->fails()) {
             return Redirect::back()->withErrors($validator);
         }


         if ($request->has('photo')) {
             $imageName = time() . '.' . $request->photo->extension();
             $request->photo->move(public_path('assets/seedsFiles'), $imageName);
             $data['photo'] = $imageName;
         }

         $data['name'] = $request->name;
         $data['type_id'] = $request->type_id?$request->type_id: NULL;
         $data['cat_id'] = $request->cat_id;
         $data['price'] = $request->price;
         $data['discount_price'] = $request->discount_price;
         $data['description'] = $request->description;
         seed::create($data);

         return redirect()->route('seeds.index')->with('message','Seeds created Successfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\seeds  $seeds
      * @return \Illuminate\Http\Response
      */
     public function show(seeds $seeds)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\seeds  $seeds
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $seed = Seed::find($id);
         $types = DB::table('seeds_types')->get();
         $categories = DB::table('seeds_categories')->get();
         return view('dashboard.seeds.edit', compact('seed', 'types', 'categories'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\seeds  $seeds
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $seeds = seed::find($id);

         if (!$seeds) {
             return redirect()->route('seeds.index')->with('error','Id not found');
         }

         if ($request->file('photo')) {

             try {

                 unlink('assets/seedsFiles' . '/' . $seeds->photo);
                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/seedsFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $seeds->photo = $data['photo'];

             } catch (\Exception $e) {

                 $imageName = Carbon::now()->timestamp . '.' . $request->feature_image->extension();
                 $request->photo->move(public_path('assets/seedsFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $seeds->photo = $data['photo'];
             }
         }

         if ($request->name) {
             $seeds->name = $request->name;
         }

         if ($request->description) {
             $seeds->description = $request->description;
         }
         if ($request->price) {
             $seeds->price = $request->price;
         }
         if ($request->discount_price) {
             $seeds->discount_price = $request->discount_price;
         }
         if ($request->location) {
             $seeds->location = $request->location;
         }
         if ($request->type_id) {
             $seeds->type_id = $request->type_id?$request->type_id: NULL;
         }

         if ($request->cat_id) {
             $seeds->cat_id = $request->cat_id;
         }

         $seeds->save();


         return redirect()->route('seeds.index')->with('message','seeds updated Successfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\seeds  $seeds
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $seeds = Seed::find($id);

         if (!$seeds) {
             return redirect()->route('seeds.index')->with('error','Id not found');
         }

         try {
             unlink('assets/seedsFiles' . '/' . $seeds->photo);
             $seeds->delete();
             return redirect()->route('seeds.index')->with('message', 'seeds deleted Successfully');

         } catch (\Exception $e) {

             $seeds->delete();
             return redirect()->route('seeds.index')->with('message', 'seeds deleted Successfully');
         }
     }
}
