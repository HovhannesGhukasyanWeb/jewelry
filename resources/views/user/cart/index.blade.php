@extends('user.layout')

@section('content')
<div>
    <h1 class="text-center text-2xl font-bold my-4">Cart</h1>
    <div>
        @forelse ($carts as $item)
                @php
                    $image = $item->product->image_url;

                    if (!Str::startsWith($image, 'http')) {
                        $image = "data:image/png;base64, $image";
                    }
                 @endphp
                <div class="flex justify-between items-center my-2 shadow-lg p-2 rounded-lg">
                    <div>
                        <img src="{{ $image }}" alt="{{ $item->product->name }}" class="w-20 h-20 object-cover">
                    </div>
                    <div>
                        <h2>{{ $item->product->name }}</h2>
                        <p>{{ $item->product->price }} x {{$item->quantity}} = {{ $item->product->price * $item->quantity }} AMD
                        </p>
                    </div>
                    <div>
                        <form action="{{ route('cart.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1">Remove</button>
                        </form>
                    </div>
                </div>
        @empty
            <p class="text-center text-2xl">Cart is empty</p>
        @endforelse



        @if($carts->count() > 0)

            <div class="py-2">
                @if(auth()->guard('user')->user()->address)
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">Address is set. {{auth()->guard('user')->user()->address}}</span>
                    </div>
                @else
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">Address is not set. <a href="/me" class="text-blue-500 underline">Set
                                address</a></span>
                    </div>
                @endif
            </div>

            <button href=""
                class="bg-orange-500 w-full text-white px-2 py-3 rounded-lg flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>

                Checkout {{$checkoutPrice}} AMD
            </button>
        @endif
    </div>
</div>
@endsection