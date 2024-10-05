<?php
include('../../config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_POST['item_id'];
    $supplier_id = $_POST['supplier_id'];
    $quantity = $_POST['quantity'];
    $purchase_date = $_POST['purchase_date'];

    $query = "INSERT INTO purchases (item_id, supplier_id, quantity, purchase_date) VALUES ('$item_id', '$supplier_id', '$quantity', '$purchase_date')";
    mysqli_query($conn, $query);
    header('Location: view_purchase.php');
}
?>

<form method="POST">
    <label>Item ID:</label><input type="number" name="item_id" required><br>
    <label>Supplier ID:</label><input type="number" name="supplier_id" required><br>
    <label>Quantity:</label><input type="number" name="quantity" required><br>
    <label>Purchase Date:</label><input type="date" name="purchase_date" required><br>
    <button type="submit">Add Purchase</button>
</form>
