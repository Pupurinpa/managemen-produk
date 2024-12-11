<?php
require_once 'db.php';

class Product {
    public static function getAll() {
        $connection = getDBConnection();
        $result = $connection->query("SELECT * FROM products");
        $products = [];
        
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        $connection->close();
        return $products;
    }

    public static function getById($id) {
        $connection = getDBConnection();
        $stmt = $connection->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        
        $stmt->close();
        $connection->close();
        return $product;
    }

    public static function create($name, $price) {
        $connection = getDBConnection();
        $stmt = $connection->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
        $stmt->bind_param("sd", $name, $price);
        $stmt->execute();
        
        $stmt->close();
        $connection->close();
    }

    public static function update($id, $name, $price) {
        $connection = getDBConnection();
        $stmt = $connection->prepare("UPDATE products SET name = ?, price = ? WHERE id = ?");
        $stmt->bind_param("sdi", $name, $price, $id);
        $stmt->execute();
        
        $stmt->close();
        $connection->close();
    }

    public static function delete($id) {
        $connection = getDBConnection();
        $stmt = $connection->prepare("DELETE FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        $stmt->close();
        $connection->close();
    }
}
?>
