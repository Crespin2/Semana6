<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-FACTURA DIGITAL-</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>   

<div class="container">
  
<h1 class="text-center">La Empresa S.A de C.v.</h1>
<p class="fs-6 text-center"><b> ACTIVIDADES DE ASESORAMIENTO EMPRESARIAL</b> <br>
  Departamento de San Salvador°El Salvador°Centroamerica <br>
  Telefono:(503) 2222-1111 ° Fax: (503) 2222-1111
</p>
  <br>
    <form class="row g-2 " name="frm" action="Datos.php" method="post">
  <div class="col-md-6 ">
    <!--CLIENTE-->
    <label for="cliente" class="form-label">Cliente:</label>
    <input type="text" class="form-control" id="" name="cliente" maxlength="25" require="true"> 
  </div>
  <div class="col-md-6 ">
    <!--FECHA -->
    <label for="fecha" class="form-label">Fecha:</label>
    <input type="date" class="form-control" id="" name="fecha" required>
  </div>
  <div class="col-12 ">
    <!--DIRECION-->
    <label for="direc" class="form-label">Direccion: </label>
    <input type="text" class="form-control" id="" name="direc" maxlength="30" required>
  </div>
    <!--NUMERO DE REGISTRO-->
  <div class="col-md-6">
    <label for="numRegistro" class="form-label">N° Registro: </label>
    <input type="text" name="numRegistro" class="form-control" id="" maxlength="8"  required>
  </div>
  <!--DEPARTAMENTO-->
  <div class="col-md-6">
    <label for="dept" class="form-label">Departamento: </label>
    <select id="dept" name="dept" class="form-select">
      <option value="sanmiguel">San Miguel</option>
      <option value="sanvicente">San Vicente</option>
      <option value="sansalvador">San Salvador</option>
    </select>
    
  </div>
  <!--NIT-->
  <div class="col-md-6">
    <label for="nit" class="form-label">NIT:</label>
    <input type="text" class="form-control" name="nit" id="nit" maxlength="17" pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}" placeholder="0000-000000-000-0" required> 
  </div>
  <!--GIRO-->
  <div class="col-md-6">
  <label for="giro" class="form-label">Giro:</label>
    <input type="text" class="form-control" id="giro" name="giro" maxlength="25" required> 
  </div>
  <!--CONDICIONES-->
  <div class="col-md-6">
    <label for="condiciones" class="form-label">Condiciones de pago:</label>
    <input type="text" class="form-control" id="cliente" name="condiciones" maxlength="25" required> 
  </div>
  

<br>
<br>

<div class="border border-dark border-3 row g-2">
  <!--CANTIDAD-->
  <div class="col-md-2 ">
    <label for="cantidad" class="form-label"><b>Cantidad:</b></label>
    <input type="number" class="form-control" id="cantidad1" name="cantidad1"  required>
    <input type="number" class="form-control" id="cantidad2" name="cantidad2" >
    <input type="number" class="form-control" id="cantidad3" name="cantidad3"  >
  </div>
  <!--DESCRIPCION -->
  <div class="col-md-4">
    <label for="descrip" class="form-label"><b>Descripcion:</b></label>
    <input type="text" class="form-control" id="descrip1" name="descrip1" maxlength="25" required>
    <input type="text" class="form-control" id="descrip2" name="descrip2" maxlength="25">
    <input type="text" class="form-control" id="descrip3" name="descrip3" maxlength="25">
  </div>
  <!--PRECIO UNITARIO -->
  <div class="col-md-2">
    <label for="preU" class="form-label"><b>Precio Unitario:</b></label>
    <input type="number" class="form-control" id="presU1" name="presU1" required>
    <input type="number" class="form-control" id="presU2" name="presU2" >
    <input type="number" class="form-control" id="presU3" name="presU3" >
  </div>
  <!--PRECIO EXENTAS -->
  <div class="col-md-2 ">
    <label for="ventasE" class="form-label"><b>Ventas Extentas:</b></label>
    <input type="number" class="form-control" id="ventasE1" name="ventasE1" required>
    <input type="number" class="form-control" id="ventasE2" name="ventasE2" >
    <input type="number" class="form-control" id="ventasE3" name="ventasE3" >

  </div>
  <!--PRECIO AFECTADAS -->
  <div class="col-md-2 ">
    <label for="ventasA" class="form-label"><b>Ventas Afectadas:</b></label>
    <input type="number" class="form-control" id="ventasA1" name="ventasA1" required>
    <input type="number" class="form-control" id="ventasA2" name="ventasA2" >
    <input type="number" class="form-control" id="ventasA3" name="ventasA3" >
    <br>
  </div>
  <br>
</div>
<div class="position-relative container">
  <div class="position-absolute top-0 start-0"><input  type="submit" value="Enviar" id="submit" name="submit"></div>
</div>
<br><br>
<div class="border border-dark border-3 row g-2">

  <div class="col-md-3 ">
    <label for="catidad" class="form-label"><b><b>ENTREGADO POR:</b></b></label><br>
    <label for="catidad" class="form-label">Nombre:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" disabled>
    <label for="catidad" class="form-label">DUI:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" disabled>
    <label for="catidad" class="form-label">Firma:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" disabled>
  </div>
  <div class="col-md-3 ">
    <label for="catidad" class="form-label"><b>RECIBIDO POR:</b></label><br>
    <label for="catidad" class="form-label">Nombre:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" disabled>
    <label for="catidad" class="form-label">DUI:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" disabled>
    <label for="catidad" class="form-label">Firma:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" disabled>
  </div>
  <div class="col-md-2 ">
  <p class="text-end">Suma</p>  
  <p class="text-end">IVA</p>
  <p class="text-end">Sub - Total</p>
  <p class="text-end">(-)IVA Retenido</p>
  <p class="text-end">Ventas Exentas</p>
  <p class="text-end">Venta Total</p>
  </div>
  <div class="col-md-2 ">
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  </div>
  <div class="col-md-2 ">
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <input type="number" class="form-control"  disabled>
  <br>
  </div>
  </div> 
</form>

<br>

</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>