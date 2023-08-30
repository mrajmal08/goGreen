<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Accessory;
use Carbon\Carbon;
use Exception;
use Validator;
use Redirect;

class AccessoriesController extends Controller
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
             $accessories = Accessory::orderBy('id', 'DESC')->get();
             return view('dashboard.accessories.index', compact('accessories'));
     }
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $categories = DB::table('accessories_cat')->get();
         $types = DB::table('accessories_types')->get();
         return view('dashboard.accessories.create', compact('categories', 'types'));

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
             'cat_id' => 'required',
         ]);

         if($validator->fails()) {
             return Redirect::back()->withErrors($validator);
         }


         if ($request->has('photo')) {
             $imageName = time() . '.' . $request->photo->extension();
             $request->photo->move(public_path('assets/accessoriesFiles'), $imageName);
             $data['photo'] = $imageName;
         }

         $data['name'] = $request->name;
         $data['type_id'] = $request->type_id;
         $data['cat_id'] = $request->cat_id;
         $data['price'] = $request->price;
         $data['discount_price'] = $request->discount_price;
         $data['description'] = $request->description;
         Accessory::create($data);

         return redirect()->route('accessories.index')->with('message','accessories created Successfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\accessories  $accessories
      * @return \Illuminate\Http\Response
      */
     public function show(accessories $accessories)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\accessories  $accessories
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $accessories = Accessory::find($id);
         $types = DB::table('accessories_types')->get();
         $categories = DB::table('accessories_cat')->get();
         return view('dashboard.accessories.edit', compact('accessories', 'types', 'categories'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\accessories  $accessories
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $accessories = Accessory::find($id);

         if (!$accessories) {
             return redirect()->route('accessories.index')->with('error','Id not found');
         }

         if ($request->file('photo')) {

             try {

                 unlink('assets/accessoriesFiles' . '/' . $accessories->photo);
                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/accessoriesFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $accessories->photo = $data['photo'];

             } catch (\Exception $e) {

                 $imageName = Carbon::now()->timestamp . '.' . $request->feature_image->extension();
                 $request->photo->move(public_path('assets/accessoriesFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $accessories->photo = $data['photo'];
             }
         }

         if ($request->name) {
             $accessories->name = $request->name;
         }

         if ($request->description) {
             $accessories->description = $request->description;
         }
         if ($request->price) {
             $accessories->price = $request->price;
         }
         if ($request->discount_price) {
             $accessories->discount_price = $request->discount_price;
         }
         if ($request->location) {
             $accessories->location = $request->location;
         }
         if ($request->type_id) {
             $accessories->type_id = $request->type_id;
         }

         if ($request->cat_id) {
             $accessories->cat_id = $request->cat_id;
         }

         $accessories->save();


         return redirect()->route('accessories.index')->with('message','accessories updated Successfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\accessories  $accessories
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $accessories = Accessory::find($id);

         if (!$accessories) {
             return redirect()->route('news.index')->with('error','Id not found');
         }

         try {
             unlink('assets/accessoriesFiles' . '/' . $accessories->photo);
             $accessories->delete();
             return redirect()->route('accessories.index')->with('message', 'accessories deleted Successfully');

         } catch (\Exception $e) {

             $accessories->delete();
             return redirect()->route('accessories.index')->with('message', 'accessories deleted Successfully');
         }
     }
}
