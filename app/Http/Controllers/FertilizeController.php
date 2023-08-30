<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Fertilizer;
use Carbon\Carbon;
use Exception;
use Validator;
use Redirect;

class FertilizeController extends Controller
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
             $fertilizers = Fertilizer::orderBy('id', 'DESC')->get();
             return view('dashboard.fertilizers.index', compact('fertilizers'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $types = DB::table('fertilizer_types')->get();
         return view('dashboard.fertilizers.create', compact('types'));

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
             $request->photo->move(public_path('assets/fertilizersFiles'), $imageName);
             $data['photo'] = $imageName;
         }

         $data['name'] = $request->name;
         $data['type_id'] = $request->type_id;
         $data['price'] = $request->price;
         $data['discount_price'] = $request->discount_price;
         $data['description'] = $request->description;
         Fertilizer::create($data);

         return redirect()->route('fertilizer.index')->with('message','Fertilizer created Successfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\fertilizers  $fertilizers
      * @return \Illuminate\Http\Response
      */
     public function show(fertilizers $fertilizers)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\fertilizers  $fertilizers
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $plant = Fertilizer::find($id);
         $types = DB::table('fertilizer_types')->get();
         return view('dashboard.fertilizers.edit', compact('plant', 'types'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\fertilizers  $fertilizers
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $fertilizers = Fertilizer::find($id);

         if (!$fertilizers) {
             return redirect()->route('fertilizer.index')->with('error','Id not found');
         }

         if ($request->file('photo')) {

             try {

                 unlink('assets/fertilizersFiles' . '/' . $fertilizers->photo);
                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/fertilizersFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $fertilizers->photo = $data['photo'];

             } catch (\Exception $e) {

                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/fertilizersFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $fertilizers->photo = $data['photo'];
             }
         }

         if ($request->name) {
             $fertilizers->name = $request->name;
         }

         if ($request->description) {
             $fertilizers->description = $request->description;
         }
         if ($request->price) {
             $fertilizers->price = $request->price;
         }
         if ($request->discount_price) {
             $fertilizers->discount_price = $request->discount_price;
         }
         if ($request->location) {
             $fertilizers->location = $request->location;
         }
         if ($request->type_id) {
             $fertilizers->type_id = $request->type_id;
         }

         $fertilizers->save();


         return redirect()->route('fertilizer.index')->with('message','fertilizer updated Successfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\fertilizers  $fertilizers
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $fertilizers = Fertilizer::find($id);

         if (!$fertilizers) {
             return redirect()->route('news.index')->with('error','Id not found');
         }

         try {
             unlink('assets/fertilizersFiles' . '/' . $fertilizers->photo);
             $fertilizers->delete();
             return redirect()->route('fertilizer.index')->with('message', 'fertilizer deleted Successfully');

         } catch (\Exception $e) {

             $fertilizers->delete();
             return redirect()->route('fertilizer.index')->with('message', 'fertilizer deleted Successfully');
         }
     }
}
