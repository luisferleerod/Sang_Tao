<?php

include ("dbh.inc.php");


if(isset($_POST["registro"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $correo = $_POST["correo"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fin = $_POST["hora_fin"];
    
    $sqlgraba = "INSERT INTO usuario(usuario,clave,correo,hora_inicio,hora_fin) values ('$username', '$password','$correo', '$hora_inicio', '$hora_fin')";
    try{ 
        if(mysqli_query($con,$sqlgraba)){

            header("location: ../interfaz/index.html");
            die();
        }
    } catch(Exception){

        $sqlerrorUsuario=mysqli_query($con,"SELECT usuario FROM usuario where usuario='$username'");
        $sqlerrorCorreo=mysqli_query($con,"SELECT correo FROM usuario where correo='$correo'");
        $nru = mysqli_num_rows($sqlerrorUsuario);
        $nrc = mysqli_num_rows($sqlerrorCorreo);
        if($nru==1 && $nrc==0){
            echo '<script language="javascript">alert("Usuario ya existente");window.location.href="../interfaz/registro.html"</script>';
            die();
            
        }
        else if($nrc==1 && $nru==0){
            echo '<script language="javascript">alert("Correo ya registrado");window.location.href="../interfaz/registro.html"</script>';
            die();
        }
        else{
            echo '<script language="javascript">alert("Usuario con las caracteristicas ya existente");window.location.href="../interfaz/registro.html"</script>';
            die();

        }
    }
}

?>
