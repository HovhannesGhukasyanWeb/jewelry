@extends('user.layout')

@section('content')
<div>
    <div class="mt-2">
        <h1 class="text-center font-bold text-3xl">New Products</h1>
        <div class="mt-2 flex items-center justify-between gap-2">
            @foreach ($products as $product)
                @include('user.partials.product-card', [
                    'product' => $product
                ])
            @endforeach
        </div>
    </div>
</div>
@endsection