<!DOCTYPE html>
<html>
<head>
    <title>Create Inventory Item</title>
</head>
<body>
    <h1>Create a New Inventory Item</h1>

    <form method="POST" action="/inventory">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Quantity:</label>
        <input type="number" name="quantity" required>
        <label>Price:</label>
        <input type="number" name="price" required>
        <button type="submit">Create Item</button>
    </form>

    <a href="/inventory">Back to Inventory</a>
</body>
</html>
