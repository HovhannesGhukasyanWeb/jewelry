@php
    $image = $product->image_url;

    if (!Str::startsWith($image, 'http')) {
        $image = asset('storage/' . $image);
    }
    if (!auth()->guard('user')->user()) {
        $isFavorite = false;
    } else {
        $isFavorite = auth()->guard('user')->user()->favorites->contains('product_id', $product->id);
    }

@endphp

<div class="max-w-[300px]">
    <div class="border border-lightgray rounded-lg p-2">
        <div class="flex justify-center">
            <img src="{{$image}}" alt="{{ $product->name }}" class="w-[300px] h-[300px] object-cover">
        </div>
        <div class="mt-2">
            <h1 class="text-center font-bold text-lg">{{ $product->name }}</h1>
            <div class="mt-2">
                <span class="text-center text-sm">{{ $product->price }} AMD</span>
            </div>
            <div class="mt-2">
                <div class="flex justify-end">
                    <form action="{{route('favorites.store')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$product->id ?? null}}" name="product_id">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6 @if($isFavorite) text-orange-500 fill-orange-500 @endif">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <form action="{{route('cart.store')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$product->id ?? null}}" name="product_id">
                    <button type="submit" class="w-full bg-orange-500 text-white p-2 rounded-lg">
                        Add to cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>