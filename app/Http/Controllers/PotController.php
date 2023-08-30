<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pot;
use Carbon\Carbon;
use Exception;
use Validator;
use Redirect;

class PotController extends Controller
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
             $pots = Pot::orderBy('id', 'DESC')->get();
             return view('dashboard.pots.index', compact('pots'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $pages = DB::table('pots_pages')->get();
         $types = DB::table('pots_types')->get();
         return view('dashboard.pots.create', compact('pages', 'types'));

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
             'page_id' => 'required',
         ]);

         if($validator->fails()) {
             return Redirect::back()->withErrors($validator);
         }


         if ($request->has('photo')) {
             $imageName = time() . '.' . $request->photo->extension();
             $request->photo->move(public_path('assets/potsFiles'), $imageName);
             $data['photo'] = $imageName;
         }

         $data['name'] = $request->name;
         $data['type_id'] = $request->type_id;
         $data['page_id'] = $request->page_id;
         $data['price'] = $request->price;
         $data['discount_price'] = $request->discount_price;
         $data['description'] = $request->description;
         Pot::create($data);

         return redirect()->route('pots.index')->with('message','Pot created Successfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\pots  $pots
      * @return \Illuminate\Http\Response
      */
     public function show(pots $pots)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\pots  $pots
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $pot = Pot::find($id);
         $types = DB::table('pots_types')->get();
         $pages = DB::table('pots_pages')->get();
         return view('dashboard.pots.edit', compact('pot', 'types', 'pages'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\pots  $pots
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $pots = Pot::find($id);

         if (!$pots) {
             return redirect()->route('pots.index')->with('error','Id not found');
         }

         if ($request->file('photo')) {

             try {

                 unlink('assets/potsFiles' . '/' . $pots->photo);
                 $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                 $request->photo->move(public_path('assets/potsFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $pots->photo = $data['photo'];

             } catch (\Exception $e) {

                 $imageName = Carbon::now()->timestamp . '.' . $request->feature_image->extension();
                 $request->photo->move(public_path('assets/potsFiles'), $imageName);

                 $data['photo'] = $imageName;
                 $pots->photo = $data['photo'];
             }
         }

         if ($request->name) {
             $pots->name = $request->name;
         }

         if ($request->description) {
             $pots->description = $request->description;
         }
         if ($request->price) {
             $pots->price = $request->price;
         }
         if ($request->discount_price) {
             $pots->discount_price = $request->discount_price;
         }
         if ($request->location) {
             $pots->location = $request->location;
         }
         if ($request->type_id) {
             $pots->type_id = $request->type_id;
         }

         if ($request->page_id) {
             $pots->page_id = $request->page_id;
         }

         $pots->save();


         return redirect()->route('pots.index')->with('message','Pots updated Successfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\pots  $pots
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $pots = Pot::find($id);

         if (!$pots) {
             return redirect()->route('news.index')->with('error','Id not found');
         }

         try {
             unlink('assets/potsFiles' . '/' . $pots->photo);
             $pots->delete();
             return redirect()->route('pots.index')->with('message', 'pots deleted Successfully');

         } catch (\Exception $e) {

             $pots->delete();
             return redirect()->route('pots.index')->with('message', 'pots deleted Successfully');
         }
     }
}
