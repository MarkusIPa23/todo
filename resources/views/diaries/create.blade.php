<x-layout>
    <x-slot:title>Izveidot dienasgrāmatas ierakstu</x-slot:title>

    <h1>Izveidot dienasgrāmatas ierakstu</h1>

    <form action="{{ route('diaries.store') }}" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="body">Body:</label>
        <textarea name="body" id="body" required></textarea>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>

        @error('title')<p style="color: red;">{{ $message }}</p>@enderror
        @error('body')<p style="color: red;">{{ $message }}</p>@enderror
        @error('date')<p style="color: red;">{{ $message }}</p>@enderror

        <button type="submit">Izveidot ierakstu</button>
    </form>
</x-layout>
