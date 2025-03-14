<!DOCTYPE html>
<html>
<head>
    <title>Inventory List</title>
</head>
<body>
    <h1>Inventory List</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach ($inventoryItems as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->quantity }}</td>
            <td>${{ $item->price }}</td>
            <td>
                <a href="/inventory/{{ $item->id }}">Edit</a>
                <form method="POST" action="/inventory/{{ $item->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/inventory/create">Add New Item</a>
</body>
</html>
