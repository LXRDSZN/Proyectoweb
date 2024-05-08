<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO-SHOPPING STROM</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/indexcss.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Encode+Sans&family=Inter&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/94f47f52fa.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light" style="font-family: Open Sans;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="../paggins/index.php">Shopping Strom &nbsp;</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../paggins/productos.php"><i class="fas fa-store"></i>&nbsp;Productos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../paggins/tienda.php"><i class="fas fa-store-alt"></i>&nbsp;Tienda</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../paggins/servicios.php"><i class="fas fa-cog"></i>&nbsp;Servicios</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../paggins/contactanos.php"><i class="fas fa-phone-alt"></i>&nbsp;Contacto</a>
          </li>
        </ul>
        <div class="d-none d-sm-block">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../paggins/login.php" style="font-size: 20px;"><i class="far fa-user-circle"></i>&nbsp;</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cart.php" style="font-size: 20px;"><i class="fas fa-shopping-cart"></i>&nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="navbarx d-block d-sm-none" id="myNavbar">
  <a class="nav-link" href="login.php" style="color: #212529; float: left; font-size: 24px;"><i class="far fa-user-circle"></i>&nbsp;</a>
  <a class="nav-link" href="cart.php" style="color: #212529; float: right; font-size: 24px;"><i class="fas fa-shopping-cart"></i>&nbsp;</a>
  </div>

  <!-- Page Content -->
<div class="container" style="padding-top: 100px;">
    <center><h3 class="card-title">¡Mucho gusto! Necesitamos algunos datos...</h3></center><hr><br>
    <div class="row bg-white justify-content-md-center p-5">
      <div class="col-12 col-md-6">


        <form method="post">

        <p class="text-muted"><small>Datos básicos</small></p><hr>        

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control">
        </div>


        <p class="text-muted"><small>Dirección (para hacerle llegar sus compras)</small></p><hr>

        <div class="form-group">
          <label for="calle">Calle</label>
          <input type="text" id="calle" name="calle" class="form-control">
        </div>


        <div class="form-group">
          <label for="colonia">Colonia</label>
          <input type="text" id="colonia " name="colonia" class="form-control">
        </div>


        <div class="form-group">
          <label  for="cp">Código Postal</label>
          <input type="number" id="cp" name="cp" class="form-control">
        </div>
      </div>


      <div class="col-12 col-md-6">
        <p class="text-muted"><small>Datos de contacto</small></p><hr>
        <div class="form-group">
          <label for="correo">Correo electrónico</label>
          <input type="text" id="correo" name="correo" class="form-control">
        </div>


        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="number" id="telefono" name="telefono" class="form-control">
        </div>


        <p class="text-muted"><small>Seguridad de su cuenta</small></p><hr>
        <div class="form-group">
          <label for="contraseña">Contraseña</label>
          <input type="text" id="contraseña" name="contraseña" class="form-control">
        </div><br>


        <center><button type="submit" class="btn btn-outline-info btn-lg">Registrar mi cuenta&nbsp;<i class="fas fa-user-plus"></i></button></center>
      </form><br>
      </div>
    </div>
    <br>
  </div>


 <?php

$server= "localhost";
$user= "root";
$pass= "";
$bd="registros";

$conexion= new mysqli($server,$user,$pass,$bd);

     $conexion=mysqli_connect("localhost", "root", "", "registros");
     
     if($conexion->connect_errno){
        die("La conexión ha fallado" . $conexion->connect_errno);
     }
   
    if (isset($_POST['nombre'])){ 
   
    $nombre=$_POST['nombre']; 
    $calle=$_POST['calle']; 
    $colonia=$_POST['colonia']; 
    $codigopostal=$_POST['cp']; 
    $correo=$_POST['correo']; 
    $telefono=$_POST['telefono']; 
    $contraseña=$_POST['contraseña']; 


   
   
    $insertar="INSERT INTO usuarios (Nombre,Calle,Colonia,Codigop,Correo,Telefono,Contraseña) VALUES ('$nombre','$calle','$colonia','$codigopostal','$correo','$telefono','$contraseña');";
       
   
    if ($conexion->query($insertar) === true){
            echo 'registro almacenado';
        } else{
            die("error al insertar los datos: " . $conexion->error);
        }
     }
   

    mysqli_close($conexion);

     ?>



<!--Pie de página-->
    <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>EMPRESA/COLEGIO</h4>
          <ul>
            <li><a href="#">CECYTE</a></li>
            <li><a href="#">EVIL CORP</a></li>
            <li><a href="#">POLITICAS DE PRIVACIDAD</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>AYUDA</h4>
          <ul>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Compras</a></li>
            <li><a href="#">¿Tienes dudas?</a></li>
            <li><a href="#">Mas Opciones</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>CONTACTO CON EL DISEÑADOR WEB</h4>
          <ul>
            <li><a href="mailto:ivangaliciagarces@gmail.com">Correo: ivangaliciagarces@gmail.com</a></li>
            <li><a href="#">Telefono: 735298046</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>REDES SOCIALES DEL DISEÑADOR</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/Ivangaliciagarces" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>

            <div id="clockdate">
  <div class="clockdate-wrapper">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</div>

          </div>
        </div>
      </div>
     </div>
  </footer>


  <!--Fin del pie de página-->

  <div class="container" style="padding-bottom: 50px;">
    <div class="row">
      <div class="col-12">
        <center><p style="font-family: Inter; font-weight: lighter;" class="text-muted"><br><small style="font-size: 16px;">Copyright © 2022 <b>EVIL CORP</b>. Proudly made by <b>Iván Galicia Garcés</b>.</small></p></center>
      </div>
    </div>
  </div>
  <br>


  <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
<style type="text/css">

.carousel-item {
  height: 100%;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.navbarx {
  background-color: #f2f2f2;
  z-index: 99;
  overflow: hidden;
  position: fixed;
  bottom: 0;
  width: 100%;
}

/* Style the links inside the navigation bar */
.navbarx a {
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 3% 5%;
  text-decoration: none;
  font-size: 17px;
}

</style>
</html>
