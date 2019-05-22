<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <?php 
 
  ?>
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
                    <img src="descarga.png" width="70" height="30" alt="">
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
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="#">Submenu1</a>
                               <a class="dropdown-item" href="#">Submenu2</a>
                               <a class="dropdown-item" href="#">Submenu3</a>
                             </div>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Menu2
                                </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Submenu1</a>
                                    <a class="dropdown-item" href="#">Submenu2</a>
                                    <a class="dropdown-item" href="#">Submenu3</a>
                                  </div>
                              </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
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
                  <h1 class="mt-5">Ingrese Producto</h1>
                  <form action="Productos.php" method="POST">
                      <div class="form-group">
                        <!--Titulo-->
                        <label for="Nombre4">Nombre</label>
                        <!--Donde El Usuario va a ingresar los datos-->
                        <input type="text" class="form-control" id="Nombre4" name="NombrePro" aria-describedby="emailHelp" placeholder="Ingrese Nombre">
                      </div>
                      <div class="form-group">
                        <!--Donde puede elegir las siguientes opciones-->
                        <label for="exampleFormEstado">Estado</label>
                        <select class="form-control" id="exampleFormEstado" name="EstadoPro">
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
              </div>
            </main>

            <!--Pie de Paguina-->
            <footer class="footer mt-auto py-3">
              <div class="container">
                <span class="text-muted">www.asistanet.com.ec</span>
              </div>
            </footer>

             <!--Codigo JS-->
    <script src="../bootstrap4/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>
              
              
              
</body>

</html>
<?php
try{
  include ('conexion.php');
$nombreProd=$_POST['NombrePro'];
$estadoProd=$_POST['EstadoPro'];
$_GRABAR_SQL = "INSERT INTO tbl_productos (PRO_NOMBRE,PRO_ESTADO) VALUES ('$nombreProd','$estadoProd')";
mysqli_query($con,$_GRABAR_SQL); 
mysqli_close($con);
exit();
echo "<script>alert('Guardaron los datos corectamente')</script>";
}catch(Exception $e){
    echo "<script>alert('Error al guardar en la base de datos')</script>";
    mysqli_close($con);
}