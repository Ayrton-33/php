<?php
ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
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
    <title>Calculadora de IVA</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-3">
                <form>
                    <div>
                        <label for="IstIVA">IVA:</label>
                        <select name="IstIVA" id="IstIVA" class="form-control">
                            <option disabled selected>Seleccionar</option>
                            <option value="10.5">10.5</option>
                            <option value="17">17</option>
                            <option value="21">21</option>
                            <option value="27">27</option>
                        </select>    
                    </div>
                    <div class="mt-3">
                        <label for="">Precio sin IVA:</label>
                        <input type="text" name="txtPreciosiniva" id="txtPreciosiniva" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="">Precio con IVA:</label>
                        <input type="text" name="txtPrecioconiva" id="txtPrecioconiva" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
            </div>
            <div class="col-5 pt-4">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td></td>
                    </tr>

                </table>
            </div>
        </div>


    </main>

</body>

</html>