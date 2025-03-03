<x-layout>
    <x-slot:namesection>
        Dashboard
    </x-slot>

    @foreach ( $cats as $cats )
        <li>{{ $cats['name'] }}: Color {{ $cats['color'] }} </li>
    @endforeach

</x-layout>