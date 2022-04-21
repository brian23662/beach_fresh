{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Checkout
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                {{ $checkout->button('Pay', ['class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}
            </div>
        </div>
    </div>
</x-app-layout> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Checkout
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if (optional(optional($cart)->products)->count())
                    @foreach ($cart->products as $product)
                        <div class="mb-4 pb-4 border-b">
                            <div class="font-semibold">{{ $product->title }}</div>

                            <div>@money($product->price)</div>
                            <img src="{{ $product->file_path }}"width="150" height="150">    
                            <form action="{{ route('cart.products.destroy', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-indigo-500">Remove</button>
                            </form>
                        </div>
                    @endforeach

                    <div class="mt-4">
                        <div class="mb-2">Cart total: @money($cart->total())</div>
                        <x-link-button :href="route('checkout.index')">
                            {{ $checkout->button('Pay', ['class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}
                        </x-link-button>
                    </div>
                @else
                    <p>Your cart is empty</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
