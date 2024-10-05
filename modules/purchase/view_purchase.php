<?php
include('../../config/db.php');
$purchases = mysqli_query($conn, "SELECT * FROM purchases");
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Item</th>
            <th>Supplier</th>
            <th>Quantity</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php while($purchase = mysqli_fetch_assoc($purchases)) { ?>
        <tr>
            <td><?= $purchase['purchase_id'] ?></td>
            <td><?= $purchase['item_id'] ?></td>
            <td><?= $purchase['supplier_id'] ?></td>
            <td><?= $purchase['quantity'] ?></td>
            <td><?= $purchase['purchase_date'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
