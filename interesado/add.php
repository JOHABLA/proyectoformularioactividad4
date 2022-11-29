<?php 
  include_once('../config/config.php');
  include('interesado.php');

  if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $data= new paciente(); /* LLAMO A MI LIBRO DE RECETAS */
  
  
    $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div>' ;
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> Registrar sesion </title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head> 
    <body>
      <?php include('../menu.php') ?>

        <div class="container">
            <h2 class="text center mb-2" > Registrar </2h>
            <?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>


          <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2">
             <div class="col" >
              <input type="texto" name="nombres" id="nombres" placeholder="nombre del interesado" class="form-control" >
             </div>
             <div class="col" >
             <input type="texto" name="edad" id="edad" placeholder="edad del interesado" class="form-control" >
             </div>
            </div>

            <div class="row mb-2">
             <div class="col" >
              <input type="email" name="correo" id="correo" placeholder="correo del interesado" class="form-control" >
             </div>
             <div class="col" >
             <input type="number" name="celular" id="celular" placeholder="celular del interesado" class="form-control" >
             </div>
            </div>

            <div class="row mb-2">
             <div class="col" >
              <input type="texto" name="ciudad" id="ciudad" placeholder="ciudad del interesado" class="form-control" >
              </div>
              <div class="col" >
             <input type="texto" name="discapacidad" id="discapacidad" placeholder="discapacidad del interesado" class="form-control" >
             </div>
            </div>
            <button class="btn btn-success"> Registrar </button>
          </form>
        </div>
    </body>   
</html>