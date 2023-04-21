<?php

include ("dbh.inc.php");
$username = $_POST["username"];

$password = $_POST["password"];
 

if(isset($_POST["entrar"])){
    $query = mysqli_query($con,"SELECT * FROM usuario WHERE usuario = '$username' AND clave = '$password'");
    $nr = mysqli_num_rows($query);
    if($nr==1){
        header("location: ../interfaz/principal.html");
        session_start();
        $_SESSION['username'] = $username;
        die();
    }
    else{
        header("location: ../interfaz/index.html");
        die();
    }
}

?>
