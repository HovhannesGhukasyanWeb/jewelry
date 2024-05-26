@extends('user.layout')

@section('content')
<div>
    <div class="mt-2">
        <h1 class="text-center font-bold text-3xl">New Products</h1>
        <div class="mt-2 flex items-center justify-between gap-2">
            @include('user.partials.product-card', [
    'product' => (object) [
        'name' => 'Jewelry',
        'price' => 1000,
        'image_url' => 'https://imageio.forbes.com/specials-images/imageserve/5f2810a2a34a23f22d3c63b1/Verdura-X-necklace-in-18K-yellow-gold-and-platinum-with-peridot--yellow-sapphire-/0x0.jpg?format=jpg&crop=4080,3956,x0,y0,safe&width=960'
    ]
])
            @include('user.partials.product-card', [
    'product' => (object) [
        'name' => 'Jewelry',
        'price' => 1000,
        'image_url' => 'https://imageio.forbes.com/specials-images/imageserve/5f2810a2a34a23f22d3c63b1/Verdura-X-necklace-in-18K-yellow-gold-and-platinum-with-peridot--yellow-sapphire-/0x0.jpg?format=jpg&crop=4080,3956,x0,y0,safe&width=960'
    ]
])
            @include('user.partials.product-card', [
    'product' => (object) [
        'name' => 'Jewelry',
        'price' => 1000,
        'image_url' => 'https://imageio.forbes.com/specials-images/imageserve/5f2810a2a34a23f22d3c63b1/Verdura-X-necklace-in-18K-yellow-gold-and-platinum-with-peridot--yellow-sapphire-/0x0.jpg?format=jpg&crop=4080,3956,x0,y0,safe&width=960'
    ]
])
        </div>
    </div>
</div>
@endsection