<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SisCitas</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
  <?php
    session_start();
  ?>
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.jpg" alt="60" width="70"/>
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a style="margin-left: 10px; border:none;" class="btn btn-outline-light" href="Paciente.php" target="myFrame">Paciente</a>
            </li>
            <li class="nav-item">
              <a style="margin-left:10px; border:none;" class="btn btn-outline-light" href="Usuario.php" target="myFrame">Usuario</a>
            </li>
            <li class="nav-item">
              <a style="margin-left:10px; border:none;" class="btn btn-outline-light" href="Medico.php" target="myFrame">Medico</a>
            </li>
            <li class="nav-item">
              <a style="margin-left:10px; border:none;" class="btn btn-outline-light" href="Citas.php" target="myFrame">Citas</a>
            </li>

            <form style="margin-left: 60px;" class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </ul>

          <div class="dropdown" style="margin-left:250px;">
            <button style="border: none" class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown"   aria-expanded="false">            
              <?=$_SESSION['nom'];?> <!-- Se imprime la variable correspondiente al nombre en el botón desplegable -->
            </button>

                   
            <div >
              <ul class="dropdown-menu text-center">
                <li>
                  <a class="dropdown-item" href="#">
                    <img src="../img/usuario.jpg" height="60" width="60">
                  </a>
                </li>
                <!-- Se imprimen las variables correspondientes a los nombres de usuario y correo a ambos items del menú desplegable -->
                <li><a class="dropdown-item" href="#"><?=$_SESSION['user'];?></a></li>
                <li><a class="dropdown-item" href="#"><?=$_SESSION['correo'];?></a></li>
                <li><hr class="dropdown-divider"></li>
                <form method="">
                    <li>
                      <button name="btnSalir" value="salir" class="dropdown-item bg-info">Salir</button>
                    </li>
                </form>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div style="height: 500px;" class="m-2">
        <iframe name="myFrame" style="height: 100%; width: 100%;border: solid;" >
                
        </iframe>
    </div>
</body>
</html>