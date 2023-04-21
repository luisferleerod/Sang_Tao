<?php 

include ("dbh.inc.php");

session_start();
if(isset($_SESSION['username'])){

$username = $_SESSION['username'];
$titulo = $_POST["titulo"];
$desc = $_POST["descripcion"];
$imp = $_POST["importancia"];
$fechai = $_POST["fechai"];
$fechaf = $_POST["fechaf"];
$fechaimysql =date('Y-m-d H:i:s', strtotime($fechai)); 
$fechafmysql =date('Y-m-d H:i:s', strtotime($fechaf)); 

if(isset($_POST["crear"])){

    if($imp=='importante'){
        $sqlgraba = "INSERT INTO actividad(usuario,titulo,descripcion,fecha_hora_inicio,fecha_hora_fin,id_importancia,id_urgencia) 
        values ('$username','$titulo','$desc','$fechaimysql','$fechafmysql',1,1)";
            try{
                if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }
        }
        catch(Throwable $e) {
            echo "error: ".$e->getMessage();
        }
    }
    else if($imp=='no_importante'){
        $sqlgraba = "INSERT INTO actividad(usuario,titulo,descripcion,fecha_hora_inicio,fecha_hora_fin,id_importancia,id_urgencia) 
        values ('$username','$titulo','$desc','$fechaimysql','$fechafmysql',2,1)";
            if(mysqli_query($con,$sqlgraba)){
    
                header("location: ../interfaz/principal.html");
                die();
            }
            else{
                header("location: ../interfaz/Actividadxentrega.html");
                die();
            }      
    }



}

}







?>