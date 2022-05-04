<?php

    if(isset($_POST['submit'])){
        //variables de php
        $cliente=$_POST['cliente'];
        $fecha=$_POST['fecha'];
        $direccion=$_POST['direc'];
        $numRegistro=$_POST['numRegistro'];
        $dept=$_POST['dept'];
        $nit=$_POST['nit'];
        $giro=$_POST['giro'];
        $condiciones=$_POST['condiciones'];
        $cantidad1=$_POST['cantidad1'];
        $descrip1=$_POST['descrip1'];
        $presU1=$_POST['presU1'];
        $ventasE1=$_POST['ventasE1'];
        $ventasA1=$_POST['ventasA1'];
        $cantidad2=$_POST['cantidad2'];
        $descrip2=$_POST['descrip2'];
        $presU2=$_POST['presU2'];
        $ventasE2=$_POST['ventasE2'];
        $ventasA2=$_POST['ventasA2'];
        $cantidad3=$_POST['cantidad3'];
        $descrip3=$_POST['descrip3'];
        $presU3=$_POST['presU3'];
        $ventasE3=$_POST['ventasE3'];
        $ventasA3=$_POST['ventasA3'];

    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-Mostrar Datos-</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    // tambien se puede utlizar print en vez de echo
    echo '

    <div class="container">
    <h1 class="text-center"> Datos del cliente: </h1><br><br>
<div class="border border-dark border-3 row g-2">
    <div class="col-md-6">
    <label for="" class="form-label"><b>Nombre del Cliente: </b></label>
    <label for="" class="form-label">'.$cliente.' </label>
    </div>
    <div class="col-md-6">
    <label for="" class="form-label"><b>Fecha: </b></label>
    <label for="" class="form-label">'.$fecha.' </label>
    </div>
    <div class="col-md-6">
    <label for="" class="form-label"><b>Direccion: </b></label>
    <label for="" class="form-label">'.$direccion.' </label>
    </div>
    <div class="col-md-6">
    <label for="" class="form-label"><b>Numero de Registro: </b></label>
    <label for="" class="form-label">'.$numRegistro.' </label>
    </div>
    <div class="col-md-6">
    <label for="" class="form-label"><b>Departamento: </b></label>
    <label for="" class="form-label">'.$dept.' </label>
    </div>
    <div class="col-md-6">
    <label for="" class="form-label"><b>NIT del Cliente: </b></label>
    <label for="" class="form-label">'.$nit.' </label>
    </div>
    <div class="col-md-6">
    <label for="" class="form-label"><b>Giro: </b></label>
    <label for="" class="form-label">'.$giro.' </label>
    </div>
    <div class="col-md-6 ">
    <label for="" class="form-label">Condiciones de pago: </label>
    <label for="" class="form-label">'.$condiciones.' </label>
    </div>
    </div>
    <br><br>
    <h2 class="text-center"> Datos del producto/servicio: </h2><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Catidad</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio Unitario</th>
      <th scope="col">Ventas Exentas</th>
      <th scope="col">Ventas Afectadas</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        <td>'.$cantidad1.'</td>
        <td>'.$descrip1.'</td>
        <td>'.$presU1.'</td>
        <td>'.$ventasE1.'</td>
        <td>'.$ventasA1.'</td>
    </tr>
    <tr>
        <td>'.$cantidad2.'</td>
        <td>'.$descrip2.'</td>
        <td>'.$presU2.'</td>
        <td>'.$ventasE2.'</td>
        <td>'.$ventasA2.'</td>
    </tr>
    <tr>
        <td>'.$cantidad3.'</td>
        <td>'.$descrip3.'</td>
        <td>'.$presU3.'</td>
        <td>'.$ventasE3.'</td>
        <td>'.$ventasA3.'</td>
    </tr>
  </tbody>
</table>
</div>'
?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



