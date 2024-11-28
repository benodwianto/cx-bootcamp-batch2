<?php
// Controller
require_once __DIR__ . '/../Models/Product.php';

// class ProductController
// {
//     public function showProducts()
//     {
//         $productModel = new Product();
//         $products = $productModel->getAllProducts();

//         require_once __DIR__ . '/../Views/product_list.php';
//     }
// }

class ProductController {

    public function showProducts() {
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        require_once __DIR__ . '/../Views/product_list.php';
    }
}
