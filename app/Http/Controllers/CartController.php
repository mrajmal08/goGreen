<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Plant;
use Illuminate\Http\Request;
use Redirect;
use Validator;

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

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Plant::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
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
                $data['status'] = "pending";
                $data['user_id'] = auth()->user()->id;
                Order::create($data);

            }

            return redirect()->route('homepage')->with('success', 'You order has been placed');
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

        dd($request->all());

        $order = Order::find($request->id);
        if ($request->status) {
            $order->status = $request->status;
        }
        $order->save();
        return redirect()->route('orders')->with('message','Status Update');
    }
}
