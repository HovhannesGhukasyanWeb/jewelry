@extends('user.layout')

@section('content')
<div>
    <h1 class="text-center text-2xl font-bold my-4">Favorite products</h1>
    <div>
        <div class="grid grid-cols-3 justify-center items-center place-items-center">
            @foreach ($favorites as $favorite)
                <a href="/product/{{$favorite->product->id}}">
                    @include('user.partials.product-card', ['product' => $favorite->product])
                </a>
            @endforeach
        </div>

        @if($favorites->count() == 0)
            <p class="text-center text-2xl">No favorite products. <a href="{{route('products.index')}}"
                    class="text-orange-500 underline">Add one.</a></p>
        @endif
    </div>
</div>
@endsection