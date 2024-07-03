<!DOCTYPE html>
<html>
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
    <title>CRUD</title>
</head>

<body>
    <?php require_once "./app/views/inc/navbar.php"; ?>
    <h1 class="p-2">>Productos en inventario</h1>
    <div class="container p-5 col-sm-10">
        <div class="row d-flex justify-content-center align-items-center h-100">
    <table class="table table-striped ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de producto</th>
                <th scope="col">Referencia</th>
                <th scope="col">Precio</th>
                <th scope="col">Peso</th>
                <th scope="col">Categoría</th>
                <th scope="col">Stock</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Fecha de ultima venta</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php foreach($products as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['nombre_producto']; ?></td>
            <td><?php echo $product['referencia']; ?></td>
            <td><?php echo $product['precio']; ?></td>
            <td><?php echo $product['peso']; ?></td>
            <td><?php echo $product['categoria']; ?></td>
            <td><?php echo $product['stock']; ?></td>
            <td><?php echo $product['fecha_creacion']; ?></td>
            <td><?php echo $product['fecha_ultima_venta']; ?></td>
            <td>
                <a class="btn btn-primary" href="index.php?action=edit&id=<?php echo $product['id']; ?>">Editar</a>
                <a class="btn btn-danger" href="index.php?action=delete&id=<?php echo $product['id']; ?>">Borrar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
    <a class="btn btn-success" href="index.php?action=create">Agregar productos</a>
    </div>
</body>
</html>
