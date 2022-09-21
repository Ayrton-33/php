<?php 

include_once("config.php");
include_once("header.php");

?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
     <div class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1>Productos</h1>
            </div>
        </div>
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
                        <input type="text" required="" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="col-6 mt-4 form-group">
                        <label for="IstListadoDeProductos">Listado de productos:</label>
                        <select name="IstListadoProductos" id="IstListadoProductos" class="form-control">
                            <option value="" disabled selected>Seleccionar</option>
                        </select>
                    </div>
                 
                    <div class="col-6 mt-4 form-group">
                        <label for="txtCantidad">Cantidad:</label>
                        <input type="number" required="" name="txtCantidad" id="txtCantidad" class="form-control">
                    </div>
                    <div class="col-6 mt-4 form-group">
                        <label for="txtPrecio">Precio:</label>
                        <input type="text" required="" name="txtPrecio" id="txtPrecio" placeholder="0" class="form-control">
                    </div>
                    <div class="col-12 mt-4 form-group">
                        <label for="txtCorreo">Descripción:</label>
                        <textarea type="text" required="" name="txtDescripcion" id="txtDescripcion"></textarea>
                    </div>
                    <div class="col-6 mt-4 form-group">
                        <label for="fileImagen">Imagen:</label>
                        <input type="file" class="form-control-file" name="imagen" id="imagen">
                        <img src="files/" class="img-thumbnail">
                    </div>        
        </div>
    </div>   
        
        
    

 <script>
     ClassicEditor
        .create(document.querySelector('#txtDescripcion'))
        .catch(error =>{
            console.error(error);
        });
 </script>       