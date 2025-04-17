<x-layout>
    <x-slot:title>
        Visi uzdevumi
    </x-slot:title>

    <h1>Visi uzdevumi</h1>

    <a href="{{ route('todos.create') }}" class="btn">Izveidot jaunu uzdevumu</a>

    @if ($todos->isEmpty())
        <p>Nav neviena veicamā uzdevuma.</p>
    @else
        <ul>
            @foreach ($todos as $todo)
                <li>
                    <a href="{{ route('todos.show', $todo) }}">{{ $todo->content }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</x-layout>
