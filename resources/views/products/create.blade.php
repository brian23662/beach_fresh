<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Product
        </h2>
    </x-slot>

    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/products">
                @@csrf
                
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
            </form>
        </x-panel>
    </section>
</x-app-layout>
                   