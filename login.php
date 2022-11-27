<?php
include 'include/conecta.php';



if(isset($_POST['btnIniciar'])){
    $user = $_POST['user'];
    $pass = $_POST['passw'];

    $qu = "SELECT * FROM users WHERE Nusuario = '$user' and pass = '$pass'";
    $ejqu = $conecta->query($qu);

    if($ejqu){
        header("location:index.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Inicio de sesión</title>
</head>
<body>
    
    <div class="container col-lg-6 border-dark mt-5">

        <div class="row mx-2">

            <div class="col">

                <h1 class="text-center text-light">Registrate</h1>
                <div class="col">
                    <form class="form-control-plaintext mb-4" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

                        <label class="form-label fw-bold">Nombre de usuario</label>
                        <input type="text" placeholder="Ingresa tu Nombre de usuario" name="user" class="form-control">


                        <label for="" class="form-label fw-bold">Contraseña</label>
                        <input type="password"placeholder="Ingresa tu contraseña" name="passw" class="form-control">
                        
                        <div class="mt-5 position-relative">
                            <input type="submit" name="btnIniciar" value="Continuar" class="form-control btn border-dark fw-bold position-absolute bottom-0 end-0">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>