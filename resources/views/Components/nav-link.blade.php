@props(['active' => false])

<a class="{{ $active ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800' }} text-sm font-semibold rounded-lg px-4 py-2 transition duration-300 ease-in-out transform hover:scale-105"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}>
     {{ $slot }}
</a>
