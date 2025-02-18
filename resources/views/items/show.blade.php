<!DOCTYPE html>
<html>
    <head>
        <title>Item List</title>
    </head>
    <body>
        <h1>Items</h1>
        @if(session('success'))
        <p>{{ route('succes') }}</p>
        @endif
        <a href="{{('items.create') }}">Add Item</a>
        <ul>
            @foreach ($items as item)
            <li>
                {{ $item->name }} -
                <a href="{{('items.edit', $item) }}">Edit</a>
                <form action="{{('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        </ul>
    </body>
</html>