<?php
include('../../config/db.php');
$item_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $location = $_POST['location'];

    $query = "UPDATE items SET item_name='$item_name', quantity='$quantity', location='$location' WHERE item_id='$item_id'";
    mysqli_query($conn, $query);
    header('Location: view_items.php');
}

$item = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM items WHERE item_id='$item_id'"));
?>

<form method="POST">
    <label>Item Name:</label><input type="text" name="item_name" value="<?= $item['item_name'] ?>" required><br>
    <label>Quantity:</label><input type="number" name="quantity" value="<?= $item['quantity'] ?>" required><br>
    <label>Location:</label><input type="text" name="location" value="<?= $item['location'] ?>" required><br>
    <button type="submit">Update Item</button>
</form>
