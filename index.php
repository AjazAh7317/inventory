<?php
session_start();
include('config/db.php');
include('templates/header.php');
?>

<div class="container">
    <h1>Inventory Management Dashboard</h1>
    <p>Welcome to the Inventory Management System. Use the navigation to manage your inventory, purchases, sales, suppliers, and more.</p>
</div>

<?php include('templates/footer.php'); ?>
