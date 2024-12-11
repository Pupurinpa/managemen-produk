<?php
require_once 'models/Product.php';

class ProductController {
    public function index() {
        $products = Product::getAll();
        include 'views/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            Product::create($_POST['name'], $_POST['price']);
            header('Location: index.php');
        } else {
            include 'views/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            Product::update($id, $_POST['name'], $_POST['price']);
            header('Location: index.php');
        } else {
            $product = Product::getById($id);
            include 'views/edit.php';
        }
    }

    public function delete($id) {
        Product::delete($id);
        header('Location: index.php');
    }

    public function view($id) {
        $product = Product::getById($id);
        include 'views/view.php';
    }
}
?>
