<?php
include 'include/conecta.php';

$consulta = "SELECT * FROM productos";
$ejconsulta = $conecta->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Pagina de Inicio || Sportsnet</title>
</head>
<body>
    <div class="row py-3 bg-dark">
        <div class="col ">
          <h2 class="text-center display-6 text-white fw-bolder">SPORTSNET</h2>
        </div>
        <div class="col position-relative">
            <a class="btn btn-primary position-absolute top-0 start-50 translate-middle-x mt-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                Unirse
              </a>
              
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>
                    Si quieres ser parte de nuestro equipo registrate o inicia sesión aqui.
                  </div>
                  <div class="mt-2">
                    <a href="login.php" class="btn btn-secondary ">Inicia sesión</a>
                  <a href="registro.php" class="btn btn-secondary">Registrate</a>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div class="contain">
        <img src="img/img1.jpg" class="img-fluid img" alt="">
        <div class="carousel-caption d-none d-md-block">
            <h1 class="text-dark fw-bold">Todo lo que necesitas para sentirte bien</h1>
          </div>
    </div>

    <div class="row py-3 bg-dark">
        <div class="col">
        </div>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/img2 (1).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/img2 (2).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/img2 (3).jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row py-3 bg-dark">
        <div class="col">
          <h2 class="text-light text-center">Lista de Productos</h2>
        </div>
    </div>


    <div class="container mt-5">
        <table class="table table-dark table-hover">
          <tr>
              <th scope="col">Producto</th>
              <th scope="col">Precio</th>
          </tr>
        <?php while($row=$ejconsulta->fetch_array()){?>
            <tr>
                <td><?php echo $row ['Nombre']; ?></td>
                <td><?php echo $row ['Precio']; ?></td>
            </tr>
            <?php } ?>
          </table>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>