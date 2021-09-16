{{-- @props(['items']) --}}

<x-layout>
    <h1 id="title">Your Grocery List</h1>
    @auth
        <form id="create-form">
            @csrf
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <input type="number" step=".01" name="price" placeholder="Price" value="{{ old('price') }}" required>
            <input type="submit" value="create">
        </form>

        <table id="list">
            <x-list-item />
        </table>
    @else
        <!-- ADD TEMPORARY LIST IF NOT LOGGED IN -->
    @endauth
</x-layout>