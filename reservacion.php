<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/menu.js"></script>
  <title>Reservación | Hilton Garden</title>
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
                <a class="nav-link" href="./contacto.php">Contacto</a>
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
    <div class="container contact_form">
      <div class="formulario">
        <h1>Reservación</h1>
        <h3>Completa el siguiente formulario para confirmar tu reservación</h3>
        <form action="pago.php" method="post">
          <p>
            <label for="Llegada">Llegada
              <span class="obligatorio">*</span>
            </label>
            <input type="date" required>
          </p>
          <p>
            <label for="Salida">Salida
              <span class="obligatorio">*</span>
            </label>
            <input type="date" required>
          </p>
          <div class="row">
            <div class="col">
              <label for="Adultos">Adultos
                <span class="obligatorio">*</span>
              </label>
              <select class="form-select" aria-label="Número de adultos">
                <option selected>Elija una opción</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
              </select>
            </div>
            <div class="col">
              <label for="Niños">Niños
                <span class="obligatorio">*</span>
              </label>
              <select class="form-select" aria-label="Número de niños">
                <option selected>Elija una opción</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
              </select>
            </div>
          </div>
          <p>
            <label for="Nombre">Nombre Completo
              <span class="obligatorio">*</span>
            </label>
            <input type="text" required placeholder="Nombres Apellidos">
          </p>
          <p>
            <label for="Email">Email
              <span class="obligatorio">*</span>
            </label>
            <input type="email" required placeholder="direccion@dominio.com">
          </p>
          <p>
            <label for="Telefono" class="colocar_telefono">Teléfono
            </label>
            <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
          </p>
          <button class="submit btn p-2 custom-color" type="submit" name="enviar_formulario" id="enviar">
            <p>Continuar</p>
          </button>
          <p class="aviso">
            <span class="obligatorio"> * </span>Los campos son obligatorios.
          </p>
      </div>
      </form>
    </div>
  </main>
  <footer>
    <div class="mt-10 pt-5 pb-10 footer">
      <div class="container">
        <div class="row mt-5">
          <div class="col copyright">
            <p class=""><small class="text-white-50">© Hilton Garden</small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>