<?php

include ("dbh.inc.php");


if(isset($_POST["registro"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $correo = $_POST["correo"];
    
    $sqlgraba = "INSERT INTO usuario(usuario,clave,correo) values ('$username', '$password','$correo')";
    
    if(mysqli_query($con,$sqlgraba)){
    
        header("location: ../interfaz/index.html");
        die();
    }
    else{
        header("location: ../interfaz/registro.html");
        die();
    }
}

?>
