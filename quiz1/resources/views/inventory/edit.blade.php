<!DOCTYPE html>
<html>
<head>
    <title>Edit Inventory Item</title>
</head>
<body>
    <h1>Edit Item: {{ $inventoryItem->name }}</h1>

    <form method="POST" action="/inventory/{{ $inventoryItem->id }}">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $inventoryItem->name }}" required>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="{{ $inventoryItem->quantity }}" required>
        <label>Price:</label>
        <input type="number" name="price" value="{{ $inventoryItem->price }}" required>
        <button type="submit">Update Item</button>
    </form>

    <a href="/inventory">Back to Inventory</a>
</body>
</html>
