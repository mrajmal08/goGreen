<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Plant;
use Carbon\Carbon;
use Exception;
use Validator;
use Redirect;
class PlantController extends Controller
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
            $plants = Plant::orderBy('id', 'DESC')->get();
            return view('dashboard.plants.index', compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('plants_categories')->get();
        $types = DB::table('plants_types')->get();
        return view('dashboard.plants.create', compact('categories', 'types'));

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
            $request->photo->move(public_path('assets/plantsFiles'), $imageName);
            $data['photo'] = $imageName;
        }

        $data['name'] = $request->name;
        $data['type_id'] = $request->type_id;
        $data['cat_id'] = $request->cat_id;
        $data['price'] = $request->price;
        $data['discount_price'] = $request->discount_price;
        $data['description'] = $request->description;
        Plant::create($data);

        return redirect()->route('plants.index')->with('message','plant created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function show(plants $plants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plant = Plant::find($id);
        $types = DB::table('plants_types')->get();
        $categories = DB::table('plants_categories')->get();
        return view('dashboard.plants.edit', compact('plant', 'types', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $plants = Plant::find($id);

        if (!$plants) {
            return redirect()->route('plants.index')->with('error','Id not found');
        }

        if ($request->file('photo')) {

            try {

                unlink('assets/plantsFiles' . '/' . $plants->photo);
                $imageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
                $request->photo->move(public_path('assets/plantsFiles'), $imageName);

                $data['photo'] = $imageName;
                $plants->photo = $data['photo'];

            } catch (\Exception $e) {

                $imageName = Carbon::now()->timestamp . '.' . $request->feature_image->extension();
                $request->photo->move(public_path('assets/plantsFiles'), $imageName);

                $data['photo'] = $imageName;
                $plants->photo = $data['photo'];
            }
        }

        if ($request->name) {
            $plants->name = $request->name;
        }

        if ($request->description) {
            $plants->description = $request->description;
        }
        if ($request->price) {
            $plants->price = $request->price;
        }
        if ($request->discount_price) {
            $plants->discount_price = $request->discount_price;
        }
        if ($request->location) {
            $plants->location = $request->location;
        }
        if ($request->type_id) {
            $plants->type_id = $request->type_id;
        }

        if ($request->cat_id) {
            $plants->cat_id = $request->cat_id;
        }

        $plants->save();


        return redirect()->route('plants.index')->with('message','plants updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plants = Plant::find($id);

        if (!$plants) {
            return redirect()->route('news.index')->with('error','Id not found');
        }

        try {
            unlink('assets/plantsFiles' . '/' . $plants->photo);
            $plants->delete();
            return redirect()->route('plants.index')->with('message', 'plants deleted Successfully');

        } catch (\Exception $e) {

            $plants->delete();
            return redirect()->route('plants.index')->with('message', 'plants deleted Successfully');
        }
    }
}
