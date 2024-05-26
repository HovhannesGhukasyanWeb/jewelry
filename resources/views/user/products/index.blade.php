@extends('user.layout')

@section('content')
<div class="p-2">
    <div class="grid grid-cols-3 justify-center items-center place-items-center">
        @foreach ($products as $product)
            <a href="/product/{{$product->id}}">
                @include('user.partials.product-card', ['product' => $product])
            </a>
        @endforeach
    </div>

    <div class="py-2">
        {{ $products->links('pagination::tailwind') }}
    </div>
</div>
@endsection