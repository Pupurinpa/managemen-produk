<?php
// index.php
require_once 'controllers/ProductController.php';

$controller = new ProductController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'view':
        $controller->view($id);
        break;
    default:
        $controller->index();
        break;
}
?>
