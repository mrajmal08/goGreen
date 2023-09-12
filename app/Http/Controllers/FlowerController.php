<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Flower;
use Carbon\Carbon;
use Exception;
use Validator;
use Redirect;
class FlowerController extends Controller
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
             $flowers = Flower::orderBy('id', 'DESC')->get();
             return view('dashboard.flowers.index', compact('flowers'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $types = DB::table('flowering_plants_types')->get();
         return view('dashboard.flowers.create', compact('types'));

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
         ]);

         if($validator->fails()) {
             return Redirect::back()->withErrors($validator);
         }


         if ($request->has('photo')) {
             $imageName = time() . '.' . $request->photo->extension();
             $request->photo->move(public_path('assets/flowersFiles'), $imageName);
             $data['photo'] = $imageName;
         }

         $data['name'] = $request->name;
         $data['type_id'] = $request->type_id? $request->type_id: NULL;
         $data['price'] = $request->price;
         $data['discount_price'] = $request->discount_price;
         $data['description'] = $request->description;
         Flower::create($data);

         return redirect()->route('flower.index')->with('message','plant created Successfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\flowers  $flowers
      * @return \Illuminate\Http\Response
      */
     public function show(flowers $flowers)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\flowers  $flowers
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $plant = Flower::find($id);
         $types = DB::table('flowering_plants_types')->get();
         return view('dashboard.flowers.edit', compact('plant', 'types'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\flowers  $flowers
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $flowers = Flower::find($id);

         if (!$flowers) {
             return redirect()->route('flower.index')->with('error','Id not found');
         }

         if ($request->file('photo')) {

             try {

                 unlink('assets/flowersFiles' . '/' . $flowers->photo);
                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/flowersFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $flowers->photo = $data['photo'];

             } catch (\Exception $e) {

                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/flowersFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $flowers->photo = $data['photo'];
             }
         }

         if ($request->name) {
             $flowers->name = $request->name;
         }

         if ($request->description) {
             $flowers->description = $request->description;
         }
         if ($request->price) {
             $flowers->price = $request->price;
         }
         if ($request->discount_price) {
             $flowers->discount_price = $request->discount_price;
         }
         if ($request->location) {
             $flowers->location = $request->location;
         }
         if ($request->type_id) {
             $flowers->type_id = $request->type_id? $request->type_id: NULL;
         }

         $flowers->save();


         return redirect()->route('flower.index')->with('message','Plant updated Successfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\flowers  $flowers
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $flowers = Flower::find($id);

         if (!$flowers) {
             return redirect()->route('flower.index')->with('error','Id not found');
         }

         try {
             unlink('assets/flowersFiles' . '/' . $flowers->photo);
             $flowers->delete();
             return redirect()->route('flowers.index')->with('message', 'plant deleted Successfully');

         } catch (\Exception $e) {

             $flowers->delete();
             return redirect()->route('flowers.index')->with('message', 'plant deleted Successfully');
         }
     }
}
