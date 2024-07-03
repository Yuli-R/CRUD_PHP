<?php
include_once 'database.php';

class product {
    private $conn;
    private $table_name = "products";

    public $id;
    public $nombre_producto;
    public $referencia;
    public $precio;
    public $peso;
    public $categoria;
    public $stock;
    public $fecha_creacion;
    public $fecha_ultima_venta;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nombre_producto, referencia, precio, peso, categoria, stock, fecha_creacion, fecha_ultima_venta) VALUES (:nombre_producto, :referencia, :precio, :peso, :categoria, :stock, :fecha_creacion, :fecha_ultima_venta)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nombre_producto', $this->nombre_producto);
        $stmt->bindParam(':referencia', $this->referencia);
        $stmt->bindParam(':precio', $this->precio);
        $stmt->bindParam(':peso', $this->peso);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':stock', $this->stock);
        $stmt->bindParam(':fecha_creacion', $this->fecha_creacion);
        $stmt->bindParam(':fecha_ultima_venta', $this->fecha_ultima_venta);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nombre_producto = $row['nombre_producto'];
        $this->referencia = $row['referencia'];
        $this->precio = $row['precio'];
        $this->peso = $row['peso'];
        $this->categoria = $row['categoria'];
        $this->stock = $row['stock'];
        $this->fecha_creacion = $row['fecha_creacion'];
        $this->fecha_ultima_venta = $row['fecha_ultima_venta'];
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nombre_producto = :nombre_producto, referencia = :referencia, precio = :precio, peso = :peso, categoria = :categoria, stock = :stock, fecha_creacion = :fecha_creacion, fecha_ultima_venta = :fecha_ultima_venta WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nombre_producto', $this->nombre_producto);
        $stmt->bindParam(':referencia', $this->referencia);
        $stmt->bindParam(':precio', $this->precio);
        $stmt->bindParam(':peso', $this->peso);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':stock', $this->stock);
        $stmt->bindParam(':fecha_creacion', $this->fecha_creacion);
        $stmt->bindParam(':fecha_ultima_venta', $this->fecha_ultima_venta);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
