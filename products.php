<?php include 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2><i class="fa-solid fa-box"></i> Products</h2>
    <button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Product</button>
</div>

<div class="card p-3 shadow-sm">
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM products");
            while($p = $stmt->fetch()):
            ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td>₹<?= $p['price'] ?></td>
                <td><?= $p['stock'] ?></td>
                <td><span class="badge bg-<?= $p['status'] == 'In Stock' ? 'success' : 'warning' ?>"><?= $p['status'] ?></span></td>
                <td>
                    <button class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</div>
</body>
</html>