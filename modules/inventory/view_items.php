<?php
include('../../config/db.php');
$items = mysqli_query($conn, "SELECT * FROM items");
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Location</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while($item = mysqli_fetch_assoc($items)) { ?>
        <tr>
            <td><?= $item['item_id'] ?></td>
            <td><?= $item['item_name'] ?></td>
            <td><?= $item['quantity'] ?></td>
            <td><?= $item['location'] ?></td>
            <td><a href="edit_item.php?id=<?= $item['item_id'] ?>">Edit</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
