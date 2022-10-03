<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("config.php");
include_once("entidades/producto.php");
include_once("entidades/tipoproducto.php");

$producto = new  Producto();

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        $producto->cargarFormulario($_REQUEST);

        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            $producto->actualizar();
            $msg["texto"] = "Actualizado correctamente";
            $msg["codigo"] = "alert-success";
        } else {
            $producto->insertar();
            $msg["texto"] = "Insertado correctamente";
            $msg["codigo"] = "alert-succes";
        }
    } else if (isset($_POST["btnBorrar"])) {
        $producto->cargarFormulario($_REQUEST);
        $producto->eliminar();
        header("Location: producto-listado.php");
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $producto->cargarFormulario($_REQUEST);
    $producto->obtenerPorId();
}

$tipoProducto = new TipoProducto();
$aTipoProductos = $tipoProducto->obtenerTodos();

include_once("header.php");
?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<div class="container">
    <div class="row">
        <div class="col-12 pt-5">
            <h1>Productos</h1>
        </div>
    </div>
    <?php if (isset($msg)) : ?>
        <div class="row">
            <div class="col-12">
                <div class="alert <?php echo $msg["codigo"]; ?>" role="alert">
                    <?php echo $msg["texto"]; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 mt-4">
            <a href="producto-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mt-4 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required="" name="txtNombre" id="txtNombre" class="form-control" value="<?php echo $producto->nombre; ?>>">
        </div>
        <div class="col-6 mt-4 form-group">
            <label for="IstListadoDeProductos">Listado de productos:</label>
            <select name="IstListadoProductos" id="IstListadoProductos" class="form-control">
                <option value="" disabled selected>Seleccionar</option>
                <?php foreach ($aTipoProductos as $tipoProducto) : ?>
                    <?php if ($producto->fk_idtipoproducto == $tipoProducto->idtipoproducto) : ?>
                        <option selected value="<?php echo $tipoProducto->idtipoproducto; ?>"><?php echo $tipoProducto->nombre; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $tipoProducto->idtipoproducto; ?>"><?php echo $tipoProducto->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-6 mt-4 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="number" required="" name="txtCantidad" id="txtCantidad" class="form-control" value="<?php echo $producto->cantidad; ?>>">
        </div>
        <div class="col-6 mt-4 form-group">
            <label for="txtPrecio">Precio:</label>
            <input type="text" required="" name="txtPrecio" id="txtPrecio" placeholder="0" class="form-control" value="<?php echo $producto->precio; ?>>">>
        </div>
        <div class="col-12 mt-4 form-group">
            <label for="txtCorreo">Descripción:</label>
            <textarea type="text" required="" name="txtDescripcion" id="txtDescripcion">value="<?php echo $producto->descripcion; ?>>"></textarea>
        </div>
        <div class="col-6 mt-4 form-group">
            <label for="fileImagen">Imagen:</label>
            <input type="file" class="form-control-file" name="imagen" id="archivo">
            <img src="files/" class="img-thumbnail">
        </div>
    </div>
</div>




<script>
    ClassicEditor
        .create(document.querySelector('#txtDescripcion'))
        .catch(error => {
            console.error(error);
        });
</script>