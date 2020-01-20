<?php

session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
include_once "../db/conexion.php";
$objeto = new Conexion;
$conexion = $objeto->Conectar();

$consulta = "SELECT id, cedula, nombre, pais, edad FROM personas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchALL(PDO::FETCH_ASSOC);




?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>prueba</title>

        <link rel="stylesheet" href="../libreria/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilo/estilonomina.css">
        <link rel="stylesheet" href="../libreria/sweetalert2/sweetalert2.min.css">
        <link rel="stylesheet" href="../libreria/datatables/datatables.min.css">
    </head>    
    
    
    <body>
    <header>
        <h3 class="text-center text-light">Educación</h3>
         <h4 class="text-center text-light"> <span class="badge badge-danger">Alcaldia Bolivariana de San Francisco</span></h4> 
     </header>    
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>T_Cedula</th>
                                <th>Secundaria</th>
                                <th>Universidad</th>
                                <th>Titulo Obtenido</th>
                                <th>Celular</th>
                                <th>Direccion</th>                                
                                <th>F. Nacimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['pais'] ?></td>
                                <td><?php echo $dat['edad'] ?></td>    
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">País:</label>
                <input type="text" class="form-control" id="pais">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  



     <script src="../libreria/jquery/jquery-3.3.1.min.js"></script>    
     <script src="../libreria/bootstrap/js/bootstrap.min.js"></script>    
     <script src="../libreria/popper/popper.min.js"></script>    
        
     <script src="../libreria/plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="../instituto/js/codigo.js"></script>    
     <scrip type="text/javascript" src="../libreria/datatables.min.js"></script>
     <scrip type="text/javascript" src="../instituto/js/nomina.js"></script>
    </body>
</html>