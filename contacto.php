<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/menu.js"></script>
  <title>Contacto | Hilton Garden</title>
</head>

<body>
  <!-- Menú -->
  <header>
    <div class="p-3 text-decoration-underline text-center custom-light-color">
      <a href="./medidas.html" class="text-white">
        Conoce las medidas que estamos tomando ante el coronavirus
      </a>
    </div>
    <div class="container nav-container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand site-title" href="index.php">
            <img src="./img/logo.svg" alt="Logo del sitio web" class="logo">
            Hilton Garden
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="./img/open-menu.svg" alt=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="restaurante.php">Restaurante</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./contacto.php">Contacto</a>
              </li>
            </ul>
            <span class="navbar-text">
              <?php
                require_once("isLogin.php");
                if($estado){
                  ?>
                                <?php echo "<h3> " . $_SESSION['username'] . "</h3>"; ?>
                                <a href="./login/welcome.php?id=<?php echo $_SESSION['id']; ?>"><button class="btn btn-outline-primary">Perfil</button></a>
                                <a href="./login/logout.php"><button class="btn btn-outline-primary">Cerrar Sesión</button></a>
                  <?php
                }else{
               ?>
              <a href="./login/register.php"><button class="btn btn-primary">Regístrate</button></a>
              <a href="./login/index.php"><button class="btn btn-outline-primary">Inicia sesión</button></a>
            <?php    
            }
            ?>
            </span>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <!-- Primera sección -->
    <div class="contact_form">
      <div class="formulario">
        <h1>Formulario de contacto</h1>
        <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
        <form action="submeter-formulario.php" method="post">
          <p>
            <label for="nombre" class="colocar_nombre">Nombre
              <span class="obligatorio">*</span>
            </label>
            <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
          </p>
          <p>
            <label for="email" class="colocar_email">Email
              <span class="obligatorio">*</span>
            </label>
            <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
          </p>
          <p>
            <label for="telefone" class="colocar_telefono">Teléfono
            </label>
            <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
          </p>
          <p>
            <label for="asunto" class="colocar_asunto">Asunto
              <span class="obligatorio">*</span>
            </label>
            <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
          </p>
          <p>
            <label for="mensaje" class="colocar_mensaje" required="obligatorio">Mensaje
              <span class="obligatorio">*</span>
            </label>
            <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
          </p>
          <button class="submit btn p-2 custom-color" type="submit" name="enviar_formulario" id="enviar">
            <p>Enviar</p>
          </button>
          <p class="aviso">
            <span class="obligatorio"> * </span>Los campos son obligatorios.
          </p>
        </form>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.454982541514!2d-93.1467953!3d16.7540245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd90ef7a512af%3A0x5635acc6a97d13e8!2sHilton%20Garden%20Inn%20Tuxtla%20Gutierrez!5e0!3m2!1ses!2smx!4v1635099751530!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </main>
  <footer>
    <div class="mt-10 pt-5 pb-10 footer">
      <div class="container">
        <div class="row mt-5">
          <div class="col copyright">
            <p class=""><small class="text-white-50">© Hilton Garden</small></p>
          </div>
          <p class=""><small class="text-white-50">Teléfono: 9999-999-99</small></p>
          <p class=""><small class="text-white-50">Gmail: hilton@gmail.com</small></p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>