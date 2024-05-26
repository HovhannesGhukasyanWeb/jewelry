@extends('user.layout')

@section('content')
<div>
    <h1 class="text-center text-2xl font-bold my-4">Me</h1>
    <div class="flex justify-center">
        <div class="w-1/2">
            <div class="border border-lightgray rounded-lg p-2">

                <form method="post" action="/update-profile" class="mt-2">
                    @csrf
                    <h1 class="text-center font-bold text-lg">{{ $user->username }}</h1>
                    <div class="mt-2">
                        <input type="text" placeholder="Email" disabled value="{{$user->email}}"
                            class="w-full items-center p-2 bg-gray-200 border border-lightgray rounded-lg">
                    </div>
                    <div class="mt-2">
                        <input type="text" placeholder="Phone Number" name="phone_number"
                            value="{{$user->phone_number}}"
                            class="w-full items-center p-2 bg-gray-200 border border-lightgray rounded-lg">
                    </div>
                    <div class="mt-2">
                        <input type="text" placeholder="Address" name="address" value="{{$user->address}}"
                            class="w-full items-center p-2 bg-gray-200 border border-lightgray rounded-lg">
                    </div>
                    <div class="mt-2">
                        <button type="submit"
                            class="w-full py-2 flex items-center justify-center rounded-lg text-white bg-orange-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h1 class="text-center text-2xl font-bold my-4">Favorite products</h1>
        <div>
            <div class="grid grid-cols-3 justify-center items-center place-items-center">
                @foreach ($user->favorites as $favorite)
                    <a href="/product/{{$favorite->product->id}}">
                        @include('user.partials.product-card', ['product' => $favorite->product])
                    </a>
                @endforeach
            </div>

            @if($user->favorites->count() == 0)
                <p class="text-center text-2xl">No favorite products. <a href="{{route('products.index')}}"
                        class="text-orange-500 underline">Add one.</a></p>
            @endif
        </div>
    </div>
</div>
@endsection