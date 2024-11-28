<?php
// Entry point of the application
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/app/Controllers/ProductController.php';

$controller = new ProductController();
$controller->showProducts();
