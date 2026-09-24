<?php include 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fa-solid fa-house"></i> Dashboard</h2>
    <span class="text-muted"><i class="fa-regular fa-calendar"></i> Today: <?= date('d M Y'); ?></span>
</div>

<!-- Stats Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card card-stat bg-primary p-3">
            <small>Total Sales</small>
            <h3>₹ 48,750</h3>
            <small><i class="fa-solid fa-arrow-up"></i> 12% vs yesterday</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stat bg-success p-3">
            <small>Total Orders</small>
            <h3>18</h3>
            <small><i class="fa-solid fa-arrow-up"></i> 8% vs yesterday</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stat p-3" style="background-color: #8a2be2;">
            <small>Total Products</small>
            <h3>125</h3>
            <small>Active</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stat bg-warning p-3 text-dark">
            <small>Total Stock</small>
            <h3>8,420</h3>
            <small>Items</small>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card p-3 shadow-sm">
            <h5>Low Stock Alert</h5>
            <table class="table align-middle mt-2">
                <thead><tr><th>Product</th><th>Stock</th><th>Status</th></tr></thead>
                <tbody>
                    <tr><td>Paracetamol 500mg</td><td>5</td><td><span class="badge bg-danger">Low</span></td></tr>
                    <tr><td>Cold Drink</td><td>8</td><td><span class="badge bg-danger">Low</span></td></tr>
                    <tr><td>Biscuits</td><td>12</td><td><span class="badge bg-success">OK</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card p-3 shadow-sm">
            <h5>Recent Invoices</h5>
            <table class="table table-hover align-middle mt-2">
                <thead><tr><th>Invoice No.</th><th>Customer</th><th>Amount</th><th>Date</th></tr></thead>
                <tbody>
                    <tr><td>INV-0015</td><td>Rahul Kumar</td><td>₹2,450</td><td>24 Apr</td></tr>
                    <tr><td>INV-0014</td><td>Priya Sharma</td><td>₹1,800</td><td>24 Apr</td></tr>
                    <tr><td>INV-0013</td><td>Amit Patel</td><td>₹3,200</td><td>23 Apr</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</body>
</html>