<x-layout>
    <h1 id="title">Your Grocery List</h1>
    @auth
        <form id="create-form">
            @csrf
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <input type="number" max="999999.99" step=".01" name="price" placeholder="Price" value="{{ old('price') }}">
            <input type="submit" value="create">
        </form>

        <table id="list">
            @foreach ($items as $item)
                <x-list-item :item="$item" />
            @endforeach
        </table>
    @else
        <!-- ADD TEMPORARY LIST IF NOT LOGGED IN -->
    @endauth
</x-layout>