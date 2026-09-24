<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS & Invoice System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .sidebar { min-height: 100vh; background-color: #0d1b2a; color: #fff; width: 240px; position: fixed; }
        .sidebar a { color: #adb5bd; text-decoration: none; padding: 12px 20px; display: block; font-weight: 500; }
        .sidebar a:hover, .sidebar a.active { background-color: #1b263b; color: #3a86ff; border-left: 4px solid #3a86ff; }
        .main-content { margin-left: 240px; padding: 20px; }
        .top-navbar { background-color: #0d6efd; color: #fff; padding: 12px 20px; }
        .card-stat { border-radius: 10px; color: #fff; border: none; }
    </style>
</head>
<body>

<div class="top-navbar d-flex justify-content-between align-items-center">
    <h5 class="m-0"><i class="fa-solid fa-bars me-2"></i> POS & Invoice System</h5>
    <div><i class="fa-solid fa-user-circle me-1"></i> Admin</div>
</div>

<div class="sidebar">
    <div class="py-3"></div>
    <a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>"><i class="fa-solid fa-house me-2"></i> Dashboard</a>
    <a href="pos.php" class="<?= basename($_SERVER['PHP_SELF']) == 'pos.php' ? 'active' : '' ?>"><i class="fa-solid fa-cash-register me-2"></i> POS Billing</a>
    <a href="sales.php" class="<?= basename($_SERVER['PHP_SELF']) == 'sales.php' ? 'active' : '' ?>"><i class="fa-solid fa-file-invoice me-2"></i> Sales Invoice</a>
    <a href="products.php" class="<?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>"><i class="fa-solid fa-box me-2"></i> Products</a>
    <a href="stock.php" class="<?= basename($_SERVER['PHP_SELF']) == 'stock.php' ? 'active' : '' ?>"><i class="fa-solid fa-boxes-stacked me-2"></i> Stock Management</a>
    <a href="reports.php" class="<?= basename($_SERVER['PHP_SELF']) == 'reports.php' ? 'active' : '' ?>"><i class="fa-solid fa-chart-line me-2"></i> Reports</a>
    <a href="#"><i class="fa-solid fa-right-from-bracket me-2"></i> Logout</a>
</div>

<div class="main-content">