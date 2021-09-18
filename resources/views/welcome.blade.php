<x-layout>
    <h1 id="title">Your Grocery List</h1>
    @auth
        <form id="create-form">
            @csrf
            <input type="text" maxlength="20" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <input type="number" max="999999.99" step=".01" name="price" placeholder="Price" value="{{ old('price') }}">
            <input type="submit" value="create">
        </form>

        <table id="list">
            @foreach ($items as $item)
                <x-list-item :item="$item" />
            @endforeach
        </table>
    @else
        <h2 style="text-align: center">Login to start creating your grocery list</h2>
    @endauth
</x-layout>