<?php include 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fa-solid fa-chart-line"></i> Reports</h2>
    <form class="d-flex gap-2">
        <input type="date" class="form-control" value="2025-04-01">
        <input type="date" class="form-control" value="2025-04-24">
        <button class="btn btn-primary" type="button">Generate</button>
    </form>
</div>

<!-- Summary Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card card-stat bg-success p-3">
            <small>Total Sales</small>
            <h3>₹ 1,24,560</h3>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stat bg-primary p-3">
            <small>Total Orders</small>
            <h3>52</h3>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stat p-3" style="background-color: #8a2be2;">
            <small>Total Products Sold</small>
            <h3>320</h3>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stat bg-warning p-3 text-dark">
            <small>Total Profit</small>
            <h3>₹ 48,750</h3>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <!-- Chart Overview -->
    <div class="col-md-7">
        <div class="card p-3 shadow-sm h-100">
            <h5>Sales Report</h5>
            <div class="p-4 text-center text-muted border rounded mt-3" style="background: #f8f9fa;">
                <i class="fa-solid fa-chart-column fa-3x text-primary mb-2"></i>
                <p class="mb-0">[ Dynamic Sales vs Orders Bar Chart ]</p>
            </div>
        </div>
    </div>

    <!-- Top Products Table -->
    <div class="col-md-5">
        <div class="card p-3 shadow-sm h-100">
            <h5>Top Products</h5>
            <table class="table table-sm align-middle mt-2">
                <thead><tr><th>#</th><th>Product</th><th>Qty Sold</th><th>Amount</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Mobile Cover</td><td>45</td><td>₹22,500</td></tr>
                    <tr><td>2</td><td>Charger</td><td>32</td><td>₹15,360</td></tr>
                    <tr><td>3</td><td>Earphones</td><td>28</td><td>₹13,720</td></tr>
                    <tr><td>4</td><td>Power Bank</td><td>20</td><td>₹12,000</td></tr>
                    <tr><td>5</td><td>T-Shirt</td><td>18</td><td>₹9,000</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Report Type Buttons -->
<div class="d-flex gap-2">
    <button class="btn btn-primary">Sales Report</button>
    <button class="btn btn-outline-secondary">Purchase Report</button>
    <button class="btn btn-outline-secondary">Stock Report</button>
    <button class="btn btn-outline-secondary">Invoice Report</button>
</div>

</div>
</body>
</html>