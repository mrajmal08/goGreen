<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fertilizer;
use App\Models\Accessory;
use App\Models\Order;
use App\Models\Plant;
use App\Models\Seed;
use App\Models\Pot;
use Validator;
use Redirect;

class CartController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart.cart');
    }
    public function wishlist()
    {
        return view('cart.wishlist');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart(Request $request)
    {
        if($request->type == "plant") {
            $product = Plant::findOrFail($request->id);

        }elseif($request->type == "seed"){
            $product = Seed::findOrFail($request->id);
        }
        elseif($request->type == "soil"){
            $product = Fertilizer::findOrFail($request->id);
        }
        elseif($request->type == "accessory"){
            $product = Accessory::findOrFail($request->id);
        }else{
            $product = Pot::findOrFail($request->id);
        }

        $cart = session()->get('cart', []);
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "type" => $request->type,
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->photo,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addToWishlist(Request $request){
        if($request->type == "plant") {
            $product = Plant::findOrFail($request->id);

        }elseif($request->type == "seed"){
            $product = Seed::findOrFail($request->id);
        }
        elseif($request->type == "soil"){
            $product = Fertilizer::findOrFail($request->id);
        }
        elseif($request->type == "accessory"){
            $product = Accessory::findOrFail($request->id);
        }else{
            $product = Pot::findOrFail($request->id);
        }

        $cart = session()->get('wishlist', []);
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "type" => $request->type,
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->photo,
            ];
        }

        session()->put('wishlist', $cart);
        return redirect()->back()->with('success', 'Product added to wishlist successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function updateWishlist(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('wishlist');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('wishlist', $cart);
            session()->flash('success', 'wishlist updated successfully');
        }
    }



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function removeWishlist(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('wishlist');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('wishlist', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function check_out()
    {

        return view('cart.checkout');
    }

    public function cart_store(Request $request)
    {
        if (auth()->check()) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'address' => 'required',
            ]);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator);
            }

            foreach (session('cart') as $data) {

                $data['product_name'] = $data['name'];
                $data['product_photo'] = $data['image'];
                $data['quantity'] = $data['quantity'];
                $data['price'] = $data['price'];
                $data['product_id'] = $data['id'];
                $data['name'] = $request->name;
                $data['phone'] = $request->phone;
                $data['address'] = $request->address;
                $data['city'] = $request->city;
                $data['status'] = "pending";
                $data['type'] = $data['type'];
                $data['user_id'] = auth()->user()->id;
                Order::create($data);

            }
            session()->forget('cart');
            return redirect()->route('thanks')->with('success', 'You order has been placed');
        } else {
            return redirect()->route('check.out')->with('message', 'User is not logged in');
        }
    }

    public function orders(Request $request)
    {

        $orders = Order::get();
        return view('cart.orders', compact('orders'));
    }

    public function updateStatus(Request $request)
    {

        $order = Order::find($request->id);
        if ($request->status) {
            $order->status = $request->status;
        }
        $order->save();
        return redirect()->route('orders')->with('message','Status Update');
    }

    public function thanks(){
        return view('cart.thanks');
    }
}
