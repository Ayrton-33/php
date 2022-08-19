<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Gestor de tareas</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1>Gestor de tareas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 my-3">
                <label for="IstPrioridad">Prioridad</label>
                <select name="IstPrioridad" id="IstPrioridad" class="form-control">
                    <option disabled selected>Seleccionar</option>
                    <option value="">Alta</option>
                    <option value="">Media</option>
                    <option value="">Baja</option>
                </select>
            </div>
            <div class="col-4 my-3">
                <label for="IstUsuario">Usuario</label>
                <select name="IstUsuario" id="IstUsuario" class="form-control">
                    <option disabled selected>Seleccionar</option>
                    <option value="">Ana</option>
                    <option value="">Bernabé</option>
                    <option value="">Daniela</option>
                </select>
            </div>
            <div class="col-4 my-3">
                <label for="IstEstado">Estado</label>
                <select name="IstEstado" id="IstEstado" class="form-control">
                    <option disabled selected>Seleccionar</option>
                    <option value="">Sin asignar</option>
                    <option value="">Asignado</option>
                    <option value="">En proceso</option>
                    <option value="">Terminado</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-justify my-3 ">
                <label for="">Título</label>
                <input type="text" name="txtTitulo" id="txtTitulo" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                <label for="">Descripción</label>
                <textarea name="txtDescripcion" id="txtDescripcion" class="form-control"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-secondary" type="reset">Cancelar</button>
        </div>
        <div>
            <table class="table table-hoover border shadow mt-4">
                <thead>
                    <th>ID</th>
                    <th>Fecha de inserción</th>
                    <th>Título</th>
                    <th>Prioridad</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th></th>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
            </table>
        </div>
    </main>
    
</body>
</html>