<x-layout>
    <x-slot:title>
        {{ $diary->title }}
    </x-slot:title>

    <h1>{{ $diary->title }}</h1>
    <p>{{ $diary->body }}</p>
    <p>{{ $diary->date }}</p>

    <a href="{{ route('diaries.index') }}">Atgriezties uz visiem ierakstiem</a>
</x-layout>
