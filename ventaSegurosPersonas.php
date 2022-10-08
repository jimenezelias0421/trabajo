<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<style>
.form{
    padding-left: 150px;
}
.img{
    width: 100px;
    height: 45px;
    border-radius: 0.3em;
  }
</style>
<body>
<nav class="navbar navbar-dark bg-info navbar-expand-lg ">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                <img src="./img/logo.png" alt="logo" class="img">
                    <a class="nav-link active" aria-current="page" href="./inicio.php">Inicio</a>
                    <a class="nav-link" href="./ventaSegurosPersonas.php">Seguro de Vivienda</a>
                    <a class="nav-link " href="./segurovivienda.php">Seguro de Vehiculo</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 bg-light form-demo rounded mt-5">
                <h1 class="text-center text-dark">Seguro De Vida</h1>
                <hr class="bg-light w-75">
                <form method="post" action="" class="form"><br>
                    <h5>Ingrese el nombre</h5><br>
                    <input type="text" name="nombre"><br>
                    <h5>Ingrese su apellido</h5><br>
                    <input type="text" name="apellido"><br>
                    <h5>TELEFONO/CELULAR</h5><br>
                    <input type="num" name="telefono"><br>
                    <h5>CORREO ELECTRONICO</h5>
                    <input type="email" name="correo"><br>
                    <input type="submit" value="guardar"><br>
                    <?php 
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];

            $nombre = $nombre;
            echo " la nombre es: ".$nombre;
            
            $apellido = $apellido;
            echo " el apellido es: ". $apellido;

            $telefono = $telefono;
            echo " el telefono es: ". $telefono;

            $correo = $correo;
            echo " el correo es: ". $correo;
            ?>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
    
    
</html>