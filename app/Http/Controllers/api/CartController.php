<?php

namespace App\Http\Controllers\api;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function show()
    {
        $carts = Cart::latest()->with('product')->get();

        return response()->json([
            'carts' => $carts,
            'cartCount' => count($carts)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        if (!$cart) {
            return response()->json([
                'message' => 'Cart not found'
            ], 404);
        }

        if ($request->type === 'add') {
            $cart->quantity += 1;
        } else {
            $cart->quantity -= 1;
        }

        if ($cart->quantity < 1) {
            $cart->delete();
            return response()->json([
                'message' => 'Cart removed'
            ]);
        } else {
            $cart->save();
            return response()->json([
                'message' => 'Cart updated',

            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        if (!$cart) {
            return response()->json([
                'message' => 'Cart not found'
            ], 404);
        }

        $cart->delete();
        return response()->json([
            'message' => 'Cart removed'
        ]);
    }
}
