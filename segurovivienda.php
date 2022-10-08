<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

        form{
            background-color: white;
            padding: 10px;
            margin: 100px auto;
            width: 400px;
        }

        input[type=text], input[type=password] {
            padding: 10px;
            width: 388px;
        }
        input[type="submit"]{
            border: 0;
            background-color: #ed8824;
            padding: 10px 20px;
        }
        .error{
            background-color: #ff9185;
            font-size: 12px;
            padding: 10px;
        }
        .img{
    width: 100px;
    height: 45px;
    border-radius: 0.3em;
  }

    </style>
</head>
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
        <form action="formulario.php" method="POST">
        <?php 
        
        if(isset($_POST["nombre"])){
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $campos = array();

            if($nombre == ""){
                array_push($campos, "El campo nombre no puede estar vacio");
            }

            if($password == "" || strlen($password) < 6){
                array_push($campos, "El campo password no puede estar vacio, ni tener menos de 6 caracteres.");
            }

            if($email == "" || strpos($email, "@") === false){
                array_push($campos, "Ingresa un correo electronico valido.");
            }

            if(count($campos) > 0){
                echo "<div class='ERROR'>";
                for($i = 0; $i < count($campos); $i++){
                    echo "<li>".$campos[$i]."</i>";
                }
            }else{
                echo "<div class='correcto'>
                Datos correctos";
            }
            echo "</div>";
        }
        
        ?>

        <p>
        Nombre: <br/>
        <input type="text" name="nombre">
        </p>

        <p>
        Password: <br/>
        <input type="password" name="password">
        </p>

        <p>
        Correo Electronico: <br/>
        <input type="text" name="email">
        </p>

        <p><input type="submit" value="Enviar datos"></p>
        </form>
    
</body>
</html>