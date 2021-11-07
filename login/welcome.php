<?php
	session_start();
	if (!isset($_SESSION['username']) AND $_SESSION['username'] != 1) {
        header("location: ../login/login.php");
		exit;
        }

	require_once ("config.php");

	$query_username=mysqli_query($conn,"select * from users where id=1");
	$row=mysqli_fetch_array($query_username);
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
          <a class="navbar-brand site-title" href="../index.php">
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

	<TABLE BORDER ALIGN="center">
	<TR>
		<td>Perfil  </td>
		 <td>  </td>
		 <td> </td>
		<td align="right">
			    <?php echo $_SESSION['username']?>
		</td>
	</TR>
	<TR>
		<TD>Correo  </TD> 
		 <td>  </td>
		 <td> </td>
           <td> <?php echo $_SESSION['email']?>
           </td>
	</TR>
	<TR>
		<TD> </TD> 
		<td>  </td>
		<td> </td>
		<TD align="right"> <a href="logout.php"><button class="btn btn-outline-primary">Cerrar Sesion</button></a></TD>
	</TR>
	<TR>
		<TD>Numero de cuenta:  </TD> 
		<td>  </td> 
		<td> </td>

		<TD align="right"> <?php echo $_SESSION['id'] ?></TD>
	</TR>
<TR>
    <TD>Tipo cuenta:  </TD> 
    <td>  </td> 
    <td> </td>

    <TD align="right">
              <?php
                if($_SESSION['cargo']==2){
                  ?>
                                <?php echo "Cliente" ; ?>
                  <?php
                }else{
               ?>
                  <?php echo "Administrador" ; ?>
            <?php    
            }
            ?>
    </TD>
</TR>
<?php if ($_SESSION['cargo']==1): ?>
<TR>
    <TD>Administrar:  </TD> 
    <td>  </td> 
    <td> </td>

    <TD align="right">
              <?php
                if($_SESSION['cargo']==1){
                  ?>
                                <a href="../admin/index.php"><button class="btn btn-outline-primary">Administrar</button></a>
                  <?php
                }else{
               ?>
            <?php    
            }
            ?>
    </TD>
</TR>
<?php endif ?>
	<TR>
		<TD> <br> </TD>  
		<td> <br> </td>
		<td> <br> </td>

		<TD> <br> </TD>

	</TR>
	<TR>
		<TD>Eliminar  </TD>  
		<td>  </td>
		<td> </td>

		<TD align="right"> <a href="delete.php"><button class="btn btn-outline-primary">Eliminar Cuenta</button></a></TD>

	</TR>
  <TR>
    <TD>¡¡¡ADVERTENCIA!!!</TD>
    <TD> <br> </TD>   
  </TR>
</TABLE>
<br>
<a align="right">--> LA ELIMINACION DE LA CUENTA PUEDE SER IRREVERSIBLE. </a>
<br>
<a align="right">--> SIN FORMA DE RECUPERACION DE HISTORIAL. </a>
<br>
<a align="right">--> TENGA EN CUENTA QUE AL MOMENTO DE DAR CLICK EN "ELIMINAR CUENTA". </a>
<br>
<a align="right">--> SERA TERMINADA LA SESION!.</a>
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