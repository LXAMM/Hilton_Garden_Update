<?php
	session_start();
	if (!isset($_SESSION['username']) AND $_SESSION['username'] != 1) {
        header("location: ../login/login.php");
		exit;
        }
include ("config.php");

  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/menu.js"></script>
</head>
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
            <img src="../img/logo.svg" alt="Logo del sitio web" class="logo">
            Hilton Garden
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="../img/open-menu.svg" alt=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../restaurante.php">Restaurante</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contacto.php">Contacto</a>
              </li>
            </ul>
            <span class="navbar-text">
              <?php
                require_once("../isLog.php");
                if($estado){
                  ?>
                                <?php echo "<h3> " . $_SESSION['username'] . "</h3>"; ?>
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

<body>
  <div>
    <h2>Nuevo Cliente</h2>
    <h3>Ingrese Datos</h3>

    <div>
    <form action="insertar.php" method="post">
        <table>
            <tr>
                <td>NOMBRES:</td>
                <td><input type="text" name="nom" id=""></td>
            </tr>
            <tr>
                <td>CORREO:</td>
                <td><input type="text" name="ape" id=""></td>
            </tr>
            <tr>
                <td>Cargo</td>
                <td><input type="text" name="n1" id=""></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="text" name="p1" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar"></td>
            </tr>
        </table>

    </form>

    </div>



<br>
	<br>
	<br>
	<br>
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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