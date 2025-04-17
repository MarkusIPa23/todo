<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>

    <h1>Izveidot uzdevumu</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="content" value="{{ old('content') }}" placeholder="Uzdevuma nosaukums">
        
        @error("content")
           <p>{{ $message }}</p>
        @enderror

        <button>Saglabāt</button>
    </form>
</x-layout>
