<?php 

include_once("config.php");
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
            <a href="venta.php" class="btn btn-primary mr-2">Listado</a>
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
            </select>
            <select class="form-control d-inline" name="txtMes" id="txtMes" style="width: 80px">
            <option selected="" disabled="">MM</option>
            </select>
            <select class="form-control d-inline" name="txtAnio" id="txtAnio" style="width: 100px">
            <option selected="" disabled="">YYYY</option>
            </select>
            <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtTime" id="txtTime">
        </div>
         <div class="col-6 mt-4 form-group">
            <label for="IstCliente">Cliente:</label>
             <select name="IstCliente" id="IstCliente" class="form-control selectpicker">
                <option value="" disabled selected>Seleccionar</option>
             </select>
         </div>
                 
         <div class="col-6 mt-4 form-group">
            <label for="IstProducto">Producto:</label>
             <select name="IstProducto" id="IstProducto" class="form-control selectpicker">
                <option value="" disabled selected>Seleccionar</option>
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