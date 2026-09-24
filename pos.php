<?php include 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<h2><i class="fa-solid fa-cart-shopping"></i> POS Billing</h2>

<div class="row mt-3">
    <!-- Products List -->
    <div class="col-md-7">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search product by name / barcode...">
            <button class="btn btn-primary"><i class="fa-solid fa-search"></i> Search</button>
        </div>
        <div class="row g-3">
            <?php
            $stmt = $pdo->query("SELECT * FROM products");
            while($row = $stmt->fetch()):
            ?>
            <div class="col-md-3">
                <div class="card text-center p-2 shadow-sm h-100">
                    <div class="card-body p-1">
                        <h6><?= $row['name'] ?></h6>
                        <p class="text-primary fw-bold mb-0">₹<?= $row['price'] ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Bill Details -->
    <div class="col-md-5">
        <div class="card p-3 shadow-sm">
            <h5>Current Bill</h5>
            <div class="mb-2">
                <label>Customer:</label>
                <select class="form-select form-select-sm">
                    <option>Walk-in Customer</option>
                </select>
            </div>
            <table class="table table-sm text-center align-middle">
                <thead><tr><th>Product</th><th>Qty</th><th>Price</th><th>Total</th></tr></thead>
                <tbody>
                    <tr><td>Mobile Cover</td><td>1</td><td>250</td><td>250</td></tr>
                    <tr><td>Charger</td><td>1</td><td>450</td><td>450</td></tr>
                    <tr><td>Earphones</td><td>1</td><td>320</td><td>320</td></tr>
                    <tr><td>T-Shirt</td><td>1</td><td>499</td><td>499</td></tr>
                </tbody>
            </table>
            <hr>
            <div class="d-flex justify-content-between"><span>Sub Total</span><span>₹ 1,519</span></div>
            <div class="d-flex justify-content-between"><span>GST (18%)</span><span>₹ 274</span></div>
            <div class="d-flex justify-content-between fw-bold fs-5 text-primary mt-2">
                <span>Grand Total</span><span>₹ 1,793</span>
            </div>
            <button class="btn btn-success w-100 mt-3"><i class="fa-solid fa-check-circle"></i> Process Payment</button>
        </div>
    </div>
</div>

</div>
</body>
</html>