<?php

include ("dbh.inc.php");
$username = $_POST["username"];

$password = $_POST["password"];
 

if(isset($_POST["entrar"])){
    $query = mysqli_query($con,"SELECT * FROM usuario WHERE usuario = '$username' AND clave = '$password'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        
        header("location: ../interfaz/principal.php");
        session_start();
        $_SESSION['username'] = $username;
        die();
    }
    else{

        echo '<script language="javascript">alert("Usuario o clave incorrectos");window.location.href="../interfaz/index.html"</script>';

    }
}

?>
