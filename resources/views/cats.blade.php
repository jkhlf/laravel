<x-layout>
    <x-slot:namesection>
        Cat Photos
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($cats as $cat)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img 
                    src="{{ $cat['url'] }}" 
                    alt="Cat Photo" 
                    class="w-full h-64 object-cover"
                    loading="lazy"
                >
                <div class="p-4">
                    <p class="text-sm text-gray-600">ID: {{ $cat['id'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6 text-center">
        <p class="text-gray-600">Photos provided by <a href="https://thecatapi.com" class="text-blue-600 hover:underline">TheCatAPI</a></p>
    </div>
</x-layout>
