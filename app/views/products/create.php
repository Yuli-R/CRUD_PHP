<!DOCTYPE html>
<html>

<head>
    <?php require_once "./app/views/inc/head.php"; ?>
    <title>Crear producto nuevo</title>
</head>

<body>
    <?php require_once "./app/views/inc/navbar.php"; ?>
    <h1 class="p-2">Crear producto nuevo</h1>
    <a class="btn btn-primary align m-2" href="index.php">Volver a la lista</a>
    <div class="container p-5 col-sm-8">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <form method="POST" action="">
                <div class="form-group row mx-sm-3 mb-2 ">
                    <label class="col-sm-4 col-form-label" for="nombre_producto">Nombre del producto </label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="text" name="nombre_producto" required>
                    </div>
                </div>
                <div class="form-group row mx-sm-3 mb-2">
                    <label class="col-sm-4 col-form-label" for="referencia">Referencia</label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="text" name="referencia" required>
                    </div>
                </div>
                <div class="form-group row mx-sm-3 mb-2">
                    <label class="col-sm-4 col-form-label" for="precio">Precio</label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="number" name="precio" required>
                    </div>
                </div>
                <div class="form-group row mx-sm-3 mb-2">
                    <label class="col-sm-4 col-form-label" for="peso">Peso</label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="number" name="peso" required>
                    </div>
                </div>
                <div class="form-group row mx-sm-3 mb-2">

                    <label class="col-sm-4 col-form-label" for="categoria">Categoría</label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="text" name="categoria" required>
                    </div>
                </div>
                <div class="form-group row mx-sm-3 mb-2">
                    <label class="col-sm-4 col-form-label" for="stock">Stock</label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="number" name="stock" required>
                    </div>
                </div>
                <div class="form-group row mx-sm-3 mb-2">
                    <label class="col-sm-4 col-form-label" for="fecha_creacion ">Fecha de creación</label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="date" name="fecha_creacion" required>
                    </div>
                </div>
                <div class="form-group row  mx-sm-3 mb-2">
                    <label class="col-sm-4 col-form-label" for="fecha_ultima_venta">Fecha de la ultima venta</label>
                    <div  class="col-sm-8">
                        <input class="form-control" type="datetime-local" name="fecha_ultima_venta">
                    </div>
                </div>
                <div  class="col text-center mb-2">
                    <input class="btn btn-success btn-block" type="submit" value="Crear Producto">
                </div>
            </form>
        </div>
    </div>
</body>

</html>