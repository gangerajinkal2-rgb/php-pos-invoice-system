<?php include 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2><i class="fa-solid fa-file-invoice"></i> Sales Invoice</h2>
    <div>
        <button class="btn btn-primary" onclick="window.print()"><i class="fa-solid fa-print"></i> Print</button>
        <button class="btn btn-success"><i class="fa-solid fa-file-pdf"></i> Download PDF</button>
    </div>
</div>

<div class="card p-4 shadow-sm bg-white">
    <div class="d-flex justify-content-between">
        <div>
            <h4>ABC Traders</h4>
            <p class="mb-0 text-muted">123, Main Road, Surat - 395001, Gujarat, India</p>
            <p class="mb-0 text-muted">GSTIN : 24ABCDE1234F125</p>
        </div>
        <div class="text-end">
            <h6>Invoice No: <strong>INV-0015</strong></h6>
            <p class="mb-0 text-muted">Date: 24 Apr 2025</p>
            <p class="mb-0 text-muted">Payment: Cash</p>
        </div>
    </div>
    <hr>
    <table class="table table-bordered align-middle mt-3">
        <thead>
            <tr><th>#</th><th>Product</th><th>HSN/SAC</th><th>Qty</th><th>Rate</th><th>Amount</th></tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Mobile Cover</td><td>8517</td><td>1</td><td>250</td><td>250</td></tr>
            <tr><td>2</td><td>Charger</td><td>8504</td><td>1</td><td>450</td><td>450</td></tr>
            <tr><td>3</td><td>Earphones</td><td>8518</td><td>1</td><td>320</td><td>320</td></tr>
            <tr><td>4</td><td>T-Shirt</td><td>6109</td><td>1</td><td>499</td><td>499</td></tr>
        </tbody>
    </table>
    <div class="row justify-content-end">
        <div class="col-md-4">
            <div class="d-flex justify-content-between"><span>Sub Total</span><span>1,519</span></div>
            <div class="d-flex justify-content-between"><span>CGST (9%)</span><span>136.71</span></div>
            <div class="d-flex justify-content-between"><span>SGST (9%)</span><span>136.71</span></div>
            <hr>
            <div class="d-flex justify-content-between fw-bold fs-5"><span>Total Amount</span><span>₹ 1,793</span></div>
        </div>
    </div>
</div>

</div>
</body>
</html>