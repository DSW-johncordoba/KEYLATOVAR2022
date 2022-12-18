<?php
include('../config/config.php');
include('clientes.php');

if (isset($_POST) && !empty($_POST)){
  /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */

  $data= new clientes(); /* LLAMO A MI LIBRO DE RECETAS */

 

  $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="../ESTILO/style.css">
    <link rel="stylesheet" href="./ESTILO/mq.css">

  </head>

<body  >
<nav >
            <a href="./index.html"> <img src="../IMAGENES/logo" class="img-logo" alt=""></a>

            <ul>
                <li> <a href="../index.html"> INICIO </a></li>
                <li> <a href="../carne a la llanera"> CARNE A LA LLANERA </a></li>
                <li> <a href="../comida típica del llano"> COMIDA TIPICA DEL LLANO </a></li>
                <li> <a href="../contactenos"> CONTACTENOS </a></li>
                <li> <a href="../menu.html"> MENU </a></li> 
                <li> <a href="../cliente/add.php"> AGENDA CON NOSOTROS </a></li> 

            </ul>
            
        </nav>
      
       
        <img class="imagen1" src="../IMAGENES/banner" alt="">

<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>


<!-- CREAN FORMULARIO -->
<form class="section4" method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="nombrescompletos" id="nombrescompletos"   class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular"  class="form-control" >
  </div>

    <div class="col-6">
      <label for="inputAddress" class="form-label">Email</label>
      <input type="email" name="email" id="email" class="form-control"  >
    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Menu</label>
      <input type="text" name="menu" id="menu" class="form-control"  >
    </div>
    
  <div class="col-12">
    <button  class="btn btn-primary">Registrar</button>
  </div>
</form>

<footer>

        <address>DERECHOS RESERVADOS SABORLLANERO.COM</address>

        <div>
            <a href="#">Facebook</a>-
            <a href="#">Instagram</a>-
            <a href="#">Whatsapp</a>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>