<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/menu.js"></script>
  <title>Inicio | Hilton Garden</title>
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
                <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./restaurante.php">Restaurante</a>
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
    <!-- Primera sección -->
    <section class="bg-image">
      <div class="container">
        <h1>Habitaciones confortables al mejor precio</h1>
        <p>¿Necesitas un lugar donde hospedarte? No prolongues más tu búsqueda.</p>
        <form action="reservacion.php" method="post">
          <div class="reservation-info">
            <div class="input">
              <label for="llegada">Llegada</label>
              <input type="date" id="llegada" name="llegada" value="2021-11-01" min="2021-10-21" max="2021-12-31" class="form-control" aria-label="Llegada" aria-describedby="button-addon2">
            </div>
            <div class="input">
              <label for="salida">Salida</label>
              <input type="date" id="salida" name="salida" value="2021-11-01" min="2021-10-21" max="2021-12-31" class="form-control" aria-label="Salida" aria-describedby="button-addon2">
            </div>
            <div class="input">
              <label for="huéspedes">Huéspedes</label>
              <input type="number" id="huéspedes" name="huéspedes" value="1" min="1" max="" class="form-control" aria-label="Huéspedes" aria-describedby="button-addon2">
            </div>
          </div>
          <a href="./reservacion.php">
            <button class="btn p-2 custom-color position-absolute start-50 translate-middle-x">Reserva ahora</button>
          </a>
        </form>
      </div>
    </section>
    <!-- Segunda sección -->
    <section class="container rooms">
      <h2>Explora nuestros precios</h2>
      <div class="cards">
        <div class="card"">
          <img src=" ./img/habitacion1.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
              <img src="./img/personas.svg" alt="" class="icon">
              <p>4</p>
              <img src="./img/tamaño-habitacion.svg" alt="" class="icon">
              <p>13m2</p>
            </div>
            <h5 class="card-title">Doble</h5>
            <p class="card-text">2 camas dobles</p>
            <p>Desde <br><b>750.00</b> MXN / Noche</p>
            <a href="./habitaciones.php" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
        <div class="card"">
          <img src=" ./img/habitacion2.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
              <img src="./img/personas.svg" alt="" class="icon">
              <p>2</p>
              <img src="./img/tamaño-habitacion.svg" alt="" class="icon">
              <p>16m2</p>
            </div>
            <h5 class="card-title">Estándar</h5>
            <p class="card-text">1 cama King Size</p>
            <p>Desde <br><b>540.00</b> MXN / Noche</p>
            <a href="./habitaciones.php" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
      </div>
      <div class="cards">
        <div class="card"">
          <img src=" ./img/habitacion3.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
              <img src="./img/personas.svg" alt="" class="icon">
              <p>2</p>
              <img src="./img/tamaño-habitacion.svg" alt="" class="icon">
              <p>21m2</p>
            </div>
            <h5 class="card-title">Suite</h5>
            <p class="card-text">1 cama doble</p>
            <p>Desde <br><b>978.00</b> MXN / Noche</p>
            <a href="./habitaciones.php" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
        <div class="card"">
          <img src=" ./img/habitacion4.jpg" class="card-img-top" alt="Habitación estándar">
          <div class="card-body">
            <div class="room-info">
              <img src="./img/personas.svg" alt="" class="icon">
              <p>2</p>
              <img src="./img/tamaño-habitacion.svg" alt="" class="icon">
              <p>14m2</p>
            </div>
            <h5 class="card-title">Doble</h5>
            <p class="card-text">2 camas individuales</p>
            <p>Desde <br><b>540.00</b> MXN / Noche</p>
            <a href="./habitaciones.php" class="card-link">
              <img src="./img/flecha.svg" alt="" class="arrow-icon position-absolute bottom-0 end-0">
            </a>
          </div>
        </div>
      </div>
      <p>Aceptamos diferentes métodos de pago</p>
      <img src="./img/efectivo.png" title="Dinero en efectivo" alt="efectivo" class="img-fluid pay">
      <img src="./img/mastercard.png" title="Tarjetas MasterCard" alt="mastercard" class="img-fluid pay">
      <img src="./img/visa.png" title="Tarjetas Visa" alt="visa" class="img-fluid pay">
      <img src="./img/paypal.png" title="PayPal" alt="paypal" class="img-fluid pay">
    </section>
    <!-- Tercer sección -->
    <section class="container services">
      <div class="text">
        <h2>Queremos que te sientas como en casa</h2>
        <p>Contamos con servicios como: </p>
        <ul>
          <li>Estacionamiento gratis</li>
          <li>Wi-Fi gratis disponible en las habitaciones</li>
          <li>Room service</li>
          <li>Recepción 24 horas</li>
          <li>Servicio diario de limpieza</li>
          <li>Restaurante</li>
        </ul>
      </div>
      <img src="./img/ilustración.svg" alt="" class="img-fluid">
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