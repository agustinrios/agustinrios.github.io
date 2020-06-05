<?php
$destino= "agusrios_16@hotmail.com";
$nombre= $_post["nombre"];
$apellido= $_post["apellido"];
$correo= $_post["email"];
$mensaje= $_post["mensaje"];

$contenido= "nombre: " . $nombre . "\napellido: " . $apellido . "\nemail: " . $email . "\nmensaje: " . $mensaje .;

mail($destino, "consulta", $contenido);

header("location:index.html");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <title>Mi web</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        <i class="fas fa-code"></i>Agustin Rios
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#sobremi">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#portafolio">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   <!-- cierre header -->
   <!-- banner -->  
    <div class="container-fluid alfa">
        <img src="imagenes/ba1.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
         <div class="text"><p class="text">Analista de Sistemas</p><p class="text1">Programador Frond-end</p></div>
        </div>
    </div>
    <!--cierre banner -->
    <!-- sobre mi -->
    <div class="w3ls-middle pt-5" id="sobremi">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-center text-dark mb-sm-5 mb-4">Sobre mi</h3>
            <div class="row pt-lg-5">
                <div class="col-lg-6 text-center">
                    <img src="imagenes/sb2.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="service1-wthree">
                        <h5 class="text-dark mt-3 mb-2">¿quien soy?</h5>
                        <p>Mi nombre es Daniel Agustin Rios, tengo 24 años y vivo en Entre rios. Soy una persona apasionada por la tecnologia, autodidacta y en constante aprendizaje.</p>
                        <p>Actualmente me encuentro en busqueda de mi primera experiencia en el sector IT.</p>
                    </div>
                    <div class="service1-wthree my-4">
                        <h5 class="text-dark mt-4 mb-2">Formación</h5>
                        <p>Soy graduado en "TÉCNICO SUPERIOR EN ANÁLISIS DE SISTEMAS" del Instituto Superior de Infomatica Virasoro(2019).</p> 
                        <p>Me especializo en programación front-end.</p>
                    </div>
                    <div class="service1-wthree">
                        <h5 class="text-dark mt-4 mb-2">Tecnologias</h5>
                        <p><ul>
                        <li>
                            HTML - CSS - JS
                        </li>
                        <li>
                            Bootstrap - Jquery
                        </li>
                        <li>
                            Responsive Web Design
                        </li>
                    </ul></p>
                    </div>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </div>
    </div>
    <!-- //sobre mi-->
    <!-- //portafolio-->
    <div class="container-fluid">
    <h2 class="text-center beta" id="portafolio">Portafolio</h2>
<p class="text-center">Estudie desarrollo web front-end de forma autdidacta, habiendo realizado pequeños proyectos por mi cuenta para medir y demostrar mis habilidades.</p>
<p class="text-center">Algunos de estos proyectos se encuentran visibles en mi perfil de Github: <a href="https://github.com/agustinrios">Portafolio</a></p>

<div class="container" >
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="imagenes/pvideoConf.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="imagenes/pturismo.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="imagenes/pgimnasio.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="imagenes/Login.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="imagenes/consesio.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="imagenes/blog.jpg" style="width:100%">
  </div>
    
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="imagenes/pvideoConf.jpg" style="width:100%" onclick="currentSlide(1)" alt="Video conferencia">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagenes/pturismo.jpg" style="width:100%" onclick="currentSlide(2)" alt="Turismo">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagenes/pgimnasio.jpg" style="width:100%" onclick="currentSlide(3)" alt="Gimnasio">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagenes/Login.jpg" style="width:100%" onclick="currentSlide(4)" alt="Login">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagenes/consesio.jpg" style="width:100%" onclick="currentSlide(5)" alt="concesionaria">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagenes/blog.jpg" style="width:100%" onclick="currentSlide(6)" alt="blog">
    </div>     
  </div>
</div>
</div>
<!-- //portafolio-->

    <!-- contacto -->
  <div class="container-fluid contacto-container" >
    <form action="enviar.php" action="post" id="contacto">
     <h2 class="h2cont">e-mail</h2>  
     <hr>
       <input type="text" name="nombre" pattern="{a-zA-Z}[3,25]" maxlength="25" onblur="this.className ='campo';" placeholder="nombre" required="">
       <input type="text" name="apellido" pattern="{a-zA-Z}[3,25]" maxlength="20" onblur="this.className ='campo';"  placeholder="apellido" required="">
       <input type="email" id="email" name="email" onblur="this.className ='campo';" placeholder="Email" required="">
       <textarea name="mensaje" pattern="{a-zA-Z}[300]" maxlength="300" onblur="this.className ='campo';" placeholder="Escriba aqui su Mensaje" required=""></textarea>
       <input type="submit" value="Enviar"  id="botoncont">
       <br>
       <h3>Su mensaje fue enviado</h3>
   </form>
  </div>
    <!--//contacto--> 
    <!--//footer-->
    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Menu</h3>
                <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#sobremi">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#portafolio">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contacto">Contacto</a>
                        </li>
                    </ul>
            </div>
            <div class="menu">
                <h3>Contacto</h3>
                <nav class="redes-sociales">
                    <a href="https://www.linkedin.com/in/danielagustinrios-95/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/agustinrios"><i class="fab fa-github"></i></a>
                    <a href="https://www.behance.net/agustinrios1"><i class="fab fa-behance-square"></i></a>
                    <a href="https://www.instagram.com/agustinrios95/"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>
        <p class="copyright">
            Agustin Rios 2020
        </p>
    </footer>
    <!--//footer-->
    <script src="js/vendor/jquery-3.4.1.min.js" ></script>
    <script src="js/vendor/modernizr-3.7.1.min.js" ></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/plugins.js" ></script>
    <script src="js/main.js" ></script>    
</body>
</html> 