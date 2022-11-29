<?php
include('../config/config.php');
include('interesado.php');

$p = new paciente();
$dp = mysqli_fetch_object($p->getOne($_GET['id' ]));

if(isset ($_POST) && !empty($_POST)){
    $update = $p->update($_POST); 
    if ($update){
        $mensaje = '<div class="alert alert-success" role="alert" > Sesion modificada con exito. </div>';
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" > Error! </div>';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> Modificar sesion </title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head> 
    <body>
    <?php include('../menu.php') ?>
        <div class="container">

        <?php 
    if (isset($mensaje)){
     echo$mensaje;
    }
    ?>
            <h2 class="text center mb-2" > Registrar </2h>
          <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2">
             <div class="col" >
              <input type="texto" name="nombres" id="nombres" placeholder="nombre del interesado" class="form-control" value="<?= $dp->nombres?>" />
              <input type="hidden" name="id" value="<?= $dp->id?>" />
             </div>
             <div class="col" >
             <input type="texto" name="edad" id="edad" placeholder="edad del interesado" class="form-control" value="<?= $dp->edad?>" />
             </div>
            </div>

            <div class="row mb-2">
             <div class="col" >
              <input type="email" name="correo" id="correo" placeholder="correo del interesado" class="form-control" value="<?= $dp->correo?>" />
             </div>
             <div class="col" >
             <input type="number" name="celular" id="celular" placeholder="celular del interesado" class="form-control" value="<?= $dp->celular?>" />
             </div>
            </div>

            <div class="row mb-2">
             <div class="col" >
              <input type="texto" name="ciudad" id="ciudad" placeholder="ciudad del interesado" class="form-control" value="<?= $dp->celular?>" />
              </div>
              <div class="col" >
             <input type="texto" name="discapacidad" id="discapacidad" placeholder="discapacidad del interesado" class="form-control" value="<?= $dp->discapacidad?>"/>
             </div>
            </div>
            <button class="btn btn-success"> Modificar </button>
          </form>
        </div>
    </body>   
</html>