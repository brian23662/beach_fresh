<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Product
        </h2>
    </x-slot>

    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/products">
                @csrf
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="title"
                    >
                        Title
                    </label>
                
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="title"
                        id="title"
                        required
                    >

                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="slug"
                    >
                        
                    </label>
                        Slug
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="slug"
                        id="slug"
                        required
                    >

                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="description"
                    >
                        Description
                    </label>
                
                    <textarea class="border border-gray-400 p-2 w-full"
                        name="description"
                        id="description"
                        required
                    ></textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="stripe_id"
                    >
                        
                    </label>
                        Stripe ID
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="stripe_id"
                        id="stripe_id"
                        required
                    >

                    @error('stripe_id')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="file_path"
                    >
                        
                    </label>
                        Link to picture
                    <input class="border border-gray-400 p-2 w-full"
                        type="file_path"
                        name="file_path"
                        id="file_path"
                        required
                    >

                    @error('file_path')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>
            </form>
        </x-panel>
    </section>
</x-app-layout>
                   