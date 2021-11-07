<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/menu.js"></script>
  <title>Restaurante | Hilton Garden</title>
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="./img/open-menu.svg" alt=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="restaurante.php">Restaurante</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contacto</a>
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
    <section class="bg-image-restaurant">
      <div class="container">
        <h1>Restaurante Hilton Garden</h1>
        <p>Todos nuestros huéspedes tienen desayuno gratis <br> durante su estancia</p>
      </div>
    </section>
    <section class="container rooms">
      <h2>Los mejores servicios de restaurante</h2>
      <center><p>Consiéntete con nuestros deliciosos platillos, puede acompañarnos en el restaurante o, <br> pedir directamente a su habitación.</p></center><br><br>
      <div class="cards">
        <div class="card" style="width: 18rem;">
          <img src="./img/huevo.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
            <img src="https://img.icons8.com/small/16/000000/steak-very-hot.png" alt="" class="icon">
            </div>
            <h5 class="card-title">Desayunos</h5>
            <p class="card-text">Exquisitos platillos</p>
            <a href="#" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="./img/nachos.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
              <img src="https://img.icons8.com/small/16/000000/nachos.png" alt="" class="icon">
            </div>
            <h5 class="card-title">Comidas</h5>
            <p class="card-text">Variedad de platillos</p>

            <a href="#" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="./img/crepa.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
              <img src="https://img.icons8.com/ios/50/000000/banana-split.png" alt="" class="icon">
            </div>
            <h5 class="card-title">Postres</h5>
            <p class="card-text">Variedad de postres con uno de los mejores chocolateros del país.</p>

            <a href="#" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="./img/taco.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
              <img src="https://img.icons8.com/small/16/000000/taco.png" alt="" class="icon">
            </div>
            <h5 class="card-title">Cenas</h5>
            <p class="card-text">Variedad de platillos para cenar</p>

            <a href="#" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
      </div>
    </section>
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