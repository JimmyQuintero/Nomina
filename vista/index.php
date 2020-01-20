<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>prueba</title>

        <link rel="stylesheet" href="../libreria/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilo/estilo.css">
        <link rel="stylesheet" href="../libreria/sweetalert2/sweetalert2.min.css">            
    </head>    
    <body>
      
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        
                        <h1 class="display-4 text-center">¡Bienvenido!</h1>
                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                      <p class="lead text-center">Esta es la página de inicio, luego de un LOGIN correcto.</p>
                      <hr class="my-4"> 
                      <a class="btn btn-danger btn-lg" href="../vista/nomina.php" role="button">Nomina</a>         
                      <a class="btn btn-danger btn-lg" href="../db/logout.php" role="button">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>        
     <script src="../libreria/jquery/jquery-3.4.1.min.js"></script>    
     <script src="../libreria/bootstrap/js/bootstrap.min.js"></script>    
     <script src="../libreria/popper/popper.min.js"></script>    
        
     <script src="../libreria/plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="../instituto/js/codigo.js"></script>    
    </body>
</html>