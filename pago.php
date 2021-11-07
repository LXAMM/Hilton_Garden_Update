<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/menu.js"></script>
  <title>Pago | Hilton Garden</title>
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
  <main class="container">
    <div class="formulario">
      <form action="#" class="credit-card-div contact_form">
        <h1>Método de pago</h1>
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-12">
                <label for="Número de tarjeta">Número de tarjeta
                  <span class="obligatorio">*</span>
                </label>
                <input type="text" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" required />
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label class="help-block  small-font">Mes
                  <span class="obligatorio">*</span>
                </label>
                <input type="text" class="form-control" placeholder="MM" required />
              </div>
              <div class="col">
                <label class="help-block  small-font">Año
                  <span class="obligatorio">*</span>
                </label>
                <input type="text" class="form-control" placeholder="AA" required />
              </div>
              <div class="col">
                <label class="help-block  small-font">CCV
                  <span class="obligatorio">*</span>
                </label>
                <input type="text" class="form-control" placeholder="CCV" required />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 pad-adjust">
                <label for="Nombre del titular">Titular de la tarjeta
                  <span class="obligatorio">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Nombre Apellidos" required />
              </div>
            </div>
            <p class="aviso">
              <span class="obligatorio"> * </span>Los campos son obligatorios.
            </p>
            <div class="row">
              <div class="col">
                <input type="submit" class="btn p-2 btn-warning" value="Pagar ahora" />
              </div>
              <div class="col">
                <input type="submit" class="btn p-2 btn-danger" value="Cancelar" />
              </div>
            </div>
          </div>
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