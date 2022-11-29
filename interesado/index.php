<?php
    include_once('../config/config.php');
    include('interesado.php');

    $p= new paciente();
    $data = $p->getALL();

    if (isset($_GET['id'])&& !empty($_GET['id'])) {
      $remove = $p->delete($_GET['id']);
      if($remove) {
          header('location: '.ROOT. 'interesado/index.php');
      }else{
          $msj = "<div class= 'alert alert-danger' rol='alert'> Erro al eliminar agenda. </div>";
      
      }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> Lista de sesiones </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php');?>
        <div class="container" >
          <h2 class="text-center mb-2"> Calendario </h2>
          <div class="row" >
            <?php 
              while( $pt = mysqli_fetch_object($data)){
                echo"<div class='col' >";
                  echo"<div class='border border-info p-2' >";
                   echo"<h5>  $pt->nombres $pt->edad </h5>";
                   echo"<p> <b>celular:</b> </p>";
                   echo"<div class='text-center'> ";
                   echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/interesado/edit.php?id=$pt->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/interesado/index.php?id=$pt->id' >Eliminar</a> </div>";
                   echo"</div>";
                  echo"</div>";
                echo"</div>";
              }            
            ?>
          </div> 
        </div>
    </body>


</html>