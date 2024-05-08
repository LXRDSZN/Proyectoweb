<!DOCTYPE html>
<html>
<head>
	<title>SHOPPING STROM-INICIO DE SESIÓN</title>
	<meta charset="utf-8">

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
            <a class="nav-link" href="../paggins/cart.php" style="font-size: 20px;"><i class="fas fa-shopping-cart"></i>&nbsp;</a>
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
  <div class="container" style="padding-top: 14%;">
  	<div class="row bg-white">
  		<div class="col-12 col-md-6 p-5 text-light" style="background-color: #0c996a;">
  			<center>
  				<h3 class="card-title">¡Bienvenido a Shopping Strom!</h3><hr><br>
  				<p class="text-light" style="font-size: 14px; text-align: justify;">Aquí se colocaría información de la empresa que describa los servicios, productos y enfoque principal de la misma para atraer al cliente.</p>

  				<p class="text-light" style="font-size: 14px; text-align: justify;">Aquí se colocaría información de la empresa que describa los servicios, productos y enfoque principal de la misma para atraer al cliente.</p>
  				<br><label><small>¿No tienes una cuenta?</small></label>
  				<br><a href="../paggins/registro.php" class="btn btn-outline-light btn-lg">Registrarse&nbsp;<i class="fas fa-check-circle"></i></a>
  				<br><label><small>¡Es gratis!</small></label>
  			</center>
  		</div>


  		<div class="col-12 col-md-6 p-5">

  			<form action="basedata.php" method="post">
  			  <center><h3 class="card-title">Iniciar Sesión</h3></center><hr><br>
			  <div class="form-group">
			    <label for="correo">Correo electrónico</label>
			    <input type="text" id="correo" name="correo" class="form-control" placeholder="alguien@ejemplo.com">
			  </div>
			  <div class="form-group">
			    <label for="contraseña">Contraseña</label>
			    <input type="text" id="contraseña" name="contraseña" class="form-control">
			  </div><br>
			  <center><button type="submit" class="btn btn-outline-success btn-lg">Ingresar&nbsp;<i class="fas fa-angle-right"></i></button></center>
			</form>
      
  		</div>
  	</div>
  	<br><br>
  </div>














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
          <h4>REDES SOCILAES DEL DISEÑADOR</h4>
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
  /* decoracion de pie de la página */

.footer{
    background-color: #24262b;
    padding: 70px ;
    margin-top:0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
}
.footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
}
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
}

@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

</style>

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