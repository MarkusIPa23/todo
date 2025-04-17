<x-layout>
    <x-slot:title>
        Visas dienasgrāmatas ieraksti
    </x-slot:title>

    <h1>Visi dienasgrāmatas ieraksti</h1>

    <a href="{{ route('diaries.create') }}">Izveidot jaunu ierakstu</a>

    @foreach ($diaries as $diary)
        <div>
            <h3>{{ $diary->title }}</h3>
            <p>{{ $diary->body }}</p>
            <p>{{ $diary->date }}</p>
            <a href="{{ route('diaries.show', $diary) }}">Skatīt vairāk</a>
        </div>
    @endforeach
</x-layout>
