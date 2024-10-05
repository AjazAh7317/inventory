<?php
include('../../config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_name = $_POST['item_name'];
    $category_id = $_POST['category_id'];
    $quantity = $_POST['quantity'];
    $location = $_POST['location'];

    $query = "INSERT INTO items (item_name, category_id, quantity, location) VALUES ('$item_name', '$category_id', '$quantity', '$location')";
    mysqli_query($conn, $query);
    header('Location: view_items.php');
}
?>

<form method="POST">
    <label>Item Name:</label><input type="text" name="item_name" required><br>
    <label>Category ID:</label><input type="number" name="category_id" required><br>
    <label>Quantity:</label><input type="number" name="quantity" required><br>
    <label>Location:</label><input type="text" name="location" required><br>
    <button type="submit">Add Item</button>
</form>
