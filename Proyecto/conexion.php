<?php
$servidor = "localhost";
$database = "pasantias";
$usuario = "root";
$password = "";
// Create connection
$con = mysqli_connect($servidor, $usuario, $password, $database);
if(!$con){
    die(mysqli_connect_error());
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ProjectAsista</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../css/bootstrap.css"  >
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <link rel="shortcut icon" href="descarga.png" />
<body class="d-flex flex-column h-100">
    
  <!--Empieza el encabezado-->
    <header>
    <!--Menu de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <!--Se inserta una imagen-->
                        <img src="/Proyecto/descarga.png" width="70" height="30" alt="">
                      </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <!--Interaccion del usuario-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <!--Sec crean los menus-->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-orientation="horizontal">
                              Menu1
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Menu2
                                </a>
                              </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu3
                      </a>
                    </li> 
                  </ul>
                </div>
              </nav>
              <!--Se cierra el encabezado-->
    </header>
    <!--El contenido-->
            <main role="main" class="flex-shrink-0">
              <div class="container">
                <h1 class="mt-5">Ingrese Sucursal</h1>
                <form>
                    <div class="form-group">
                      <!--Titulo-->
                      <label for="NombreSucursal">Nombre Empresa</label>
                      <!--Donde El Usuario va a ingresar los datos-->
                      <input type="text" class="form-control" id="NombreSucursal" aria-describedby="emailHelp" placeholder="Ingrese Nombre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmp">Empresa a la que esta Asociado</label>
                      <select class="form-control" id="exampleInputEmp">
                          <option value="1">
                            <?php
                            $emp=$_POST['Nombre'];
                            echo $emp;
                            ?>
                          </option>
                          <option value="2">Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <!--Donde puede elegir las siguientes opciones-->
                      <label for="exampleFormEstado">Estado</label>
                      <select class="form-control form-control-sm" id="exampleFormEstado">
                          <option value="1">Activo</option>
                          <option value="2">Inactivo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
              </div>
            </main>
            <!--Pie de Paguina-->
            <footer class="footer-middle mt-auto py-3">
                www.asistanet.com.ec /2019
            </footer>
             <!--Codigo JS-->
              
             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
             <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
              <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
              
              
              
</body>

</html>