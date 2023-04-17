<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product_id = $request->input('product_id');
        $existing_cart = Cart::where('product_id', $product_id)->first();

        if ($existing_cart) {
            $existing_cart->quantity += $request->input('quantity');
            $existing_cart->save();
            return response()->json([
                'message' => 'cart updated'

            ]);
        } else {
            $cart = new Cart;
            $cart->product_id = $product_id;
            $cart->quantity = $request->input('quantity');
            $cart->save();
            return response()->json([
                'message' => 'added to cart'

            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updated(Request $request, $id)
    {
        $cart = Cart::find($id);
        if ($request->type === 'add') {
            $cart->quantity += 1;
        } else {
            $cart->quantity -= 1;
        }

        if ($cart->quantity < 1) {
            $response = ['message' => 'delete'];
        } else {
            $cart->save();
            $response = ['message' => 'save'];
        }
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $cart = Cart::find($id);
        if ($cart) {

            $cart->delete();
            return response()->json([
                'message' => 'successfully removed'

            ]);
        } else {
            return response()->json([

                'message' => 'not deleted.'
            ]);
        }
    }
}
