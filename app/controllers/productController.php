<?php
include_once 'app/models/product.php';
include_once 'app/models/database.php';

class productController {
    private $db;
    private $product;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);
    }

    public function index() {
        $stmt = $this->product->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'app/views/products/index.php';
    }

    public function create() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->product->nombre_producto = $_POST['nombre_producto'];
            $this->product->referencia = $_POST['referencia'];
            $this->product->precio = $_POST['precio'];
            $this->product->peso = $_POST['peso'];
            $this->product->categoria = $_POST['categoria'];
            $this->product->stock = $_POST['stock'];
            $this->product->fecha_creacion = $_POST['fecha_creacion'];
            $this->product->fecha_ultima_venta = $_POST['fecha_ultima_venta'];

            if($this->product->create()) {
                header("Location: ./index.php");
            } else {
                echo "Error creating product.";
            }
        } else {
            include 'app/views/products/create.php';
        }
    }

    public function edit($id) {
        $this->product->id = $id;
        $this->product->readOne();

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->product->nombre_producto = $_POST['nombre_producto'];
            $this->product->referencia = $_POST['referencia'];
            $this->product->precio = $_POST['precio'];
            $this->product->peso = $_POST['peso'];
            $this->product->categoria = $_POST['categoria'];
            $this->product->stock = $_POST['stock'];
            $this->product->fecha_creacion = $_POST['fecha_creacion'];
            $this->product->fecha_ultima_venta = $_POST['fecha_ultima_venta'];

            if($this->product->update()) {
                header("Location: ./index.php");
            } else {
                echo "Error updating product.";
            }
        } else {
            include 'app/views/products/edit.php';
        }
    }

    public function delete($id) {
        $this->product->id = $id;
        if($this->product->delete()) {
            header("Location: ./index.php");
        } else {
            echo "Error deleting product.";
        }
    }
}
?>
