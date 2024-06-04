<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        Cart::query()
            ->where('user_id', auth()->guard('user')->id())
            ->delete();

        return redirect()->back()->with('success', 'Checkout successful. Thank you for shopping with us.');
    }
}
