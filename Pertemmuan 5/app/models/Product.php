<?php
// Model: Handles data logic
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = connectDatabase();
    }

    public function getAllProducts()
    {
        $query = $this->db->query("SELECT * FROM products");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
