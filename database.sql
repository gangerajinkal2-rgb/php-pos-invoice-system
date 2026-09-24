CREATE DATABASE IF NOT EXISTS `pos_db`;
USE `pos_db`;

-- Category Table
CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL
);

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Accessories'), (2, 'Clothing'), (3, 'Footwear');

-- Products Table
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `category_id` INT,
  `price` DECIMAL(10,2) NOT NULL,
  `stock` INT NOT NULL DEFAULT 0,
  `min_stock` INT DEFAULT 10,
  `hsn_code` VARCHAR(20) DEFAULT '8517',
  `status` ENUM('In Stock', 'Low Stock', 'Out of Stock') DEFAULT 'In Stock'
);

INSERT INTO `products` (`id`, `name`, `category_id`, `price`, `stock`, `min_stock`, `hsn_code`, `status`) VALUES
(1, 'Mobile Cover', 1, 250.00, 50, 10, '8517', 'In Stock'),
(2, 'Charger', 1, 450.00, 30, 10, '8504', 'In Stock'),
(3, 'Earphones', 1, 320.00, 45, 10, '8518', 'In Stock'),
(4, 'Power Bank', 1, 850.00, 20, 10, '8504', 'In Stock'),
(5, 'T-Shirt', 2, 499.00, 60, 10, '6109', 'In Stock'),
(6, 'Jeans', 2, 999.00, 40, 10, '6203', 'In Stock'),
(7, 'Shoes', 3, 1299.00, 5, 10, '6403', 'Low Stock'),
(8, 'Backpack', 1, 1499.00, 25, 10, '4202', 'In Stock');

-- Invoices Table
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `invoice_no` VARCHAR(50) NOT NULL UNIQUE,
  `customer_name` VARCHAR(255) NOT NULL,
  `customer_phone` VARCHAR(20),
  `sub_total` DECIMAL(10,2) NOT NULL,
  `cgst` DECIMAL(10,2) NOT NULL,
  `sgst` DECIMAL(10,2) NOT NULL,
  `total_amount` DECIMAL(10,2) NOT NULL,
  `payment_method` VARCHAR(50) DEFAULT 'Cash',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `invoices` (`invoice_no`, `customer_name`, `customer_phone`, `sub_total`, `cgst`, `sgst`, `total_amount`, `payment_method`, `created_at`) VALUES
('INV-0015', 'Rahul Kumar', '9876543210', 1519.00, 136.71, 136.71, 1793.00, 'Cash', '2025-04-24 14:45:00'),
('INV-0014', 'Priya Sharma', '9876543211', 1800.00, 162.00, 162.00, 2124.00, 'UPI', '2025-04-24 11:30:00');