<?php 

include_once("config.php");
include_once("entidades/cliente.php");
include_once("entidades/producto.php");
include_once("entidades/venta.php");

$venta = new Venta();

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        $venta->cargarFormulario($_REQUEST);

        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            $venta->actualizar();
            $msg["texto"] = "Actualizado correctamente";
            $msg["codigo"] = "alert-success";
        } else {
            $venta->insertar();
            $msg["texto"] = "Insertado correctamente";
            $msg["codigo"] = "alert-success";
        }

    } else if (isset($_POST["btnBorrar"])) {
        $venta->cargarFormulario($_REQUEST);
        $venta->eliminar();
        header("Location: venta-listado.php");
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $tipoProducto->cargarFormulario($_REQUEST);
    $tipoProducto->obtenerPorId();
}

$cliente = new Cliente();
$aClientes = $cliente->obtenerTodos();

$producto = new Producto();
$aProductos = $producto->obtenerTodos();

$pg = "Edición de ventas";
include_once("header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <h1>Venta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <a href="venta-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 form-group mt-4">
            <?php if(isset($msg) && $msg != ""): ?>
               <div class="alert alert-danger" role="alert">
                   <?php echo $msg; ?>
               </div>
            <?php endif; ?>    
            <label for="txtFechaNac">Fecha y hora:</label>
            <select class="form-control d-inline" name="txtDia" id="txtDia" style="width: 80px">
            <option selected="" disabled="">DD</option>
                        <?php for($i=1; $i<=31; $i++): ?>
                            <?php if(date("d") == $i): ?>
                                <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
            </select>
            <select class="form-control d-inline" name="txtMes" id="txtMes" style="width: 80px">
            <option selected="" disabled="">MM</option>
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                            <?php if (date("m") == $i): ?>
                                <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endif;?>
                        <?php endfor;?>
            </select>
            <select class="form-control d-inline" name="txtAnio" id="txtAnio" style="width: 100px">
            <option selected="" disabled="">YYYY</option>
                        <?php for ($i = 2020 ; $i <= date("Y"); $i++): ?>
                            <?php if (date("Y") == $i): ?>
                                <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endif;?>
                        <?php endfor;?>
            </select>
            <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtTime" id="txtTime">
        </div>
         <div class="col-6 mt-4 form-group">
            <label for="IstCliente">Cliente:</label>
             <select name="IstCliente" id="IstCliente" class="form-control selectpicker">
             <option value="" disabled selected>Seleccionar</option>
                <?php foreach ($aClientes as $cliente) : ?>
                    <?php if ($cliente->idcliente == $venta->fk_idcliente) : ?>
                        <option selected value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nombre; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $$cliente->idcliente; ?>"><?php echo $cliente->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
             </select>
         </div>
                 
         <div class="col-6 mt-4 form-group">
            <label for="IstProducto">Producto:</label>
             <select name="IstProducto" id="IstProducto" class="form-control selectpicker">
             <option value="" disabled selected>Seleccionar</option>
                <?php foreach ($aProductos as $producto) : ?>
                    <?php if ($producto->idproducto == $venta->fk_idproducto) : ?>
                        <option selected value="<?php echo $producto->idproducto; ?>"><?php echo $producto->nombre; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $producto->idproducto; ?>"><?php echo $producto->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
             </select>
         </div>
        <div class="col-6 mt-4 form-group">
            <label for="txtPrecioUnitario">Precio Unitario:</label>
            <input type="text" required="" name="txtPrecioUnitario" id="txtPrecioUnitario" placeholder="$0" class="form-control">
        </div>
        <div class="col-6 mt-4 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="number" required="" name="txtCantidad" id="txtCantidad" class="form-control">
        </div>
        <div class="col-6 mt-4 form-group">
            <label for="txtTotal">Total:</label>
            <input type="number" required="" name="txtTotal" id="txtTotal" class="form-control">
        </div>    
    </div>
</div>