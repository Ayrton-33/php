<?php
include_once("config.php");
include_once("entidades/producto.php");
$pg = "Listado de productos";

$producto = new Producto();
$aProductos = $producto->obtenerTodos();

include_once("header.php")

?>

<div class="container">
    <div class="row">
        <div class="col-12 pt-5">
            <h1>Listado de productos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <table class="table table-hover border">
                <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($aProductos as $producto) : ?>
                    <tr>
                        <td><img src="files/<?php echo $producto->imagen; ?>" class="img-thumbnail"></td>
                        <td><?php echo $producto->nombre; ?></td>
                        <td><?php echo $producto->cantidad; ?></td>
                        <td>$ <?php echo number_format($producto->precio, 2, ",", "."); ?></td>
                        <td style="width: 110px;">
                            <a href="producto-formulario.php?id=<?php echo $producto->idproducto; ?>"><i class="fas fa-search"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>