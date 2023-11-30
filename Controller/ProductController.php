<?php

class ProductController {
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function createProduct($productData) {
        $stmt = $this->conn->prepare("INSERT INTO produtos (product, description, image, category, cadastro_id) VALUES (:product, :description, :image, :category, :cadastro_id)");

        $stmt->bindParam(":product", $productData['product']);
        $stmt->bindParam(":description", $productData['description']);
        $stmt->bindParam(":image", $productData['image']);
        $stmt->bindParam(":category", $productData['category']);
        $stmt->bindParam(":cadastro_id", $productData['cadastro_id']);

        $stmt->execute();
    }

    public function getProducts() {
        $stmt = $this->conn->prepare("SELECT * FROM produtos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
