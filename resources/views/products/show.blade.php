<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-lg font-semibold mb-2">{{ $product->title }}</h1>
                    <img src="{{ $product->file_path }}"width="150" height="150">
                    <div>@money($product->price)</div>
                    <p>{{ $product->description }}</p>

                    <form action="{{ route('cart.products.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <x-button class="mt-3">
                            Add to cart
                        </x-button>
                    </form>
                    <div class="flex items-center justify-center">
                        <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                          <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Select a date" />
                          <label for="floatingInput" class="text-gray-700">Select a date</label>
                          <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                            <i class="fas fa-calendar datepicker-toggle-icon"></i>
                          </button>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
