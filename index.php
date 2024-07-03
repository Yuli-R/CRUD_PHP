<?php

include_once 'app/controllers/productController.php';

$controller = new ProductController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if($id) {
            $controller->edit($id);
        }
        break;
    case 'delete':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if($id) {
            $controller->delete($id);
        }
        break;
    default:
        $controller->index();
        break;
}
?>
