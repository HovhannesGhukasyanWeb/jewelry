<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::where('user_id', auth()->guard('user')->id())
            ->get();

        $checkoutPrice = 0;
        foreach ($carts as $cart) {
            $checkoutPrice += $cart->product->price * $cart->quantity;
        }

        return view('user.cart.index', compact('carts', 'checkoutPrice'));
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
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $user_id = auth()->guard('user')->id();

        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cart) {
            $cart->increment('quantity');
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $request->product_id,
            ]);
        }

        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cart::find($id)->delete();
        return redirect()->route('cart.index');
    }
}
